<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;

$GLOBALS['TL_DCA']['tl_content']['fields']['flex_gallery_image_height'] = [ 
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['flex_gallery_image_height'], 
    'inputType' => 'text', 
    'search'    => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(11) NOT NULL default ''" 
];

$GLOBALS['TL_DCA']['tl_content']['fields']['perRow']['eval']['tl_class'] = 'w25 hidden';
$GLOBALS['TL_DCA']['tl_content']['fields']['perPage']['eval']['tl_class'] = 'w25';
$GLOBALS['TL_DCA']['tl_content']['fields']['numberOfItems']['eval']['tl_class'] = 'w25';
$GLOBALS['TL_DCA']['tl_content']['fields']['fullsize']['eval']['tl_class'] = 'm12 w50';

PaletteManipulator::create()
    ->addField('flex_gallery_image_height', 'image_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('gallery', 'tl_content') 
;
