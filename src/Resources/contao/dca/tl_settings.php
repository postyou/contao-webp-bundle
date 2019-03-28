<?php

$dc = &$GLOBALS['TL_DCA']['tl_settings'];

/**
 * Palettes
 */
$dc['palettes']['default'] = str_replace('gdMaxImgHeight;', 'gdMaxImgHeight, useWebP;', $dc['palettes']['default']);


/**
 * Fields
 */
$arrFields = [
    'useWebP' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_settings']['useWebP'],
        'exclude'   => true,
        'eval'      => array('tl_class' => 'clr'),
        'inputType' => 'checkbox',
        'sql'       => "char(1) NOT NULL default ''",
    ]
];

$dc['fields'] = array_merge($dc['fields'], $arrFields);
