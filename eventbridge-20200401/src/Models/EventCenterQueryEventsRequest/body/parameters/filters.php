<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\filters\nestedFilters;

class filters extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var string
     */
    public $nestedFilterCombination;

    /**
     * @var nestedFilters[]
     */
    public $nestedFilters;

    /**
     * @var string
     */
    public $op;

    /**
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

    public function validate()
    {
        if (\is_array($this->nestedFilters)) {
            Model::validateArray($this->nestedFilters);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        if (null !== $this->nestedFilterCombination) {
            $res['NestedFilterCombination'] = $this->nestedFilterCombination;
        }

        if (null !== $this->nestedFilters) {
            if (\is_array($this->nestedFilters)) {
                $res['NestedFilters'] = [];
                $n1 = 0;
                foreach ($this->nestedFilters as $item1) {
                    $res['NestedFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['NestedFilterCombination'])) {
            $model->nestedFilterCombination = $map['NestedFilterCombination'];
        }

        if (isset($map['NestedFilters'])) {
            if (!empty($map['NestedFilters'])) {
                $model->nestedFilters = [];
                $n1 = 0;
                foreach ($map['NestedFilters'] as $item1) {
                    $model->nestedFilters[$n1] = nestedFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
