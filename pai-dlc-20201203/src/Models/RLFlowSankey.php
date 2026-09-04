<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowSankey extends Model
{
    /**
     * @var RLFlowSankeyColumn[]
     */
    public $columns;

    /**
     * @var RLFlowSankeyExit[]
     */
    public $exits;
    protected $_name = [
        'columns' => 'Columns',
        'exits' => 'Exits',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->exits)) {
            Model::validateArray($this->exits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exits) {
            if (\is_array($this->exits)) {
                $res['Exits'] = [];
                $n1 = 0;
                foreach ($this->exits as $item1) {
                    $res['Exits'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = RLFlowSankeyColumn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Exits'])) {
            if (!empty($map['Exits'])) {
                $model->exits = [];
                $n1 = 0;
                foreach ($map['Exits'] as $item1) {
                    $model->exits[$n1] = RLFlowSankeyExit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
