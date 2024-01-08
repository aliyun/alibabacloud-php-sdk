<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricDataRequest extends Model
{
    /**
     * @description The dimension map in the JSON format. A dimension is a key-value pair. Valid dimension key: diskId.
     *
     * @example {"diskId":["d-bp14xxxx","d-bp11xxxx"]}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The end of the time range to query. The specified time must be later than the current time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2023-11-21T02:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the metric.
     *
     * @example disk_slow_io_triggerred
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The interval at which metric data is collected. Unit: seconds. Default value: 60. Valid values: 60, 300, 600, and 3600, which support queries for time ranges of up to 2 hours, 2 hours, 1 day, and 7 days, respectively. For example, if you set Period to 60, the end time is less than 2 hours from the end time.
     *
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. You can specify a point in time that is up to one year apart from the current time. If StartTime and EndTime are both unspecified, the monitoring metric data of the last Period value is queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2023-11-21T01:50:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'endTime'    => 'EndTime',
        'metricName' => 'MetricName',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
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

        return $model;
    }
}
