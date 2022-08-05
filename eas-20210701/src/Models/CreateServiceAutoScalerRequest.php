<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\strategies;
use AlibabaCloud\Tea\Model;

class CreateServiceAutoScalerRequest extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var strategies
     */
    public $strategies;
    protected $_name = [
        'max'        => 'max',
        'min'        => 'min',
        'strategies' => 'strategies',
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
        if (null !== $this->strategies) {
            $res['strategies'] = null !== $this->strategies ? $this->strategies->toMap() : null;
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
        if (isset($map['strategies'])) {
            $model->strategies = strategies::fromMap($map['strategies']);
        }

        return $model;
    }
}
