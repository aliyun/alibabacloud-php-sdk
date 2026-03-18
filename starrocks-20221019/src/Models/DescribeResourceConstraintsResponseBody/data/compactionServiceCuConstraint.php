<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;

class compactionServiceCuConstraint extends Model
{
    /**
     * @var int
     */
    public $def;

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
        'def' => 'def',
        'max' => 'max',
        'min' => 'min',
        'step' => 'step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->def) {
            $res['def'] = $this->def;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
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
        if (isset($map['def'])) {
            $model->def = $map['def'];
        }

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}
