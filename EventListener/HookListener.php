<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 29.05.2018
 * Time: 11:57
 */

namespace Home\AnimateeBundle\EventListener;

use Home\AnimateeBundle\Resources\contao\models\AnimateeConfigModel;

class HookListener
{
    public function getContentElement($objElement, $strBuffer)
    {
        if (TL_MODE == 'BE' || !$objElement->hmAnimation) {

            return $strBuffer;

        }

        $model = AnimateeConfigModel::findByIdOrAlias($objElement->hmAnimation);

        if($model instanceof AnimateeConfigModel){
            $aos = array(
                '' => $model->aosAnimation,
                'easing' => $model->aosEasing,
                'duration' => $model->aosDuration,
                'delay' => $model->aosDelay,
                'anchor' => $model->aosAnchor,
                'anchor-placement' => $model->aosAnchorPlacement,
                'offset' => $model->aosOffset,
                'once' => $model->aosOnce
            );

            $aos = array_filter($aos, function ($value) { return $value !== ''; });
            $div = '<div data-aos="' . array_shift($aos) . '"';

            foreach ($aos as $attr => $value) {
                $value = ($value === '1') ? 'true' : $value;
                $div .= ' data-aos-' . $attr . '="' . $value . '"';
            }

            $div .= '>' . $strBuffer;
            $div .= '</div>';

            return $div;
        }

        return $strBuffer;



    }
}