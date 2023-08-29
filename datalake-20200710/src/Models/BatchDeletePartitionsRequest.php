<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchDeletePartitionsRequest\partitionValueList;
use AlibabaCloud\Tea\Model;

class BatchDeletePartitionsRequest extends Model
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
     * @var partitionValueList[]
     */
    public $partitionValueList;

    /**
     * @example test_table_20201225
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'          => 'CatalogId',
        'databaseName'       => 'DatabaseName',
        'ifExists'           => 'IfExists',
        'partitionValueList' => 'PartitionValueList',
        'tableName'          => 'TableName',
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
        if (null !== $this->partitionValueList) {
            $res['PartitionValueList'] = [];
            if (null !== $this->partitionValueList && \is_array($this->partitionValueList)) {
                $n = 0;
                foreach ($this->partitionValueList as $item) {
                    $res['PartitionValueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeletePartitionsRequest
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
        if (isset($map['PartitionValueList'])) {
            if (!empty($map['PartitionValueList'])) {
                $model->partitionValueList = [];
                $n                         = 0;
                foreach ($map['PartitionValueList'] as $item) {
                    $model->partitionValueList[$n++] = null !== $item ? partitionValueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
