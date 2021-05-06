<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 开始时间，utc
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间，utc
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 报表类型  user、groupChat、message
     *
     * @var string
     */
    public $reportStatisticsType;
    protected $_name = [
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'reportStatisticsType' => 'ReportStatisticsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportStatisticsType) {
            $res['ReportStatisticsType'] = $this->reportStatisticsType;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportStatisticsType'])) {
            $model->reportStatisticsType = $map['ReportStatisticsType'];
        }

        return $model;
    }
}
