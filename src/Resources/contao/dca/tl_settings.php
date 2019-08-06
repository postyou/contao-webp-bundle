<?php

$dc = &$GLOBALS['TL_DCA']['tl_settings'];

/**
 * Palettes
 */
$dc['palettes']['default'] = str_replace('gdMaxImgHeight;', 'gdMaxImgHeight, useWebP, webPQuality;', $dc['palettes']['default']);


/**
 * Fields
 */
$arrFields = [
    'useWebP' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_settings']['useWebP'],
        'exclude'   => true,
        'eval'      => array('tl_class' => 'clr w50'),
        'inputType' => 'checkbox',
    ],
    'webPQuality' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_settings']['webPQuality'],
        'exclude'   => true,
        'eval'      => array('tl_class' => 'w50', "rgxp" => "natural"),
        'inputType' => 'text',
        'save_callback' => array(function($val, $dc) {\Config::persist('webPQualityChanged',true); return $val;}),

    ],
    'webPQualityChanged' => [
        'exclude'   => true,
    ]
];

$dc['fields'] = array_merge($dc['fields'], $arrFields);
