<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class RenamePartitionRequest extends Model
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
     * @var PartitionInput
     */
    public $partitionInput;

    /**
     * @var string[]
     */
    public $partitionValues;

    /**
     * @example test_table_20200715162543389
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'       => 'CatalogId',
        'databaseName'    => 'DatabaseName',
        'partitionInput'  => 'PartitionInput',
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
        if (null !== $this->partitionInput) {
            $res['PartitionInput'] = null !== $this->partitionInput ? $this->partitionInput->toMap() : null;
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
     * @return RenamePartitionRequest
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
        if (isset($map['PartitionInput'])) {
            $model->partitionInput = PartitionInput::fromMap($map['PartitionInput']);
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
