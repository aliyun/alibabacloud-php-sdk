<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Tea\Model;

class calculations extends Model
{
    /**
     * @example source
     *
     * @var string
     */
    public $column;

    /**
     * @example COUNT_DISTINCT
     *
     * @var string
     */
    public $op;
    protected $_name = [
        'column' => 'Column',
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
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calculations
     */
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
