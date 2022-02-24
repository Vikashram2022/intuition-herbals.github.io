<?php

class Mixxcazt_Merlin_Config {

    private $wizard;

    public function __construct() {
        $this->init();
        add_action('merlin_import_files', [$this, 'import_files']);
        add_action('merlin_after_all_import', [$this, 'after_import_setup'], 10, 1);
        add_filter('merlin_generate_child_functions_php', [$this, 'render_child_functions_php']);
    }

    public function import_files(){
            return array(
            array(
                'import_file_name'           => 'home 1',
                'home'                       => 'home-1',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-1.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-1/slider-1.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_1.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-1',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 10',
                'home'                       => 'home-10',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-10.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-10/slider-10.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_10.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-10',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 11',
                'home'                       => 'home-11',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-11.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-11/slider-11.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_11.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-11',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"6"}',
            ),

            array(
                'import_file_name'           => 'home 12',
                'home'                       => 'home-12',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-12.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-12/slider-12.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_12.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-12',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 13',
                'home'                       => 'home-13',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-13.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-13/slider-13.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_13.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-13',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 14',
                'home'                       => 'home-14',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-14.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-14/slider-14.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_14.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-14',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"},{"_id":"secondary","title":"Secondary","color":"#ec6161"},{"_id":"secondary_hover","title":"Secondary Hover","color":"#f1534b"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"5"}',
            ),

            array(
                'import_file_name'           => 'home 15',
                'home'                       => 'home-15',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-15.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-15/slider-15.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_15.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-15',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 16',
                'home'                       => 'home-16',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-16.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-16/slider-16.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_16.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-16',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"3"}',
            ),

            array(
                'import_file_name'           => 'home 17',
                'home'                       => 'home-17',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-17.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-17/slider-17.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_17.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-17',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"1"}',
            ),

            array(
                'import_file_name'           => 'home 18',
                'home'                       => 'home-18',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-18.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-18/slider-18.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_18.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-18',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"3"}',
            ),

            array(
                'import_file_name'           => 'home 19',
                'home'                       => 'home-19',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-19.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-19/slider-19.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_19.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-19',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 2',
                'home'                       => 'home-2',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-2.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-2/Revslider-Home-2.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_2.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-2',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"},{"_id":"secondary","title":"Secondary","color":"#5faf4b"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 20',
                'home'                       => 'home-20',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-20.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-20/slider-20.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_20.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-20',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 21',
                'home'                       => 'home-21',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-21.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-21/slider-21.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_21.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-21',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"3"}',
            ),

            array(
                'import_file_name'           => 'home 22',
                'home'                       => 'home-22',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-22.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-22/slider-22.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_22.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-22',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"},{"_id":"secondary","title":"Secondary","color":"#6fb419"},{"_id":"secondary_hover","title":"Secondary Hover","color":"#66a319"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 23',
                'home'                       => 'home-23',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-23.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-23/Revslider_home_232.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_23.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-23',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"},{"_id":"secondary","title":"Secondary","color":"#76ca10"},{"_id":"secondary_hover","title":"Secondary Hover","color":"#6ebb0f"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"4"}',
            ),

            array(
                'import_file_name'           => 'home 24',
                'home'                       => 'home-24',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-24.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-24/Revslider_home_24.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_24.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-24',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 25',
                'home'                       => 'home-25',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-25.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-25/slider-25.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_25.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-25',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"3"}',
            ),

            array(
                'import_file_name'           => 'home 26',
                'home'                       => 'home-26',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-26.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-26/slider-26.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_26.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-26',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 27',
                'home'                       => 'home-27',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-27.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-27/slider-27.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_27.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-27',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 28',
                'home'                       => 'home-28',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-28.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-28/slider-28.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_28.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-28',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 29',
                'home'                       => 'home-29',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-29.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-29/slider-29.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_29.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-29',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 3',
                'home'                       => 'home-3',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-3.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-3/slider-3.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_3.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-3',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 30',
                'home'                       => 'home-30',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-30.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-30/slider-30.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_30.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-30',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 4',
                'home'                       => 'home-4',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-4.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-4/slider-4.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_4.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-4',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"6"}',
            ),

            array(
                'import_file_name'           => 'home 5',
                'home'                       => 'home-5',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-5.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-5/slider-5.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_5.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-5',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),

            array(
                'import_file_name'           => 'home 6',
                'home'                       => 'home-6',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-6.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-6/Slider-6.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_6.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-6',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"5"}',
            ),

            array(
                'import_file_name'           => 'home 7',
                'home'                       => 'home-7',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-7.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-7/slider-7.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_7.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-7',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"3"}',
            ),

            array(
                'import_file_name'           => 'home 8',
                'home'                       => 'home-8',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-8.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-8/slider-8.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_8.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-8',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"},{"_id":"secondary","title":"Secondary","color":"#0062bd"},{"_id":"secondary_hover","title":"Secondary Hover","color":"#00449e"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"1"}',
            ),

            array(
                'import_file_name'           => 'home 9',
                'home'                       => 'home-9',
                'homepage'                   => get_theme_file_path('/dummy-data/homepage/home-9.xml'),
                'local_import_file'          => get_theme_file_path('/dummy-data/content.xml'),
                'local_import_widget_file'   => get_theme_file_path('/dummy-data/widgets.json'),
                'import_rev_slider_file_url' => 'http://source.wpopal.com/mixxcazt/dummy_data/revsliders/home-9/slider-9.zip',
                'import_preview_image_url'   => get_theme_file_uri('/assets/images/oneclick/home_9.jpg'),
                'preview_url'                => 'https://demo2.prestabrain.com/mixxcazt/home-9',
                'colors'                     => '{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}',
                'themeoptions'               => '{"mixxcazt_options_wocommerce_block_style":"2"}',
            ),
            );
        }

    public function after_import_setup($selected_import) {
        $selected_import = ($this->import_files())[$selected_import];
        $check_oneclick  = get_option('mixxcazt_check_oneclick', []);

        $this->set_demo_menus();

        // setup Home page
        $home = get_page_by_path($selected_import['home']);
        if ($home) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $home->ID);
        }

