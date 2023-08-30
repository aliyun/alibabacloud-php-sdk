<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorDataRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The end of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 January 1, 1970.
     *   Time format: YYYY-MM-DDThh:mm:ssZ.
     *
     * > The interval between the start time and the end time is less than or equal to 31 days.
     * @example 2022-09-08T08:04:44Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries per page. Valid values: 1 to 1440.
     *
     * @example 100
     *
     * @var string
     */
    public $length;

    /**
     * @description The metric name. Valid values:
     *
     *   MEMORY_ACTUALUSEDSPACE: the memory usage. Unit: bytes.
     *   DISKUSAGE_USED: the disk usage. Unit: bytes.
     *   CPU_UTILIZATION: the CPU utilization in percentage.
     *   VPC_PUBLICIP_INTERNETOUT_RATE: the outbound bandwidth rate of the network. Unit: bits/s.
     *   VPC_PUBLICIP_INTERNETIN_RATE: the inbound bandwidth rate of the network. Unit: bits/s.
     *   DISK_READ_IOPS: the read IOPS of the disk. Unit: count/s.
     *   DISK_WRITE_IOPS: the write IOPS of the disk. Unit: count/s.
     *   FLOW_USED: the traffic usage. Unit: bytes.
     *
     * @example DISKUSAGE_USED
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The interval at which the monitoring data is queried. Valid values: 60, 300, and 900. Unit: seconds.
     *
     ****
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 January 1, 1970.
     *   Time format: YYYY-MM-DDThh:mm:ssZ.
     *
     ****
     * @example 2022-09-07T04:04:44Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'endTime'     => 'EndTime',
        'instanceId'  => 'InstanceId',
        'length'      => 'Length',
        'metricName'  => 'MetricName',
        'nextToken'   => 'NextToken',
        'period'      => 'Period',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
