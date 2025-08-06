<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Dara\Model;

class orders extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var bool
     */
    public $desc;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'column' => 'Column',
        'desc' => 'Desc',
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

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        return $model;
    }
}
