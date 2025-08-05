<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\filters\nestedFilters;
use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The column name.
     *
     * @example source
     *
     * @var string
     */
    public $column;

    /**
     * @example AND
     *
     * @var string
     */
    public $nestedFilterCombination;

    /**
     * @var nestedFilters[]
     */
    public $nestedFilters;

    /**
     * @description The operator.
     *
     * @example =
     *
     * @var string
     */
    public $op;

    /**
     * @description The values that are used together with the operator.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'column' => 'Column',
        'nestedFilterCombination' => 'NestedFilterCombination',
        'nestedFilters' => 'NestedFilters',
        'op' => 'Op',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->nestedFilterCombination) {
            $res['NestedFilterCombination'] = $this->nestedFilterCombination;
        }
        if (null !== $this->nestedFilters) {
            $res['NestedFilters'] = [];
            if (null !== $this->nestedFilters && \is_array($this->nestedFilters)) {
                $n = 0;
                foreach ($this->nestedFilters as $item) {
                    $res['NestedFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NestedFilterCombination'])) {
            $model->nestedFilterCombination = $map['NestedFilterCombination'];
        }
        if (isset($map['NestedFilters'])) {
            if (!empty($map['NestedFilters'])) {
                $model->nestedFilters = [];
                $n = 0;
                foreach ($map['NestedFilters'] as $item) {
                    $model->nestedFilters[$n++] = null !== $item ? nestedFilters::fromMap($item) : $item;
                }
            }
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
