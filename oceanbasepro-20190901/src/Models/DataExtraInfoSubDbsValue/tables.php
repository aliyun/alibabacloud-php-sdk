<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue\tables\columns;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @example fexg***
     *
     * @var string
     */
    public $tableId;

    /**
     * @example db_name
     *
     * @var string
     */
    public $database;

    /**
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @example mapped_table
     *
     * @var string
     */
    public $mappingTableName;

    /**
     * @example g_i4kat***
     *
     * @var string
     */
    public $instance;

    /**
     * @var columns[]
     */
    public $columns;
    protected $_name = [
        'tableId'          => 'TableId',
        'database'         => 'Database',
        'tableName'        => 'TableName',
        'mappingTableName' => 'MappingTableName',
        'instance'         => 'Instance',
        'columns'          => 'Columns',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
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
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
