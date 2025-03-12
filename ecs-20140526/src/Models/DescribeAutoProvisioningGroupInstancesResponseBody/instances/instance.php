<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $CPU;

    /**
     * @description The time when the instance was created.
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type of the ECS instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether the instance is I/O optimized.
     *
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description Indicates whether the instance is a preemptible instance.
     *
     * @example true
     *
     * @var bool
     */
    public $isSpot;

    /**
     * @description The memory size of the instance. Unit: MiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   vpc
     *   classic
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The operating system type of the instance. Valid values:
     *
     *   windows
     *   linux
     *
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'CPU'          => 'CPU',
        'creationTime' => 'CreationTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ioOptimized'  => 'IoOptimized',
        'isSpot'       => 'IsSpot',
        'memory'       => 'Memory',
        'networkType'  => 'NetworkType',
        'osType'       => 'OsType',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->isSpot) {
            $res['IsSpot'] = $this->isSpot;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['IsSpot'])) {
            $model->isSpot = $map['IsSpot'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
