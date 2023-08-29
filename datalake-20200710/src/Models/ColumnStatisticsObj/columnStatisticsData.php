<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\ColumnStatisticsObj;

use AlibabaCloud\Tea\Model;

class columnStatisticsData extends Model
{
    /**
     * @var string
     */
    public $statisticsData;

    /**
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'statisticsData' => 'StatisticsData',
        'statisticsType' => 'StatisticsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statisticsData) {
            $res['StatisticsData'] = $this->statisticsData;
        }
        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnStatisticsData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatisticsData'])) {
            $model->statisticsData = $map['StatisticsData'];
        }
        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}
