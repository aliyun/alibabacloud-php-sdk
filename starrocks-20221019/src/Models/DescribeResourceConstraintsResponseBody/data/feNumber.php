<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;

class feNumber extends Model
{
    /**
     * @var int
     */
    public $default;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var int
     */
    public $step;
    protected $_name = [
        'default' => 'Default',
        'max' => 'Max',
        'min' => 'Min',
        'step' => 'Step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
