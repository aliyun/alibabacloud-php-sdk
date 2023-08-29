<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DeletePartitionRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifExists;

    /**
     * @var string[]
     */
    public $partitionValues;

    /**
     * @example test_table_20201225
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'       => 'CatalogId',
        'databaseName'    => 'DatabaseName',
        'ifExists'        => 'IfExists',
        'partitionValues' => 'PartitionValues',
        'tableName'       => 'TableName',
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
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->ifExists) {
            $res['IfExists'] = $this->ifExists;
        }
        if (null !== $this->partitionValues) {
            $res['PartitionValues'] = $this->partitionValues;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IfExists'])) {
            $model->ifExists = $map['IfExists'];
        }
        if (isset($map['PartitionValues'])) {
            if (!empty($map['PartitionValues'])) {
                $model->partitionValues = $map['PartitionValues'];
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
