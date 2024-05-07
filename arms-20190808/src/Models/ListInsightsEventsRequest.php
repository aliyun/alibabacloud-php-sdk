<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListInsightsEventsRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a timestamp.
     *
     * @example 1480607940000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The types of the events that you want to query. Separate multiple event types with commas (,). If you do not specify this parameter, all events are queried.
     *
     *   errorIncrease: API error-rate spike events. Examples: HTTP API error-rate spike events and Dubbo API error-rate spike events.
     *   topErrorIncrease: the top five API error-rate spike events with the highest traffic.
     *   topRtIncrease: API response-time spike events. Examples: HTTP API response-time spike events and Dubbo API response-time spike events.
     *   rtIncrease: the top five API response-time spike events with the highest traffic.
     *
     * @example errorIncrease,topErrorIncrease,topExceptionIncrease,topRtIncrease,rtIncrease
     *
     * @var string
     */
    public $insightsTypes;

    /**
     * @description The ID of the application.
     *
     * @example aokcdqn3ly@a195c6d6421****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start of the time range to query. The value is a timestamp.
     *
     * @example 1595174400000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'insightsTypes' => 'InsightsTypes',
        'pid'           => 'Pid',
        'regionId'      => 'RegionId',
        'startTime'     => 'StartTime',
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
        if (null !== $this->insightsTypes) {
            $res['InsightsTypes'] = $this->insightsTypes;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInsightsEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InsightsTypes'])) {
            $model->insightsTypes = $map['InsightsTypes'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
