<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList;

class EnrichRequest extends Model
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
     * @var journeyParamList[]
     */
    public $journeyParamList;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adults' => 'adults',
        'cabinClass' => 'cabin_class',
        'children' => 'children',
        'infants' => 'infants',
        'journeyParamList' => 'journey_param_list',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        if (\is_array($this->journeyParamList)) {
            Model::validateArray($this->journeyParamList);
        }
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

        if (null !== $this->journeyParamList) {
            if (\is_array($this->journeyParamList)) {
                $res['journey_param_list'] = [];
                $n1 = 0;
                foreach ($this->journeyParamList as $item1) {
                    $res['journey_param_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['journey_param_list'])) {
                $model->journeyParamList = [];
                $n1 = 0;
                foreach ($map['journey_param_list'] as $item1) {
                    $model->journeyParamList[$n1] = journeyParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
