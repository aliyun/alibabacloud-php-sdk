<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Edge extends Model
{
    /**
     * @var Relation[]
     */
    public $columnLineage;

    /**
     * @var Relation[]
     */
    public $tableLineage;
    protected $_name = [
        'columnLineage' => 'columnLineage',
        'tableLineage' => 'tableLineage',
    ];

    public function validate()
    {
        if (\is_array($this->columnLineage)) {
            Model::validateArray($this->columnLineage);
        }
        if (\is_array($this->tableLineage)) {
            Model::validateArray($this->tableLineage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnLineage) {
            if (\is_array($this->columnLineage)) {
                $res['columnLineage'] = [];
                $n1 = 0;
                foreach ($this->columnLineage as $item1) {
                    $res['columnLineage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableLineage) {
            if (\is_array($this->tableLineage)) {
                $res['tableLineage'] = [];
                $n1 = 0;
                foreach ($this->tableLineage as $item1) {
                    $res['tableLineage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['columnLineage'])) {
            if (!empty($map['columnLineage'])) {
                $model->columnLineage = [];
                $n1 = 0;
                foreach ($map['columnLineage'] as $item1) {
                    $model->columnLineage[$n1] = Relation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tableLineage'])) {
            if (!empty($map['tableLineage'])) {
                $model->tableLineage = [];
                $n1 = 0;
                foreach ($map['tableLineage'] as $item1) {
                    $model->tableLineage[$n1] = Relation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
