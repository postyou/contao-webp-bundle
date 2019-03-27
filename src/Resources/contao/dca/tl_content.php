<?php
/**
 * Created by PhpStorm.
 * User: Mario-Laptop
 * Date: 26.03.2019
 * Time: 14:05
 */


$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addImage'] = $GLOBALS['TL_DCA']['tl_content']['subpalettes']['addImage'].',useWebP';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['useImage'] = $GLOBALS['TL_DCA']['tl_content']['subpalettes']['useImage'].',useWebP';

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace('fullsize,overwriteMeta','fullsize,overwriteMeta,useWebP',$GLOBALS['TL_DCA']['tl_content']['palettes']['image']);



$GLOBALS['TL_DCA']['tl_content']['fields']['useWebP'] = array
(
    'label'				=> &$GLOBALS['TL_LANG']['tl_content']['useWebP'],
    'exclude'			=> true,
    'inputType'			=> 'checkbox',
    'eval'				=> array('tl_class' => 'clr w50'),
    'sql'				=> "char(1) NOT NULL default ''",
);

