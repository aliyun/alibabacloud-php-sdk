<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Tea\Model;

class orders extends Model
{
    /**
     * @example source
     *
     * @var string
     */
    public $column;

    /**
     * @example true
     *
     * @var bool
     */
    public $desc;

    /**
     * @example AVG
     *
     * @var string
     */
    public $op;
    protected $_name = [
        'column' => 'Column',
        'desc'   => 'Desc',
        'op'     => 'Op',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return orders
     */
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
