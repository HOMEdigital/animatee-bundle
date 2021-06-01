<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 19.09.2017
 * Time: 09:52
 */

namespace Home\AnimateeBundle\Resources\contao\models;

class AnimateeConfigModel extends \Contao\Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_hm_animatee_config';

    public static function getAnimationConfigOptions()
    {
        $return = array();
        $configs = self::findBy(array(
            self::getTable() . '.published = 1'
        ), null);

        if($configs instanceof \Contao\Model\Collection){
            $configs = $configs->fetchAll();

            if(is_array($configs) && count($configs) > 0){
                foreach ($configs as $config){
                    $return[$config['id']] = $config['name'];
                }
                asort($return);
            }
        }

        return $return;
    }

}