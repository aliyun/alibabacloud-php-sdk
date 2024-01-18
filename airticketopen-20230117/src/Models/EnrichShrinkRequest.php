<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class EnrichShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $adults;

    /**
     * @example ALL_CABIN
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example 1
     *
     * @var int
     */
    public $children;

    /**
     * @example 1
     *
     * @var int
     */
    public $infants;

    /**
     * @var string
     */
    public $journeyParamListShrink;

    /**
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adults'                 => 'adults',
        'cabinClass'             => 'cabin_class',
        'children'               => 'children',
        'infants'                => 'infants',
        'journeyParamListShrink' => 'journey_param_list',
        'solutionId'             => 'solution_id',
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
        if (null !== $this->journeyParamListShrink) {
            $res['journey_param_list'] = $this->journeyParamListShrink;
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnrichShrinkRequest
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
            $model->journeyParamListShrink = $map['journey_param_list'];
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
