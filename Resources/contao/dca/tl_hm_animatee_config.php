<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 29.05.2018
 * Time: 12:10
 */

namespace Home\AnimateeBundle\Resources\contao\dca;

use Home\PearlsBundle\Resources\contao\Helper\Dca as Helper;

$moduleName = 'tl_hm_animatee_config';

$GLOBALS['TL_DCA'][$moduleName] = [
    'palettes' => [
        '__selector__' => [],
    ],
    'subpalettes' => [
        '' => ''
    ]
];

try{
    $animatee = new Helper\DcaHelper($moduleName);
}catch(\Exception $e){
    var_dump($e);
}

try{
    $animatee
        #-- Config -----------------------------------------------------------------------------------------------------
        ->addConfig('liste')
        #-- List -------------------------------------------------------------------------------------------------------
        ->addList('base')
        #-- Sorting ----------------------------------------------------------------------------------------------------
        ->addSorting('liste')
        #-- Fields default ---------------------------------------------------------------------------------------------
        ->addField('id', 'id')
        ->addField('tstamp', 'tstamp')
        ->addField('name', 'name')
        ->addField('published', 'published')
        ->addField('alias','alias')
        #-- Fields -----------------------------------------------------------------------------------------------------
        ->addField('select','aosAnimation', array(
            'options_callback' => array('Home\AnimateeBundle\Resources\contao\dca\tl_hm_animatee_config', 'getAnimation'),
            'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
        ))
        ->addField('select', 'aosEasing', array(
            'options_callback' => array('Home\AnimateeBundle\Resources\contao\dca\tl_hm_animatee_config', 'getEasing'),
            'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
        ))
        ->addField('text', 'aosDuration', array(
            'explanation' => 'aosHelp',
            'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural', 'helpwizard' => true, 'minval' => 50, 'maxval' => 3000),
        ))
        ->addField('text', 'aosDelay', array(
            'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural'),
        ))
        ->addField('text', 'aosAnchor', array(
            'eval' => array('tl_class' => 'w50'),
        ))
        ->addField('select', 'aosAnchorPlacement', array(
            'options_callback' => array('Home\AnimateeBundle\Resources\contao\dca\tl_hm_animatee_config', 'getAnchorPlacement'),
            'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
        ))
        ->addField('text', 'aosOffset', array(
            'eval' => array('tl_class' => 'w50', 'rgxp' => 'natural'),
        ))
        ->addField('checkbox', 'aosOnce', array(
            'eval' => array('tl_class' => 'w50 m12'),
        ))
        #-- Palette ----------------------------------------------------------------------------------------------------
        ->addPaletteGroup('default', array(
            'name',
            'alias',
        ))
        ->addPaletteGroup('config', array(
            'aosAnimation',
            'aosEasing',
            'aosDuration',
            'aosDelay',
            'aosAnchor',
            'aosAnchorPlacement',
            'aosOffset',
            'aosOnce'
        ))
        ->addPaletteGroup('published', array(
            'published',
        ))
        #-- Operations -------------------------------------------------------------------------------------------------
        ->addOperation('edit', 'edit', array(),'_first')
        ->addOperation('copy')
        ->addOperation('delete','delete',array(
            'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;"'
        ))
        ->addOperation('toggle', 'toggle')
        ->addOperation('show')
        ;
}catch(\Exception $e){
    var_dump($e);
}

class tl_hm_animatee_config
{
    public function getAnimation()
    {
        return array(
            'fade' => array(
                'fade',
                'fade-up',
                'fade-down',
                'fade-left',
                'fade-right',
                'fade-up-right',
                'fade-up-left',
                'fade-down-right',
                'fade-down-left'
            ),
            'flip' => array(
                'flip-up',
                'flip-down',
                'flip-left',
                'flip-right'
            ),
            'slide' => array(
                'slide-up',
                'slide-down',
                'slide-left',
                'slide-right'
            ),
            'zoom' => array(
                'zoom-in',
                'zoom-in-up',
                'zoom-in-down',
                'zoom-in-left',
                'zoom-in-right',
                'zoom-out',
                'zoom-out-up',
                'zoom-out-down',
                'zoom-out-left',
                'zoom-out-right'
            )
        );
    }

    public function getEasing()
    {
        return array(
            'linear',
            'ease',
            'ease-in',
            'ease-in-back',
            'ease-in-sine',
            'ease-in-quad',
            'ease-in-cubic',
            'ease-in-quart',
            'ease-out',
            'ease-out-back',
            'ease-out-sine',
            'ease-out-quad',
            'ease-out-cubic',
            'ease-out-quart',
            'ease-in-out',
            'ease-in-out-back',
            'ease-in-out-sine',
            'ease-in-out-quad',
            'ease-in-out-cubic',
            'ease-in-out-quart'
        );
    }

    public function getAnchorPlacement()
    {
        return array(
            'top' => array(
                'top-bottom',
                'top-center',
                'top-top'
            ),
            'center' => array(
                'center-bottom',
                'center-center',
                'center-top'
            ),
            'bottom' => array(
                'bottom-bottom',
                'bottom-center',
                'bottom-top'
            )
        );
    }

}