        // Setup Options
        $options = $this->get_all_options();

        // Elementor
        $active_kit_id = Elementor\Plugin::$instance->kits_manager->get_active_id();
        $newColors     = json_decode($selected_import['colors'], true);
        update_post_meta($active_kit_id, '_elementor_page_settings', $newColors);

        // Options
        $theme_options = wp_parse_args(json_decode($selected_import['themeoptions'], true), $options['options']);
        foreach ($theme_options as $key => $option) {
            update_option($key, $option);
        }

        if (!isset($check_oneclick['elementor'])) {
            $this->fixelementor();
            $this->updateElementor();
            $check_oneclick['elementor'] = true;
        }

        //Mailchimp
        if (!isset($check_oneclick['mailchip'])) {
            $mailchimp = get_page_by_title('mixxcazt mailchimp', OBJECT, 'mc4wp-form');
            if ($mailchimp) {
                update_option('mc4wp_default_form_id', $mailchimp->ID);
            }
            $check_oneclick['mailchip'] = true;
        }

        // Header Footer Builder
        $this->reset_header_footer();
//        $this->delete_duplicate_hf();
        $this->set_hf($selected_import['home']);

        if (!isset($check_oneclick['logo'])) {
            set_theme_mod('custom_logo', 3281);
            $check_oneclick['logo'] = true;
        }

        update_option('mixxcazt_check_oneclick', $check_oneclick);

