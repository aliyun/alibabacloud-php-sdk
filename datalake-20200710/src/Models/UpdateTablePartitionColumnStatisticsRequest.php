<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateTablePartitionColumnStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var ColumnStatistics[]
     */
    public $columnStatisticsList;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isStatsCompliant;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $validWriteIdList;

    /**
     * @var string
     */
    public $writeId;
    protected $_name = [
        'catalogId'            => 'CatalogId',
        'columnStatisticsList' => 'ColumnStatisticsList',
        'databaseName'         => 'DatabaseName',
        'engine'               => 'Engine',
        'isStatsCompliant'     => 'IsStatsCompliant',
        'tableName'            => 'TableName',
        'validWriteIdList'     => 'ValidWriteIdList',
        'writeId'              => 'WriteId',
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
        if (null !== $this->columnStatisticsList) {
            $res['ColumnStatisticsList'] = [];
            if (null !== $this->columnStatisticsList && \is_array($this->columnStatisticsList)) {
                $n = 0;
                foreach ($this->columnStatisticsList as $item) {
                    $res['ColumnStatisticsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isStatsCompliant) {
            $res['IsStatsCompliant'] = $this->isStatsCompliant;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->validWriteIdList) {
            $res['ValidWriteIdList'] = $this->validWriteIdList;
        }
        if (null !== $this->writeId) {
            $res['WriteId'] = $this->writeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTablePartitionColumnStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ColumnStatisticsList'])) {
            if (!empty($map['ColumnStatisticsList'])) {
                $model->columnStatisticsList = [];
                $n                           = 0;
                foreach ($map['ColumnStatisticsList'] as $item) {
                    $model->columnStatisticsList[$n++] = null !== $item ? ColumnStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsStatsCompliant'])) {
            $model->isStatsCompliant = $map['IsStatsCompliant'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ValidWriteIdList'])) {
            $model->validWriteIdList = $map['ValidWriteIdList'];
        }
        if (isset($map['WriteId'])) {
            $model->writeId = $map['WriteId'];
        }

        return $model;
    }
}
