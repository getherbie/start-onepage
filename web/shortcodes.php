<?php

$shortcode = Herbie\DI::get('Shortcode');

// icon
$shortcode->add('icon', function ($atts) {
    $atts = array_merge([
        'type' => isset($atts[0]) ? $atts[0] : 'clock'
    ], (array)$atts);
    return sprintf('<span class="feature-icon"><span class="icon fa-%s"></span></span>', $atts['type']);
});

// header
$shortcode->add('header', function ($atts) {
    $atts = array_merge([
        'text' => isset($atts[0]) ? $atts[0] : 'Header'
    ], (array)$atts);
    return sprintf('<header><h3>%s</h3></header>', $atts['text']);
});

// button
$shortcode->add('button', function ($atts) {
    $atts = array_merge([
        'href' => isset($atts[0]) ? $atts[0] : '',
        'text' => 'Mein Text'
    ], (array)$atts);
    return sprintf('<a href="%s" class="button scrolly">%s</a>', $atts['href'], $atts['text']);
});
