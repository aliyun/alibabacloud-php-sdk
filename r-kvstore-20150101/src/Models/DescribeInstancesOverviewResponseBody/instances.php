<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **cluster**: cluster architecture
     *   **standard**: standard architecture
     *   **rwsplit**: read/write splitting architecture
     *
     * @example cluster
     *
     * @var string
     */
    public $architectureType;

    /**
     * @description The storage capacity of the instance. Unit: MB.
     *
     * @example 4096
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

    /**
     * @description The time when the instance was created.
     *
     * @example 2018-11-07T08:49:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the subscription instance expires.
     *
     * @example 2022-06-13T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The database engine version of the instance. Valid values: **2.8**, **4.0**, and **5.0**.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the distributed instance.
     *
     * > This parameter is returned only when the instance is a child instance of a distributed instance.
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description The instance type of the instance.
     *
     * @example redis.logic.sharding.2g.2db.0rodb.4proxy.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example apitest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The state of the instance. Valid values:
     *
     *   **Normal**: The instance is normal.
     *   **Creating**: The instance is being created.
     *   **Changing**: The configurations of the instance are being changed.
     *   **Inactive**: The instance is disabled.
     *   **Flushing**: The instance is being released.
     *   **Released**: The instance is released.
     *   **Transforming**: The billing method of the instance is being changed.
     *   **Unavailable**: The instance is unavailable.
     *   **Error**: The instance failed to be created.
     *   **Migrating**: The instance is being migrated.
     *   **BackupRecovering**: The instance is being restored from a backup.
     *   **MinorVersionUpgrading**: The minor version of the instance is being updated.
     *   **NetworkModifying**: The network type of the instance is being changed.
     *   **SSLModifying**: The SSL certificate of the instance is being changed.
     *   **MajorVersionUpgrading**: The major version of the instance is being upgraded. The instance remains accessible during the upgrade.
     *
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The category of the instance. Valid values:
     *
     *   **Tair**
     *   **Redis**
     *   **Memcache**
     *
     * @example Redis
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: VPC
     *
     * @example CLASSIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The private IP address of the instance.
     *
     * > This parameter is not returned when the instance is deployed in the classic network.
     * @example 172.16.49.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Instance\\"s secondary zone id.
     * > This parameter is only returned when the instance has a secondary zone ID.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The ID of the vSwitch to which the instance is connected.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType' => 'ArchitectureType',
        'capacity'         => 'Capacity',
        'chargeType'       => 'ChargeType',
        'connectionDomain' => 'ConnectionDomain',
        'createTime'       => 'CreateTime',
        'endTime'          => 'EndTime',
        'engineVersion'    => 'EngineVersion',
        'globalInstanceId' => 'GlobalInstanceId',
        'instanceClass'    => 'InstanceClass',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceStatus'   => 'InstanceStatus',
        'instanceType'     => 'InstanceType',
        'networkType'      => 'NetworkType',
        'privateIp'        => 'PrivateIp',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
        'secondaryZoneId'  => 'SecondaryZoneId',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
