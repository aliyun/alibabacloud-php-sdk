<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody\data;

use AlibabaCloud\Tea\Model;

class autoIncrementUsageList extends Model
{
    /**
     * @description The latest auto-increment ID.
     *
     * @example 2147483647
     *
     * @var int
     */
    public $autoIncrementCurrentValue;

    /**
     * @description The usage ratio of auto-increment IDs.
     *
     * @example 1
     *
     * @var float
     */
    public $autoIncrementRatio;

    /**
     * @description The column name.
     *
     * @example id
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The database name.
     *
     * @example db01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The maximum auto-increment ID that is supported by the current data type.
     *
     * @example 2147483647
     *
     * @var int
     */
    public $maximumValue;

    /**
     * @description The table name.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'autoIncrementCurrentValue' => 'AutoIncrementCurrentValue',
        'autoIncrementRatio'        => 'AutoIncrementRatio',
        'columnName'                => 'ColumnName',
        'dbName'                    => 'DbName',
        'maximumValue'              => 'MaximumValue',
        'tableName'                 => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrementCurrentValue) {
            $res['AutoIncrementCurrentValue'] = $this->autoIncrementCurrentValue;
        }
        if (null !== $this->autoIncrementRatio) {
            $res['AutoIncrementRatio'] = $this->autoIncrementRatio;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->maximumValue) {
            $res['MaximumValue'] = $this->maximumValue;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoIncrementUsageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrementCurrentValue'])) {
            $model->autoIncrementCurrentValue = $map['AutoIncrementCurrentValue'];
        }
        if (isset($map['AutoIncrementRatio'])) {
            $model->autoIncrementRatio = $map['AutoIncrementRatio'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['MaximumValue'])) {
            $model->maximumValue = $map['MaximumValue'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
