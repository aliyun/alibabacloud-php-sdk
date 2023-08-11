<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrafficRequest extends Model
{
    /**
     * @description The time when the traffic statistics are calculated. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1563445054
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the region where the Anti-DDoS Origin instance resides.
     *
     * >  You can call the [DescribeRegions](~~118703~~) operation to query the most recent region list.
     * @example max
     *
     * @var string
     */
    public $flowType;

    /**
     * @description The type of the traffic statistics to query. Valid values:
     *
     *   **max**: the peak traffic within the specified interval
     *   **avg**: the average traffic within the specified interval
     *
     * @example ddosbgp-cn-n6w203qg****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The interval at which the traffic statistics are calculated. Unit: seconds. Default value: **5**.
     *
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @description The packet forwarding rate of attack traffic. Unit: packets per second.
     *
     * >  This parameter is returned only if attack traffic exists.
     * @example 39.XX.XX.96
     *
     * @var string
     */
    public $ip;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeTraffic**.
     *
     * @example 111.XX.XX.0/24
     *
     * @var string
     */
    public $ipnet;

    /**
     * @description The bandwidth of the total traffic. Unit: Kbit/s.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Anti-DDoS Origin instance to query.
     *
     * >  You can call the [DescribeInstanceList](~~118698~~) operation to query the IDs of all Anti-DDoS Origin instances.
     *
     * If you specify an on-demand instance, you must configure the **Interval** parameter.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * If you do not specify this parameter, the current system time is used as the end time.
     * @example 1619798400
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'flowType'        => 'FlowType',
        'instanceId'      => 'InstanceId',
        'interval'        => 'Interval',
        'ip'              => 'Ip',
        'ipnet'           => 'Ipnet',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
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
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipnet) {
            $res['Ipnet'] = $this->ipnet;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Ipnet'])) {
            $model->ipnet = $map['Ipnet'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
