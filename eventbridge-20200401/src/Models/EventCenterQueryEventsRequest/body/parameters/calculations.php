<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Dara\Model;

class calculations extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'column' => 'Column',
        'op' => 'Op',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        if (null !== $this->op) {
            $res['Op'] = $this->op;
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
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }

        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        return $model;
    }
}
