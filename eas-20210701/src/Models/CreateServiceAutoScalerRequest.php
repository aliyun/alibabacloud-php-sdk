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
        'max'        => 'Max',
        'min'        => 'Min',
        'strategies' => 'Strategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = null !== $this->strategies ? $this->strategies->toMap() : null;
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
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Strategies'])) {
            $model->strategies = strategies::fromMap($map['Strategies']);
        }

        return $model;
    }
}
