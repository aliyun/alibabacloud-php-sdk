<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 2020-01-12
     *
     * @var string
     */
    public $endTime;

    /**
     * @example user
     *
     * @var string
     */
    public $reportStatisticsType;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'              => 'EndTime',
        'reportStatisticsType' => 'ReportStatisticsType',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportStatisticsType) {
            $res['ReportStatisticsType'] = $this->reportStatisticsType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportStatisticsType'])) {
            $model->reportStatisticsType = $map['ReportStatisticsType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
