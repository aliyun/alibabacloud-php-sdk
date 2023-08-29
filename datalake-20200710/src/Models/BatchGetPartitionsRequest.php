<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\BatchGetPartitionsRequest\partitionValueList;
use AlibabaCloud\Tea\Model;

class BatchGetPartitionsRequest extends Model
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
    public $isShareSd;

    /**
     * @var partitionValueList[]
     */
    public $partitionValueList;

    /**
     * @example test_table_20200715162543389
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'          => 'CatalogId',
        'databaseName'       => 'DatabaseName',
        'isShareSd'          => 'IsShareSd',
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
        if (null !== $this->isShareSd) {
            $res['IsShareSd'] = $this->isShareSd;
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
     * @return BatchGetPartitionsRequest
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
        if (isset($map['IsShareSd'])) {
            $model->isShareSd = $map['IsShareSd'];
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
