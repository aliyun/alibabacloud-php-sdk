<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListDevicePersonStatisticsRequest extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 33011000991317100041
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2021-01-20 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example day
     *
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'corpId'         => 'CorpId',
        'dataSourceId'   => 'DataSourceId',
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'statisticsType' => 'StatisticsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicePersonStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}
