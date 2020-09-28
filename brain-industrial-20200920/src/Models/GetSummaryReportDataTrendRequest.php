<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetSummaryReportDataTrendRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $trendType;
    protected $_name = [
        'pidLoopId' => 'PidLoopId',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'trendType' => 'TrendType',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('trendType', $this->trendType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->trendType) {
            $res['TrendType'] = $this->trendType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryReportDataTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TrendType'])) {
            $model->trendType = $map['TrendType'];
        }

        return $model;
    }
}
