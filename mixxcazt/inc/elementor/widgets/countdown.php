<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Mixxcazt_Elementor_Countdown extends Elementor\Widget_Base {

	public function get_name() {
		return 'mixxcazt-countdown';
	}

	public function get_title() {
		return esc_html__( 'mixxcazt Countdown', 'mixxcazt' );
	}

	public function get_categories() {
		return array( 'mixxcazt-addons' );
	}

	public function get_icon() {
		return 'eicon-countdown';
	}

	public function get_script_depends() {
		return [ 'mixxcazt-elementor-countdown' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_countdown',
			[
				'label' => esc_html__( 'Countdown', 'mixxcazt' ),
			]
		);

        $this->add_control(
            'countdown_style',
            [
                'label'       => esc_html__( 'Style', 'mixxcazt' ),
                'type'        => Controls_Manager::SELECT,
                'options'   => [
                        'style-1'   => esc_html__('Style 1','mixxcazt'),
                        'style-2'   => esc_html__('Style 2','mixxcazt'),
                        'style-3'   => esc_html__('Style 3','mixxcazt'),
                        'style-4'   => esc_html__('Style 4','mixxcazt'),
                        'style-5'   => esc_html__('Style 5','mixxcazt'),
                        'style-6'   => esc_html__('Style 6','mixxcazt'),
                ],
                'default'   => 'style-1',
                'prefix_class'  => 'countdown-'
            ]
        );

		$this->add_control(
			'due_date',
			[
				'label'       => esc_html__( 'Due Date', 'mixxcazt' ),
				'type'        => Controls_Manager::DATE_TIME,
				'default'     => date( 'Y-m-d H:i', strtotime( '+1 month' ) + ( get_option( 'gmt_offset' ) * HOUR_IN_SECONDS ) ),
				/* translators: %s: Time zone. */
				'description' => sprintf( esc_html__( 'Date set according to your timezone: %s.', 'mixxcazt' ), Utils::get_timezone_string() ),
			]
		);

		$this->add_control(
			'show_days',
			[
				'label'     => esc_html__( 'Days', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'mixxcazt' ),
				'label_off' => esc_html__( 'Hide', 'mixxcazt' ),
				'default'   => 'yes',
			]
		);

		$this->add_control(
			'show_hours',
			[
				'label'     => esc_html__( 'Hours', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'mixxcazt' ),
				'label_off' => esc_html__( 'Hide', 'mixxcazt' ),
				'default'   => 'yes',
			]
		);

		$this->add_control(
			'show_minutes',
			[
				'label'     => esc_html__( 'Minutes', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'mixxcazt' ),
				'label_off' => esc_html__( 'Hide', 'mixxcazt' ),
				'default'   => 'yes',
			]
		);

		$this->add_control(
			'show_seconds',
			[
				'label'     => esc_html__( 'Seconds', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'mixxcazt' ),
				'label_off' => esc_html__( 'Hide', 'mixxcazt' ),
				'default'   => 'yes',
			]
		);

		$this->add_control(
			'show_labels',
			[
				'label'     => esc_html__( 'Show Label', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'mixxcazt' ),
				'label_off' => esc_html__( 'Hide', 'mixxcazt' ),
				'default'   => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'custom_labels',
			[
				'label'     => esc_html__( 'Custom Label', 'mixxcazt' ),
				'type'      => Controls_Manager::SWITCHER,
				'condition' => [
					'show_labels!' => '',
				],
			]
		);

		$this->add_control(
			'label_days',
			[
				'label'       => esc_html__( 'Days', 'mixxcazt' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Days', 'mixxcazt' ),
				'placeholder' => esc_html__( 'Days', 'mixxcazt' ),
				'condition'   => [
					'show_labels!'   => '',
					'custom_labels!' => '',
					'show_days'      => 'yes',
				],
			]
		);

		$this->add_control(
			'label_hours',
			[
				'label'       => esc_html__( 'Hours', 'mixxcazt' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Hours', 'mixxcazt' ),
				'placeholder' => esc_html__( 'Hours', 'mixxcazt' ),
				'condition'   => [
					'show_labels!'   => '',
					'custom_labels!' => '',
					'show_hours'     => 'yes',
				],
			]
		);

		$this->add_control(
			'label_minutes',
			[
				'label'       => esc_html__( 'Minutes', 'mixxcazt' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Minutes', 'mixxcazt' ),
				'placeholder' => esc_html__( 'Minutes', 'mixxcazt' ),
				'condition'   => [
					'show_labels!'   => '',
					'custom_labels!' => '',
					'show_minutes'   => 'yes',
				],
			]
		);

		$this->add_control(
			'label_seconds',
			[
				'label'       => esc_html__( 'Seconds', 'mixxcazt' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Seconds', 'mixxcazt' ),
				'placeholder' => esc_html__( 'Seconds', 'mixxcazt' ),
				'condition'   => [
					'show_labels!'   => '',
					'custom_labels!' => '',
					'show_seconds'   => 'yes',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_box_style',
			[
				'label' => esc_html__( 'Boxes', 'mixxcazt' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'container_width',
			[
				'label'      => esc_html__( 'Container Width', 'mixxcazt' ),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%'  => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => '%',
					'size' => 100,
				],
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-mixxcazt-countdown' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'items_width',
			[
				'label'      => esc_html__( 'Items Width', 'mixxcazt' ),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%'  => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-countdown-item' => 'width: {{SIZE}}{{UNIT}}; flex-basis: {{SIZE}}{{UNIT}};',
				],
				'separator'  => 'before',
			]
		);

		$this->add_responsive_control(
			'items_height',
			[
				'label'      => esc_html__( 'Items Height', 'mixxcazt' ),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%'  => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-countdown-item' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'box_background_color',
			[
				'label'     => esc_html__( 'Background Color', 'mixxcazt' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-countdown-item' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'box_padding',
			[
				'label'      => esc_html__( 'Padding', 'mixxcazt' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-countdown-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
            'box_margin',
            [
                'label'      => esc_html__( 'Margin', 'mixxcazt' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-countdown-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'image_border',
                'selector'  => '{{WRAPPER}} .elementor-countdown-item',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'mixxcazt'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-countdown-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'alignment',
            [
                'label' => esc_html__( 'Alignment', 'mixxcazt' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__( 'Left', 'mixxcazt' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'mixxcazt' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => esc_html__( 'Right', 'mixxcazt' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'selectors' => [
                    '{{WRAPPER}} .elementor-mixxcazt-countdown' => 'justify-content: {{VALUE}}',
                ],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_style',
			[
				'label' => esc_html__( 'Content', 'mixxcazt' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'content_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'mixxcazt' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-countdown-item' => 'border-color: {{VALUE}};',
                ],
                'default'   => ''
            ]
        );

		$this->add_control(
			'digits_color',
			[
				'label'     => esc_html__( 'Color digit', 'mixxcazt' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-countdown-digits, {{WRAPPER}} .elementor-countdown-item:after' => 'color: {{VALUE}};',
				],
				'default'   => ''
			]
		);

        $this->add_control(
            'digits_color_2',
            [
                'label'     => esc_html__( 'Bg Color digit', 'mixxcazt' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.countdown-style-1 .elementor-countdown-digits' => 'background: {{VALUE}};',
                    '{{WRAPPER}}.countdown-style-2 .elementor-countdown-digits' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}}.countdown-style-2 .elementor-countdown-digits:before' => 'background: {{VALUE}};',
                    '{{WRAPPER}}.countdown-style-2 .elementor-countdown-digits:after' => 'background: {{VALUE}};',
                ],
                'description'   => esc_html__('Background Or Border Color' , 'mixxcazt'),
            ]
        );

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'digits_typography',
				'selector' => '{{WRAPPER}} .elementor-countdown-digits',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'border_digits',
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .elementor-countdown-digits',
			]
		);

        $this->add_control(
            'digits_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'mixxcazt'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-countdown-digits' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
			'digits_padding',
			[
				'label'      => esc_html__( 'Padding digits', 'mixxcazt' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-countdown-digits' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
            'digits_margin',
            [
                'label'      => esc_html__( 'Margin digits', 'mixxcazt' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-countdown-digits' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'heading_label',
			[
				'label'     => esc_html__( 'Label', 'mixxcazt' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'label_color',
			[
				'label'     => esc_html__( 'Color label', 'mixxcazt' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-countdown-label' => 'color: {{VALUE}};',
				],
				'default'   => ''
			]
		);

        $this->add_control(
            'decor_color',
            [
                'label'     => esc_html__( 'Color decor', 'mixxcazt' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-countdown-label:before, {{WRAPPER}} .elementor-countdown-label:after' => 'background-color: {{VALUE}};',
                ],
                'default'   => ''
            ]
        );

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'label_typography',
				'selector' => '{{WRAPPER}} .elementor-countdown-label',
			]
		);

		$this->add_responsive_control(
			'label_padding',
			[
				'label'      => esc_html__( 'Padding', 'mixxcazt' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-countdown-label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	private function get_strftime( $instance ) {
		$string = '';
		if ( $instance['show_days'] ) {
			$string .= $this->render_countdown_item( $instance, 'label_days', 'elementor-countdown-days' );
		}
		if ( $instance['show_hours'] ) {
			$string .= $this->render_countdown_item( $instance, 'label_hours', 'elementor-countdown-hours' );
		}
		if ( $instance['show_minutes'] ) {
			$string .= $this->render_countdown_item( $instance, 'label_minutes', 'elementor-countdown-minutes' );
		}
		if ( $instance['show_seconds'] ) {
			$string .= $this->render_countdown_item( $instance, 'label_seconds', 'elementor-countdown-seconds' );
		}

		return $string;
	}

	private $_default_countdown_labels;

	private function _init_default_countdown_labels() {
		$this->_default_countdown_labels = [
			'label_months'  => esc_html__( 'Months', 'mixxcazt' ),
			'label_weeks'   => esc_html__( 'Weeks', 'mixxcazt' ),
			'label_days'    => esc_html__( 'Days', 'mixxcazt' ),
			'label_hours'   => esc_html__( 'Hours', 'mixxcazt' ),
			'label_minutes' => esc_html__( 'Minutes', 'mixxcazt' ),
			'label_seconds' => esc_html__( 'Seconds', 'mixxcazt' ),
		];
	}

	public function get_default_countdown_labels() {
		if ( ! $this->_default_countdown_labels ) {
			$this->_init_default_countdown_labels();
		}

		return $this->_default_countdown_labels;
	}

	public function render_countdown_item( $instance, $label, $part_class ) {
		$string = '<div class="elementor-countdown-item"><span class="elementor-countdown-digits ' . esc_attr( $part_class ) . '"></span>';

		if ( $instance['show_labels'] ) {
			$default_labels = $this->get_default_countdown_labels();
			$label          = ( $instance['custom_labels'] ) ? $instance[ $label ] : $default_labels[ $label ];
			$string         .= ' <span class="elementor-countdown-label">' . esc_html( $label ) . '</span>';
		}

		$string .= '</div>';

		return $string;
	}

	protected function render() {
		$instance = $this->get_settings();

		$due_date = $instance['due_date'];

		// Handle timezone ( we need to set GMT time )
		$due_date = strtotime( $due_date ) - ( get_option( 'gmt_offset' ) * HOUR_IN_SECONDS );
		?>
        <div class="elementor-mixxcazt-countdown" data-date="<?php echo esc_attr( $due_date ); ?>">
			<?php echo mixxcazt_elementor_get_strftime( $instance, $this ); // WPCS: XSS ok. ?>
        </div>
		<?php
	}
}

$widgets_manager->register_widget_type( new Mixxcazt_Elementor_Countdown() );
