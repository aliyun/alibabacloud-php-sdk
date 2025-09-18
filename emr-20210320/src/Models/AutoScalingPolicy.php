<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingPolicy\constraints;

class AutoScalingPolicy extends Model
{
    /**
     * @var constraints
     */
    public $constraints;

    /**
     * @var ScalingRule[]
     */
    public $scalingRules;
    protected $_name = [
        'constraints' => 'Constraints',
        'scalingRules' => 'ScalingRules',
    ];

    public function validate()
    {
        if (null !== $this->constraints) {
            $this->constraints->validate();
        }
        if (\is_array($this->scalingRules)) {
            Model::validateArray($this->scalingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toArray($noStream) : $this->constraints;
        }

        if (null !== $this->scalingRules) {
            if (\is_array($this->scalingRules)) {
                $res['ScalingRules'] = [];
                $n1 = 0;
                foreach ($this->scalingRules as $item1) {
                    $res['ScalingRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Constraints'])) {
            $model->constraints = constraints::fromMap($map['Constraints']);
        }

        if (isset($map['ScalingRules'])) {
            if (!empty($map['ScalingRules'])) {
                $model->scalingRules = [];
                $n1 = 0;
                foreach ($map['ScalingRules'] as $item1) {
                    $model->scalingRules[$n1] = ScalingRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
