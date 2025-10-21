<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class TableResult extends Model
{
    /**
     * @var RowUpdate[]
     */
    public $rowUpdates;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'rowUpdates' => 'rowUpdates',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
        if (\is_array($this->rowUpdates)) {
            Model::validateArray($this->rowUpdates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowUpdates) {
            if (\is_array($this->rowUpdates)) {
                $res['rowUpdates'] = [];
                $n1 = 0;
                foreach ($this->rowUpdates as $item1) {
                    $res['rowUpdates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
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
        if (isset($map['rowUpdates'])) {
            if (!empty($map['rowUpdates'])) {
                $model->rowUpdates = [];
                $n1 = 0;
                foreach ($map['rowUpdates'] as $item1) {
                    $model->rowUpdates[$n1] = RowUpdate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
