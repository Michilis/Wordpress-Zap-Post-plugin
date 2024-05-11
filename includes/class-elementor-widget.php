<?php

class Elementor_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'wp_lightning_wallet';
    }

    public function get_title() {
        return __('Lightning Wallet', 'wp-lightning-wallet-connector');
    }

    public function get_icon() {
        return 'eicon-wallet';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Settings', 'wp-lightning-wallet-connector'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Add controls like a text input for LNURL
        $this->add_control(
            'lnurl',
            [
                'label' => __('LNURL', 'wp-lightning-wallet-connector'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => __('Enter LNURL here', 'wp-lightning-wallet-connector'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="wallet-container">';
        echo '<button onclick="sendZap(\'' . esc_attr($settings['lnurl']) . '\')">⚡️ Zap Now</button>';
        echo '</div>';
    }
}
