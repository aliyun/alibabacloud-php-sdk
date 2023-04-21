<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowMetricRequest extends Model
{
    /**
     * @description The end of the time range to query data. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 1664714703743
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance. The value can be the ID of the cloud desktop or the ID of the Internet access package.
     *
     * @example ecd-fwq23f13\*\*\*\* or np-6inxqsvcyv6z8\*\*\*\*
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance. You can select a cloud desktop or a network package as an instance. If you select a cloud desktop as an instance, you need to configure the `InstanceId` and `MetricType` parameters. If you select a network package as an instance, you also need to must configure the parameters.
     *
     * @example desktop
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The type of the monitoring data. The monitoring data includes the inbound bandwidth and the outbound bandwidth of the cloud desktop, or the workspace bandwidth that is originated from or destined for the Internet.
     *
     * @example intranetOutRate
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The interval at which monitoring data is collected. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 1651817220643
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'metricType'   => 'MetricType',
        'period'       => 'Period',
        'regionId'     => 'RegionId',
        'startTime'    => 'StartTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
     * @return DescribeFlowMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
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
