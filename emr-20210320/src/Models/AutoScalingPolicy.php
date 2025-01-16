<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingPolicy\constraints;
use AlibabaCloud\Tea\Model;

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
        'constraints'  => 'Constraints',
        'scalingRules' => 'ScalingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toMap() : null;
        }
        if (null !== $this->scalingRules) {
            $res['ScalingRules'] = [];
            if (null !== $this->scalingRules && \is_array($this->scalingRules)) {
                $n = 0;
                foreach ($this->scalingRules as $item) {
                    $res['ScalingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutoScalingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Constraints'])) {
            $model->constraints = constraints::fromMap($map['Constraints']);
        }
        if (isset($map['ScalingRules'])) {
            if (!empty($map['ScalingRules'])) {
                $model->scalingRules = [];
                $n                   = 0;
                foreach ($map['ScalingRules'] as $item) {
                    $model->scalingRules[$n++] = null !== $item ? ScalingRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
