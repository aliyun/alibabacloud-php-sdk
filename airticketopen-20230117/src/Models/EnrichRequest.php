<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList;
use AlibabaCloud\Tea\Model;

class EnrichRequest extends Model
{
    /**
     * @description adult passenger amount 1-9
     *
     * @example 1
     *
     * @var int
     */
    public $adults;

    /**
     * @description cabin class
     * 1. **ALL_CABIN** : all cabin class
     * 2. **Y** : economy class
     * 3. **FC** : first class and business class
     * 4. **S** : premium economy class
     * 5. **YS** : economy class and premium economy class
     * 6. **YSC** : economy class, premium economy class and business class
     * @example ALL_CABIN
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description child passenger amount 0-9
     *
     * @example 1
     *
     * @var int
     */
    public $children;

    /**
     * @description infant passenger amount 0-9
     *
     * @example 1
     *
     * @var int
     */
    public $infants;

    /**
     * @description journey list
     *
     * @var journeyParamList[]
     */
    public $journeyParamList;

    /**
     * @description solution_id returned by Search
     *
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adults'           => 'adults',
        'cabinClass'       => 'cabin_class',
        'children'         => 'children',
        'infants'          => 'infants',
        'journeyParamList' => 'journey_param_list',
        'solutionId'       => 'solution_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adults) {
            $res['adults'] = $this->adults;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->children) {
            $res['children'] = $this->children;
        }
        if (null !== $this->infants) {
            $res['infants'] = $this->infants;
        }
        if (null !== $this->journeyParamList) {
            $res['journey_param_list'] = [];
            if (null !== $this->journeyParamList && \is_array($this->journeyParamList)) {
                $n = 0;
                foreach ($this->journeyParamList as $item) {
                    $res['journey_param_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnrichRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adults'])) {
            $model->adults = $map['adults'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['children'])) {
            $model->children = $map['children'];
        }
        if (isset($map['infants'])) {
            $model->infants = $map['infants'];
        }
        if (isset($map['journey_param_list'])) {
            if (!empty($map['journey_param_list'])) {
                $model->journeyParamList = [];
                $n                       = 0;
                foreach ($map['journey_param_list'] as $item) {
                    $model->journeyParamList[$n++] = null !== $item ? journeyParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
