<?php
/**
 * Plugin Name: WordPress Security Hardening
 * Description: WordPress security hardening checklist, configuration examples, and incident-response notes.
 * Version: 0.1.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

namespace SangPortfolio;

if (! defined('ABSPATH')) {
    exit;
}

final class WordpressSecurityHardeningPlugin {
    public const VERSION = '0.1.0';

    public function __construct() {
        add_action('init', [$this, 'bootstrap']);
    }

    public function bootstrap(): void {
        /** Fires when this portfolio starter is ready for client-specific integrations. */
        do_action('sang_portfolio_wordpress_security_hardening_ready');
    }
}

new WordpressSecurityHardeningPlugin();
