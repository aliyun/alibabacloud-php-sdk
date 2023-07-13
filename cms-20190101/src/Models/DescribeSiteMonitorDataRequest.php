<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorDataRequest extends Model
{
    /**
     * @description The interval at which monitoring data is returned. The value is an integral multiple of 60. Unit: seconds.
     *
     * >  The default value equals the minimum interval at which detection requests are sent to the monitored address.
     * @example 1551581437000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The returned monitoring data.
     *
     * @example 1000
     *
     * @var int
     */
    public $length;

    /**
     * @description The beginning of the time range for the query. Supported formats:
     *
     *   UNIX timestamp: The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *   Time format: The value is in the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example Availability
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The number of data points to return.
     *
     * @example 49f7b317-7645-4cc9-94fd-ea42e5220930ea42e5220930ea42e522****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The pagination cursor.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The end of the time range for the query. Supported formats:
     *
     *   UNIX timestamp: The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *   Time format: The value is in the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 1551579637000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the monitored object whose monitoring data is to be queried. Valid values:
     *
     *   metric
     *   event
     *
     * @example 49f7b317-7645-4cc9-94fd-ea42e522****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the metric. Valid values:
     *
     *   Availability
     *   ResponseTime
     *
     * @example metric
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'    => 'EndTime',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'taskId'     => 'TaskId',
        'type'       => 'Type',
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
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
