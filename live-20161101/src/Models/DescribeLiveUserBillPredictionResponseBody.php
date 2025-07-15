<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody\billPredictionData;
use AlibabaCloud\Tea\Model;

class DescribeLiveUserBillPredictionResponseBody extends Model
{
    /**
     * @description The estimated bill data.
     *
     * @var billPredictionData
     */
    public $billPredictionData;

    /**
     * @description The metering method. Valid values:
     *
     *   hour_flow: pay by hourly data transfer
     *   day_bandwidth: pay by daily bandwidth
     *   month_95: pay by monthly 95th percentile bandwidth
     *   month_avg_day_bandwidth: pay by average daily peak bandwidth per month
     *   month_4th_day_bandwidth: pay by 4th peak bandwidth per month
     *   month_avg_day_95: pay by average daily 95th percentile bandwidth per month
     *   month_95_night_half: pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00
     *   hour_vas: pay by value-added services per hour
     *   day_count: pay by daily requests
     *
     * @example day_bandwidth
     *
     * @var string
     */
    public $billType;

    /**
     * @description The end time. If you do not specify the request parameter EndTime, the end time is the current time by default. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-10-25T10:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example B95BE680-5A6A-1CAD-8AB1-09DFF5D6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time. If you do not specify the request parameter StartTime, the start time is 00:00 on the first day of the month by default. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billPredictionData' => 'BillPredictionData',
        'billType' => 'BillType',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billPredictionData) {
            $res['BillPredictionData'] = null !== $this->billPredictionData ? $this->billPredictionData->toMap() : null;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveUserBillPredictionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillPredictionData'])) {
            $model->billPredictionData = billPredictionData::fromMap($map['BillPredictionData']);
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
