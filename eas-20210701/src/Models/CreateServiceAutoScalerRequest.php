<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\scaleStrategies;

class CreateServiceAutoScalerRequest extends Model
{
    /**
     * @var behavior
     */
    public $behavior;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var scaleStrategies[]
     */
    public $scaleStrategies;
    protected $_name = [
        'behavior' => 'behavior',
        'max' => 'max',
        'min' => 'min',
        'scaleStrategies' => 'scaleStrategies',
    ];

    public function validate()
    {
        if (null !== $this->behavior) {
            $this->behavior->validate();
        }
        if (\is_array($this->scaleStrategies)) {
            Model::validateArray($this->scaleStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->behavior) {
            $res['behavior'] = null !== $this->behavior ? $this->behavior->toArray($noStream) : $this->behavior;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->scaleStrategies) {
            if (\is_array($this->scaleStrategies)) {
                $res['scaleStrategies'] = [];
                $n1 = 0;
                foreach ($this->scaleStrategies as $item1) {
                    $res['scaleStrategies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['behavior'])) {
            $model->behavior = behavior::fromMap($map['behavior']);
        }

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['scaleStrategies'])) {
            if (!empty($map['scaleStrategies'])) {
                $model->scaleStrategies = [];
                $n1 = 0;
                foreach ($map['scaleStrategies'] as $item1) {
                    $model->scaleStrategies[$n1] = scaleStrategies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
