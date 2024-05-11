<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @example source
     *
     * @var string
     */
    public $column;

    /**
     * @example =
     *
     * @var string
     */
    public $op;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'column' => 'Column',
        'op'     => 'Op',
        'values' => 'Values',
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
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
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
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
