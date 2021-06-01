<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 29.05.2018
 * Time: 11:52
 */


#-- add content elements -----------------------------------------------------------------------------------------------
array_insert($GLOBALS['BE_MOD']['system'], 2 ,[
    'animatee' => [
        'tables' => ['tl_hm_animatee_config'],
        'table' => ['TableWizard', 'importTable'],
        'list' => ['ListWizard', 'importList']
    ],
]);

#-- models -------------------------------------------------------------------------------------------------------------
$GLOBALS['TL_MODELS']['tl_hm_animatee_config'] = 'Home\AnimateeBundle\Resources\contao\models\AnimateeConfigModel';

#-- hooks --------------------------------------------------------------------------------------------------------------
$GLOBALS['TL_HOOKS']['getContentElement'][] = ['home_animatee.listener.hooks', 'getContentElement'];