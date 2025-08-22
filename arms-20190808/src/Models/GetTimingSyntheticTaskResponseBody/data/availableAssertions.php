<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class availableAssertions extends Model
{
    /**
     * @var string
     */
    public $expect;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'expect' => 'Expect',
        'operator' => 'Operator',
        'target' => 'Target',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expect) {
            $res['Expect'] = $this->expect;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Expect'])) {
            $model->expect = $map['Expect'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
