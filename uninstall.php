<?php
if (! defined('WP_UNINSTALL_PLUGIN')) { exit; }
delete_option('wordpress_security_hardening_enabled');