        \Elementor\Plugin::instance()->files_manager->clear_cache();
    }

    private function init() {
        $this->wizard = new Merlin(
            $config = array(
                // Location / directory where Merlin WP is placed in your theme.
                'merlin_url'         => 'merlin',
                // The wp-admin page slug where Merlin WP loads.
                'parent_slug'        => 'themes.php',
                // The wp-admin parent page slug for the admin menu item.
                'capability'         => 'manage_options',
                // The capability required for this menu to be displayed to the user.
                'dev_mode'           => true,
                // Enable development mode for testing.
                'license_step'       => false,
                // EDD license activation step.
                'license_required'   => false,
                // Require the license activation step.
                'license_help_url'   => '',
                'directory'          => '/inc/merlin',
                // URL for the 'license-tooltip'.
                'edd_remote_api_url' => '',
                // EDD_Theme_Updater_Admin remote_api_url.
                'edd_item_name'      => '',
                // EDD_Theme_Updater_Admin item_name.
                'edd_theme_slug'     => '',
                // EDD_Theme_Updater_Admin item_slug.
            ),
            $strings = array(
                'admin-menu'          => esc_html__('Theme Setup', 'mixxcazt'),

                /* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
                'title%s%s%s%s'       => esc_html__('%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'mixxcazt'),
                'return-to-dashboard' => esc_html__('Return to the dashboard', 'mixxcazt'),
                'ignore'              => esc_html__('Disable this wizard', 'mixxcazt'),

                'btn-skip'                 => esc_html__('Skip', 'mixxcazt'),
                'btn-next'                 => esc_html__('Next', 'mixxcazt'),
                'btn-start'                => esc_html__('Start', 'mixxcazt'),
                'btn-no'                   => esc_html__('Cancel', 'mixxcazt'),
                'btn-plugins-install'      => esc_html__('Install', 'mixxcazt'),
                'btn-child-install'        => esc_html__('Install', 'mixxcazt'),
                'btn-content-install'      => esc_html__('Install', 'mixxcazt'),
                'btn-import'               => esc_html__('Import', 'mixxcazt'),
                'btn-license-activate'     => esc_html__('Activate', 'mixxcazt'),
                'btn-license-skip'         => esc_html__('Later', 'mixxcazt'),

                /* translators: Theme Name */
                'license-header%s'         => esc_html__('Activate %s', 'mixxcazt'),
                /* translators: Theme Name */
                'license-header-success%s' => esc_html__('%s is Activated', 'mixxcazt'),
                /* translators: Theme Name */
                'license%s'                => esc_html__('Enter your license key to enable remote updates and theme support.', 'mixxcazt'),
                'license-label'            => esc_html__('License key', 'mixxcazt'),
                'license-success%s'        => esc_html__('The theme is already registered, so you can go to the next step!', 'mixxcazt'),
                'license-json-success%s'   => esc_html__('Your theme is activated! Remote updates and theme support are enabled.', 'mixxcazt'),
                'license-tooltip'          => esc_html__('Need help?', 'mixxcazt'),

                /* translators: Theme Name */
                'welcome-header%s'         => esc_html__('Welcome to %s', 'mixxcazt'),
                'welcome-header-success%s' => esc_html__('Hi. Welcome back', 'mixxcazt'),
                'welcome%s'                => esc_html__('This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'mixxcazt'),
                'welcome-success%s'        => esc_html__('You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'mixxcazt'),

                'child-header'         => esc_html__('Install Child Theme', 'mixxcazt'),
                'child-header-success' => esc_html__('You\'re good to go!', 'mixxcazt'),
                'child'                => esc_html__('Let\'s build & activate a child theme so you may easily make theme changes.', 'mixxcazt'),
                'child-success%s'      => esc_html__('Your child theme has already been installed and is now activated, if it wasn\'t already.', 'mixxcazt'),
                'child-action-link'    => esc_html__('Learn about child themes', 'mixxcazt'),
                'child-json-success%s' => esc_html__('Awesome. Your child theme has already been installed and is now activated.', 'mixxcazt'),
                'child-json-already%s' => esc_html__('Awesome. Your child theme has been created and is now activated.', 'mixxcazt'),

                'plugins-header'         => esc_html__('Install Plugins', 'mixxcazt'),
                'plugins-header-success' => esc_html__('You\'re up to speed!', 'mixxcazt'),
                'plugins'                => esc_html__('Let\'s install some essential WordPress plugins to get your site up to speed.', 'mixxcazt'),
                'plugins-success%s'      => esc_html__('The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'mixxcazt'),
                'plugins-action-link'    => esc_html__('Advanced', 'mixxcazt'),

                'import-header'      => esc_html__('Import Content', 'mixxcazt'),
                'import'             => esc_html__('Let\'s import content to your website, to help you get familiar with the theme.', 'mixxcazt'),
                'import-action-link' => esc_html__('Advanced', 'mixxcazt'),

                'ready-header'      => esc_html__('All done. Have fun!', 'mixxcazt'),

                /* translators: Theme Author */
                'ready%s'           => esc_html__('Your theme has been all set up. Enjoy your new theme by %s.', 'mixxcazt'),
                'ready-action-link' => esc_html__('Extras', 'mixxcazt'),
                'ready-big-button'  => esc_html__('View your website', 'mixxcazt'),
                'ready-link-1'      => sprintf('<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__('Explore WordPress', 'mixxcazt')),
                'ready-link-2'      => sprintf('<a href="%1$s" target="_blank">%2$s</a>', 'https://themebeans.com/contact/', esc_html__('Get Theme Support', 'mixxcazt')),
                'ready-link-3'      => sprintf('<a href="%1$s">%2$s</a>', admin_url('customize.php'), esc_html__('Start Customizing', 'mixxcazt')),
            )
        );
        if (mixxcazt_is_elementor_activated()) {

            add_action('widgets_init', [$this, 'widgets_init']);

        }
    }

    public function render_child_functions_php() {
        $output
            = "<?php
/**
 * Theme functions and definitions.
 */
		 ";

        return $output;
    }

    private function delete_duplicate_hf() {
        global $wpdb, $table_prefix;
        $sql = "DELETE bad_rows.* from " . $table_prefix . "posts as bad_rows inner join ( select post_title, MIN(id) as min_id from " . $table_prefix . "posts where post_type = 'elementor-hf' group by post_title having count(*) > 1 ) as good_rows on good_rows.post_title = bad_rows.post_title and good_rows.min_id <> bad_rows.id";

        return $wpdb->get_results($sql);
    }


    public function widgets_init() {
        require_once get_parent_theme_file_path('/inc/merlin/includes/recent-post.php');
        register_widget('Mixxcazt_WP_Widget_Recent_Posts');
        if (mixxcazt_is_woocommerce_activated()) {
            require_once get_parent_theme_file_path('/inc/merlin/includes/class-wc-widget-layered-nav.php');
            register_widget('Mixxcazt_Widget_Layered_Nav');
        }
    }

    private function get_all_header_footer() {
        return [
            'home-1'  => [
                'header' => [
                    [
                        'slug'                         => 'header-1',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-1',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-2'  => [
                'header' => [
                    [
                        'slug'                         => 'header-2',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-2',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-3'  => [
                'header' => [
                    [
                        'slug'                         => 'header-3',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-3',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-4'  => [
                'header' => [
                    [
                        'slug'                         => 'header-4',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-4',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-5'  => [
                'header' => [
                    [
                        'slug'                         => 'header-5',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-1',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-6'  => [
                'header' => [
                    [
                        'slug'                         => 'header-6',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-5',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-7'  => [
                'header' => [
                    [
                        'slug'                         => 'header-7',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-6',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-8'  => [
                'header' => [
                    [
                        'slug'                         => 'header-8',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-7',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-9'  => [
                'header' => [
                    [
                        'slug'                         => 'header-9',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-8',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-10' => [
                'header' => [
                    [
                        'slug'                         => 'header-10',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-7',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-11' => [
                'header' => [
                    [
                        'slug'                         => 'header-16',
                        'ehf_target_include_locations' => ['rule' => ['specifics'], 'specific' => ['post-' . $this->get_page_id_by_slug('home-11')]],
                    ],
                    [
                        'slug'                         => 'header-11',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                        'ehf_target_exclude_locations' => ['rule' => ['specifics'], 'specific' => ['post-' . $this->get_page_id_by_slug('home-11')]],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-4',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-12' => [
                'header' => [
                    [
                        'slug'                         => 'header-12',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-9',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-13' => [
                'header' => [
                    [
                        'slug'                         => 'header-4',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-10',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-14' => [
                'header' => [
                    [
                        'slug'                         => 'header-13',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-11',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-15' => [
                'header' => [
                    [
                        'slug'                         => 'header-14',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-12',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-16' => [
                'header' => [
                    [
                        'slug'                         => 'header-7',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-6',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-17' => [
                'header' => [
                    [
                        'slug'                         => 'header-15',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-13',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-18' => [
                'header' => [
                    [
                        'slug'                         => 'header-16',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-14',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-19' => [
                'header' => [
                    [
                        'slug'                         => 'header-17',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-15',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-20' => [
                'header' => [
                    [
                        'slug'                         => 'header-16',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-1',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-21' => [
                'header' => [
                    [
                        'slug'                         => 'header-18',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-16',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-22' => [
                'header' => [
                    [
                        'slug'                         => 'header-19',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-1',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-23' => [
                'header' => [
                    [
                        'slug'                         => 'header-20',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-17',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-24' => [
                'header' => [
                    [
                        'slug'                         => 'header-10',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-7',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-25' => [
                'header' => [
                    [
                        'slug'                         => 'header-21',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-18',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-26' => [
                'header' => [
                    [
                        'slug'                         => 'header-11',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-19',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-27' => [
                'header' => [
                    [
                        'slug'                         => 'header-22',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-3',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-28' => [
                'header' => [
                    [
                        'slug'                         => 'header-23',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-20',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-29' => [
                'header' => [
                    [
                        'slug'                         => 'header-24',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-17',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
            'home-30' => [
                'header' => [
                    [
                        'slug'                         => 'header-10',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ],
                'footer' => [
                    [
                        'slug'                         => 'footer-21',
                        'ehf_target_include_locations' => ['rule' => ['basic-global'], 'specific' => []],
                    ]
                ]
            ],
        ];
    }

    private function reset_header_footer() {
        $footer_args = array(
            'post_type'      => 'elementor-hf',
            'posts_per_page' => -1,
            'meta_query'     => array(
                array(
                    'key'     => 'ehf_template_type',
                    'compare' => 'IN',
                    'value'   => ['type_footer', 'type_header']
                ),
            )
        );
        $footer      = new WP_Query($footer_args);
        while ($footer->have_posts()) : $footer->the_post();
            update_post_meta(get_the_ID(), 'ehf_target_include_locations', []);
            update_post_meta(get_the_ID(), 'ehf_target_exclude_locations', []);
        endwhile;
        wp_reset_postdata();
    }

    private function updateElementor() {
        $query = new WP_Query(array(
            'post_type'      => [
                'page',
                'elementor_library',
            ],
            'posts_per_page' => -1
        ));
        while ($query->have_posts()): $query->the_post();
            $postid = get_the_ID();
            if (get_post_meta($postid, '_elementor_edit_mode', true) === 'builder') {
                $data = json_decode(get_post_meta($postid, '_elementor_data', true), true);
                $data = $this->updateElementorData($data);
                update_post_meta($postid, '_elementor_data', wp_slash(wp_json_encode($data)));
            }
        endwhile;
        wp_reset_postdata();
    }

    private function updateElementorData($datas) {
        if (count($datas) <= 0) {
            return $datas;
        }
        foreach ($datas as $key => $data) {
            // Contact Form
            if (isset($data['settings']['cf_id']) && $data['settings']['cf_id']) {
                if (absint($data['settings']['cf_id']) == 5883) {
                    $data['settings']['cf_id'] = $this->get_attachment('_contact_form_1');
                } elseif (absint($data['settings']['cf_id']) == 11052) {
                    $data['settings']['cf_id'] = $this->get_attachment('_contact_form_2');
                } elseif (absint($data['settings']['cf_id']) == 11092) {
                    $data['settings']['cf_id'] = $this->get_attachment('_contact_form_3');
                }
            }

            if (!empty($data['elements'])) {
                $data['elements'] = $this->updateElementorData($data['elements']);
            }
            $datas[$key] = $data;
        }

        return $datas;
    }

    private function get_attachment($key) {
        $params = array(
            'post_type'      => 'attachment',
            'post_status'    => 'inherit',
            'posts_per_page' => 1,
            'meta_key'       => $key,
        );
        $post   = get_posts($params);
        if ($post) {
            return $post[0]->ID;
        }
        return 0;
    }

    private function fixelementorhome($slug, $post_type = 'page') {
        $datas = json_decode(file_get_contents(get_parent_theme_file_path('dummy-data/ejson.json')), true);
        $home  = get_page_by_path($slug, OBJECT, $post_type);
        update_post_meta($home->ID, '_elementor_data', wp_slash(wp_json_encode($datas[$slug])));
    }

    private function fixelementor() {
        $datas = $this->get_data_elementor();
        $query = new WP_Query(array(
            'post_type'      => [
                'page',
                'post',
                'elementor-hf',
            ],
            'posts_per_page' => -1
        ));
        while ($query->have_posts()): $query->the_post();
            global $post;
            $postid = get_the_ID();
            if (get_post_meta($post->ID, '_elementor_edit_mode', true) === 'builder') {
                $data = json_decode(get_post_meta($postid, '_elementor_data', true));
                if (!boolval($data)) {
                    if (isset($datas[$post->post_name])) {
                        update_post_meta($postid, '_elementor_data', wp_slash(wp_json_encode($datas[$post->post_name])));
                    }
                }
            }
        endwhile;
        wp_reset_postdata();
    }

    public function get_all_options(){
            $options = [];
            $options['options']   = json_decode('{"mixxcazt_options_wocommerce_block_style":"1","mixxcazt_options_social_share":"1","mixxcazt_options_social_share_facebook":"1","mixxcazt_options_social_share_twitter":"1","mixxcazt_options_social_share_google-plus":"1","mixxcazt_options_social_share_linkedin":"1","mixxcazt_options_social_share_email":"","mixxcazt_options_single_product_gallery_layout":"horizontal","mixxcazt_options_woocommerce_product_hover":"fade"}', true);
            $options['elementor']   = json_decode('{"system_colors":[{"_id":"primary","title":"Primary","color":"#85b81a"},{"_id":"primary_hover","title":"Primary Hover","color":"#62931a"},{"_id":"text","title":"Text","color":"#666666"},{"_id":"accent","title":"Heading","color":"#000000"},{"_id":"lighter","title":"Lighter","color":"#999999"},{"_id":"border","title":"Border","color":"#EEEEEE"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom"},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom"},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","site_name":"Mixxcazt","site_description":"Multi-store WooCommerce Theme","page_title_selector":"h1.entry-title","activeItemIndex":1,"container_width":{"unit":"px","size":1290,"sizes":[]},"space_between_widgets":{"unit":"px","size":0,"sizes":[]},"button_typography_typography":"custom","button_typography_font_size":{"unit":"px","size":12,"sizes":[]},"button_typography_font_weight":"700","button_typography_text_transform":"uppercase","button_typography_font_family":"Epilogue","button_text_color":"#FFFFFF","button_border_radius":{"unit":"px","top":"3","right":"3","bottom":"3","left":"3","isLinked":true},"button_padding":{"unit":"px","top":"17","right":"37","bottom":"17","left":"37","isLinked":false},"__globals__":{"button_background_color":"globals/colors?id=primary","button_hover_background_color":"globals/colors?id=primary_hover"},"viewport_md":768,"viewport_lg":1025}', true);

            return $options;
        }

    private function get_page_id_by_slug($slug) {
        $page = get_page_by_path($slug);
        if ($page) {
            return $page->ID;
        }
        return '0';
    }

    public function set_demo_menus() {
        $main_menu = get_term_by('name', 'Main Menu', 'nav_menu');

        set_theme_mod(
            'nav_menu_locations',
            array(
                'primary'  => $main_menu->term_id,
                'handheld' => $main_menu->term_id,
            )
        );
    }

    private function set_hf($home) {
        $all_hf = $this->get_all_header_footer();
        $datas  = $all_hf[$home];
        foreach ($datas as $item) {
            foreach ($item as $object) {
                $hf = get_page_by_path($object['slug'], OBJECT, 'elementor-hf');
                if ($hf) {
                    update_post_meta($hf->ID, 'ehf_target_include_locations', $object['ehf_target_include_locations']);
                    if (isset($object['ehf_target_exclude_locations'])) {
                        update_post_meta($hf->ID, 'ehf_target_exclude_locations', $object['ehf_target_exclude_locations']);
                    }
                }
            }
        }
    }

    private function get_data_elementor(){
    }
}

return new Mixxcazt_Merlin_Config();