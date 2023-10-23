<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;

$GLOBALS['TL_DCA']['tl_content']['fields']['use_flex_gallery_image'] = [ 
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['use_flex_gallery_image'], 
    'inputType' => 'checkbox', 
    'search'    => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => array('type' => 'boolean', 'default' => false)
];

PaletteManipulator::create()
    ->addField('use_flex_gallery_image', 'image_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('gallery', 'tl_content') 
;
