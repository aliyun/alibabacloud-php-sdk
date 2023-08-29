<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreatePartitionRequest extends Model
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
    public $ifNotExists;

    /**
     * @example true
     *
     * @var bool
     */
    public $needResult;

    /**
     * @var PartitionInput
     */
    public $partitionInput;

    /**
     * @example test_table_20201223
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'      => 'CatalogId',
        'databaseName'   => 'DatabaseName',
        'ifNotExists'    => 'IfNotExists',
        'needResult'     => 'NeedResult',
        'partitionInput' => 'PartitionInput',
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
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->ifNotExists) {
            $res['IfNotExists'] = $this->ifNotExists;
        }
        if (null !== $this->needResult) {
            $res['NeedResult'] = $this->needResult;
        }
        if (null !== $this->partitionInput) {
            $res['PartitionInput'] = null !== $this->partitionInput ? $this->partitionInput->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePartitionRequest
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
        if (isset($map['IfNotExists'])) {
            $model->ifNotExists = $map['IfNotExists'];
        }
        if (isset($map['NeedResult'])) {
            $model->needResult = $map['NeedResult'];
        }
        if (isset($map['PartitionInput'])) {
            $model->partitionInput = PartitionInput::fromMap($map['PartitionInput']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
