<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorStatisticsRequest extends Model
{
    /**
     * @description The name of the metric. Valid values:
     *
     *   Availability
     *   ErrorRate
     *   ResponseTime
     *
     * @example Availability
     *
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The timestamp that specifies the beginning of the time range to query.
     *
     * Unit: milliseconds. The default value is 1 hour ahead of the current time.
     * @example 1576142850527
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the site monitoring task.
     *
     * For more information about how to obtain the ID of a site monitoring task, see [DescribeSiteMonitorList](~~115052~~).
     * @example ef4cdc8b-9dc7-43e7-810e-f950e56c****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The statistical period.
     *
     * Unit: minutes. Default value: 1440 (1 day). Maximum value: 43200 (30 days).
     * @example 1440
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'metricName' => 'MetricName',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'taskId'     => 'TaskId',
        'timeRange'  => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }

        return $model;
    }
}
