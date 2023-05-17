<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\scaleStrategies;
use AlibabaCloud\Tea\Model;

class UpdateServiceAutoScalerRequest extends Model
{
    /**
     * @var behavior
     */
    public $behavior;

    /**
     * @example 8
     *
     * @var int
     */
    public $max;

    /**
     * @example 2
     *
     * @var int
     */
    public $min;

    /**
     * @var scaleStrategies[]
     */
    public $scaleStrategies;
    protected $_name = [
        'behavior'        => 'behavior',
        'max'             => 'max',
        'min'             => 'min',
        'scaleStrategies' => 'scaleStrategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->behavior) {
            $res['behavior'] = null !== $this->behavior ? $this->behavior->toMap() : null;
        }
        if (null !== $this->max) {
            $res['max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['min'] = $this->min;
        }
        if (null !== $this->scaleStrategies) {
            $res['scaleStrategies'] = [];
            if (null !== $this->scaleStrategies && \is_array($this->scaleStrategies)) {
                $n = 0;
                foreach ($this->scaleStrategies as $item) {
                    $res['scaleStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceAutoScalerRequest
     */
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
                $n                      = 0;
                foreach ($map['scaleStrategies'] as $item) {
                    $model->scaleStrategies[$n++] = null !== $item ? scaleStrategies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
