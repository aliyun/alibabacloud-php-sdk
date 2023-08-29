<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetPartitionColumnStatisticsRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var string[]
     */
    public $partitionNames;

    /**
     * @example test_table_20201223
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'      => 'CatalogId',
        'columnNames'    => 'ColumnNames',
        'databaseName'   => 'DatabaseName',
        'partitionNames' => 'PartitionNames',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->columnNames) {
            $res['ColumnNames'] = $this->columnNames;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->partitionNames) {
            $res['PartitionNames'] = $this->partitionNames;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPartitionColumnStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ColumnNames'])) {
            if (!empty($map['ColumnNames'])) {
                $model->columnNames = $map['ColumnNames'];
            }
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PartitionNames'])) {
            if (!empty($map['PartitionNames'])) {
                $model->partitionNames = $map['PartitionNames'];
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
