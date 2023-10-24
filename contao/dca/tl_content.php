<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;

$GLOBALS['TL_DCA']['tl_content']['fields']['use_fleximages'] = [ 
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['use_fleximages'], 
    'inputType' => 'checkbox', 
    'search'    => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => array('type' => 'boolean', 'default' => false)
];

PaletteManipulator::create()
    ->addField('use_fleximages', 'image_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('gallery', 'tl_content') 
;
