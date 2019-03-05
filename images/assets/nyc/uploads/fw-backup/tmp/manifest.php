<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $uri Demo directory url
 */

$manifest = array();
$manifest['title'] = esc_html__('Awesome Demo', 'fabio');
$manifest['screenshot'] = $uri . '/screenshot.png';
$manifest['preview_link'] = FABIO_SHORTCODES_DIR.'framework-customizations/demo-content/demo1/screenshot.png';