<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LockObj extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $partitionName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'     => 'CatalogId',
        'databaseName'  => 'DatabaseName',
        'partitionName' => 'PartitionName',
        'tableName'     => 'TableName',
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
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LockObj
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
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
