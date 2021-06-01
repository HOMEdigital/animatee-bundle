<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 29.05.2018
 * Time: 14:46
 */

namespace Home\AnimateeBundle\Resources\contao\dca;

use Home\PearlsBundle\Resources\contao\Helper\Dca as Helper;

$moduleName = 'tl_content';

try{
    $content = new Helper\DcaHelper($moduleName);
}catch(\Exception $e){
    var_dump($e);
}

try{
    $content
        ->addField('select','hmAnimation',array(
            'options_callback' => array('Home\AnimateeBundle\Resources\contao\models\AnimateeConfigModel', 'getAnimationConfigOptions'),
            'eval' => array(
                'includeBlankOption' => true,
                'tl_class' => 'w50',
            ),
        ))
        ;
}catch(\Exception $e){
    var_dump($e);
}

foreach ($GLOBALS['TL_DCA'][$moduleName]['palettes'] as $key => $palette) {
    if (is_string($key)) {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(
            '{invisible_legend:hide}',
            '{animation_legend:hide},
                    hmAnimation;
                    {invisible_legend:hide}',
            $palette
        );
    }
}
