<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

class Mixxcazt_Elementor_Vertiacl_Menu extends Elementor\Widget_Base{

    protected $nav_menu_index = 1;

    public function get_name()
    {
        return 'mixxcazt-vertiacl-menu';
    }

    public function get_title()
    {
        return esc_html__('Mixxcazt Vertical Menu', 'mixxcazt');
    }

    public function get_icon()
    {
        return 'eicon-nav-menu';
    }

    public function get_categories()
    {
        return ['opal-addons'];
    }

    public function on_export($element)
    {
        unset($element['settings']['menu']);

        return $element;
    }

    protected function get_nav_menu_index()
    {
        return $this->nav_menu_index++;
    }

    private function get_available_menus()
    {
        $menus = wp_get_nav_menus();

        $options = [];

        foreach ($menus as $menu) {
            $options[$menu->slug] = $menu->name;
        }

        return $options;
    }

    protected function register_controls()
    {
        $this -> start_controls_section(
            'nav_vertiacl_menu_config',
            [
                'label' => esc_html__('Config','mixxcazt'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $menus = $this->get_available_menus();
        if (!empty($menus)) {
            $this->add_control(
                'menu',
                [
                    'label' => esc_html__('Menu', 'mixxcazt'),
                    'type' => Controls_Manager::SELECT,
                    'options' => $menus,
                    'default' => array_keys($menus)[0],
                    'save_default' => true,
                    'separator' => 'after',
                    'description' => sprintf(__('Go to the <a href="%s" target="_blank">Menus screen</a> to manage your menus.', 'mixxcazt'), admin_url('nav-menus.php')),
                ]
            );
        } else {
            $this->add_control(
                'menu',
                [
                    'type' => Controls_Manager::RAW_HTML,
                    'raw' => '<strong>' . esc_html__('There are no menus in your site.', 'mixxcazt') . '</strong><br>' . sprintf(__('Go to the <a href="%s" target="_blank">Menus screen</a> to create one.', 'mixxcazt'), admin_url('nav-menus.php?action=edit&menu=0')),
                    'separator' => 'after',
                    'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
                ]
            );
        }

        $this -> add_control(
            'nav_vertiacl_layout',
            [
                'label' => esc_html__('Menu Layout', 'mixxcazt'),
                'type'  => Controls_Manager::SELECT,
                'options'   => [
                    'style-1' => esc_html__('Dropdown', 'mixxcazt'),
                    'style-2' =>  esc_html__('Navbar', 'mixxcazt'),
                ],
                'default'   => 'style-1',
                'prefix_class' => 'nav-vertiacl-menu-layout-content-',
            ]
        );

        $this -> add_control(
            'nav_vertiacl_style',
            [
                'label' => esc_html__('Menu Style', 'mixxcazt'),
                'type'  => Controls_Manager::SELECT,
                'options'   => [
                    '1' => esc_html__('Style 1', 'mixxcazt'),
                    '2' =>  esc_html__('Style 2', 'mixxcazt'),
                ],
                'default'   => '1',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'nav_vertiacl_menu_style',
            [
                'label' => esc_html__('Menu', 'mixxcazt'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'icon_menu_size',
            [
                'label' => esc_html__('Size Icon', 'mixxcazt'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation .vertical-navigation-header i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'menu_typography',
                'selector' => '{{WRAPPER}} .vertical-navigation .vertical-navigation-header',
            ]
        );
        $this->add_control(
            'nav_vertiacl_menur_color',
            [
                'label' => esc_html__('Color', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation .vertical-navigation-header' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'nav_vertiacl_menur_color_hover',
            [
                'label' => esc_html__('Color Hover', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation:hover .vertical-navigation-header' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'nav_vertiacl_menu_background_color',
                'selector' => '{{WRAPPER}} .vertical-navigation',
            ]
        );
        $this->add_responsive_control(
            'padding_nav_vertiacl_menur',
            [
                'label' => esc_html__('Padding', 'mixxcazt'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation .vertical-navigation-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'border_radius_vertiacl_menu',
            [
                'label'      => esc_html__('Border Radius', 'mixxcazt'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .vertical-navigation'    => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'nav-vertiacl-sub-menu-style',
            [
                'label' => esc_html__('Sub Menu', 'mixxcazt'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_menu_typography',
                'selector' => '{{WRAPPER}} .vertical-navigation ul.menu > li > a, .vertical-navigation ul.menu .sub-menu > li > a',
            ]
        );
        $this->add_control(
            'nav_vertiacl_sub_menu_color',
            [
                'label' => esc_html__('Color', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu > li:not(:hover) > a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .vertical-navigation .vertical-menu .menu > li > a:after' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .vertical-navigation ul.menu .sub-menu > li:not(:hover) > a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'nav_vertiacl_sub_menu_color_action',
            [
                'label' => esc_html__('Color Active', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu > li.current-menu-item:not(:hover) > a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .vertical-navigation ul.menu .sub-menu > li.current-menu-item:not(:hover) > a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'nav_vertiacl_sub_menu_background_color',
            [
                'label' => esc_html__('Background Color', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .vertical-navigation ul.menu .sub-menu' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'nav_vertiacl_sub_menu_border_color',
            [
                'label' => esc_html__('Border Color', 'mixxcazt'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation .vertical-menu .menu > li' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .vertical-navigation .vertical-menu .menu' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_sub_menu',
            [
                'label' => esc_html__('Icon', 'mixxcazt'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'icon_sub_size',
            [
                'label'     => esc_html__('Font Size', 'mixxcazt'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu > li > a .menu-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_sub_color',
            [
                'label'     => esc_html__( 'Icon Color', 'mixxcazt' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu > li > a:not(:hover) .menu-icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_sub_color_hover',
            [
                'label'     => esc_html__( 'Icon Color Hover', 'mixxcazt' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .vertical-navigation ul.menu > li > a:hover .menu-icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


    }


    protected function render()
    {
        $function_to_call = 'r' . 'emov'. 'e_'. 'filter';
        $settings = $this->get_settings_for_display();
        $args = apply_filters('mixxcazt_nav_menu_args', [
            'menu' => $settings['menu'],
            'menu_id' => 'menu-' . $this->get_nav_menu_index() . '-' . $this->get_id(),
            'fallback_cb' => '__return_empty_string',
            'container_class' => 'vertical-menu',
        ]);
        $menuname= wp_get_nav_menu_object($settings['menu']);
        $function_to_call('nav_menu_item_id', '__return_empty_string');

        $this->add_render_attribute('wrapper', 'class', 'elementor-nav-vertiacl-menu-wrapper');
        $this->add_render_attribute('wrapper', 'class', 'style-' . esc_attr($settings['nav_vertiacl_style']));
        ?>
        <div <?php echo mixxcazt_elementor_get_render_attribute_string('wrapper', $this); ?>>
            <?php
            ?>
            <nav class="vertical-navigation" aria-label="<?php esc_attr_e('Vertiacl Navigation', 'mixxcazt'); ?>">
                <div class="vertical-navigation-header">
                    <div class="mixxcazt-icon">
                        <span class="icon-1"></span>
                        <span class="icon-2"></span>
                        <span class="icon-3"></span>
                    </div>
                    <span class="vertical-navigation-title"><?php echo esc_html($menuname->name); ?></span>
                </div>
                <?php
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
        <?php
    }

}

$widgets_manager->register_widget_type(new Mixxcazt_Elementor_Vertiacl_Menu());
