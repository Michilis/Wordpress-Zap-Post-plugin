<?php

class WP_Lightning_Wallet_Connector {
    public function __construct() {
        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    private function load_dependencies() {
        // Load other necessary classes and files
        include_once WPLWC_PATH . 'includes/class-elementor-widget.php';
    }

    private function define_admin_hooks() {
        add_action('elementor/widgets/widgets_registered', array($this, 'register_widgets'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function register_widgets() {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Elementor_Widget());
    }

    public function enqueue_scripts() {
        wp_enqueue_script('wplwc-main-js', WPLWC_URL . 'assets/js/main.js', array('jquery'), '1.0', true);
        wp_enqueue_style('wplwc-main-css', WPLWC_URL . 'assets/css/style.css');
    }

    public function run() {
        add_action('init', array($this, 'plugin_setup'));
    }

    public function plugin_setup() {
        // Setup tasks like registering shortcodes
    }
}
