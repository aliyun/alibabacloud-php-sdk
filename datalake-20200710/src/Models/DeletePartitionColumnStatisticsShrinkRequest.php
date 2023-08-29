<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DeletePartitionColumnStatisticsShrinkRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $columnNamesShrink;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $partitionNamesShrink;

    /**
     * @example test_table_20201223
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'            => 'CatalogId',
        'columnNamesShrink'    => 'ColumnNames',
        'databaseName'         => 'DatabaseName',
        'partitionNamesShrink' => 'PartitionNames',
        'tableName'            => 'TableName',
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
        if (null !== $this->columnNamesShrink) {
            $res['ColumnNames'] = $this->columnNamesShrink;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->partitionNamesShrink) {
            $res['PartitionNames'] = $this->partitionNamesShrink;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePartitionColumnStatisticsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ColumnNames'])) {
            $model->columnNamesShrink = $map['ColumnNames'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PartitionNames'])) {
            $model->partitionNamesShrink = $map['PartitionNames'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
