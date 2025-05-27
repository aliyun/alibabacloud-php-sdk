<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema\columns;

class tableSchema extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columns' => 'Columns',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
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
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
                    $model->columns[$n1++] = columns::fromMap($item1);
                }
            }
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
