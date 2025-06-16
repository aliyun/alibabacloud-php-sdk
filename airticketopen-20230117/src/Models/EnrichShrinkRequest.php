<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class EnrichShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $adults;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var int
     */
    public $children;

    /**
     * @var int
     */
    public $infants;

    /**
     * @var string
     */
    public $journeyParamListShrink;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adults' => 'adults',
        'cabinClass' => 'cabin_class',
        'children' => 'children',
        'infants' => 'infants',
        'journeyParamListShrink' => 'journey_param_list',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
