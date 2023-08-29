<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\ColumnStatisticsObj\columnStatisticsData;
use AlibabaCloud\Tea\Model;

class ColumnStatisticsObj extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var columnStatisticsData
     */
    public $columnStatisticsData;

    /**
     * @var string
     */
    public $columnType;
    protected $_name = [
        'columnName'           => 'ColumnName',
        'columnStatisticsData' => 'ColumnStatisticsData',
        'columnType'           => 'ColumnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnStatisticsData) {
            $res['ColumnStatisticsData'] = null !== $this->columnStatisticsData ? $this->columnStatisticsData->toMap() : null;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColumnStatisticsObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnStatisticsData'])) {
            $model->columnStatisticsData = columnStatisticsData::fromMap($map['ColumnStatisticsData']);
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        return $model;
    }
}
