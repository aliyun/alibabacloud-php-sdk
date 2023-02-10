<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\scaleStrategies;
use AlibabaCloud\Tea\Model;

class CreateServiceAutoScalerRequest extends Model
{
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
     * @return CreateServiceAutoScalerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
