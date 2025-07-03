<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue\tables\columns;

class tables extends Model
{
    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $mappingTableName;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var columns[]
     */
    public $columns;
    protected $_name = [
        'tableId' => 'TableId',
        'database' => 'Database',
        'tableName' => 'TableName',
        'mappingTableName' => 'MappingTableName',
        'instance' => 'Instance',
        'columns' => 'Columns',
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
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->mappingTableName) {
            $res['MappingTableName'] = $this->mappingTableName;
        }

        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['MappingTableName'])) {
            $model->mappingTableName = $map['MappingTableName'];
        }

        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
