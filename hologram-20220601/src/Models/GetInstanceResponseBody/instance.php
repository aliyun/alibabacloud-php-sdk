<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody\instance\endpoints;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var string
     */
    public $autoRenewal;

    /**
     * @description The cold storage capacity of the instance. Unit: GB. Standard SSD is used for hot storage, and HDD is used for cold storage.
     *
     * @example 800
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @description The commodity code.
     *
     * Valid values:
     *
     *   hologram_maxcomputeAccelerate_public_cn
     *
     * .
     *
     *   hologram_combo_public_cn
     *
     * .
     *
     *   hologram_prepay_public_intl
     *
     * .
     *
     *   hologram_storage_dp_cn
     *
     * .
     *
     *   hologram_postpay_public_cn
     *
     * .
     *
     *   hologram_postpay_public_intl
     *
     * <!-- -->
     *
     *   hologram_maxcomputeAccelerate_public_intl
     *
     * .
     *
     *   hologram_cu_dp_cn
     *
     * <!-- -->
     * @example hologram_combo_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The number of compute nodes. In a typical configuration, a node has 16 vCPUs and 32 GB of memory.
     *
     * @example 2
     *
     * @var int
     */
    public $computeNodeCount;

    /**
     * @description The number of vCPUs.
     *
     * @example 32
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The creation time.
     *
     * @example 2021-02-03T13:06:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The amount of data that can be stored in the disk of the Standard storage class. Unit: GB.
     *
     * @example 500
     *
     * @var string
     */
    public $disk;

    /**
     * @description Indicates whether data lake acceleration is enabled.
     *
     * @example true
     *
     * @var string
     */
    public $enableHiveAccess;

    /**
     * @description The list of endpoints.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description The expiration time. This parameter is invalid for pay-as-you-go instances.
     *
     * @example 2021-02-03T13:06:06Z
     *
     * @var string
     */
    public $expirationTime;

    /**
     * @description 网关节点数量。
     *
     * @example 2
     *
     * @var int
     */
    public $gatewayCount;

    /**
     * @description 网关cpu资源。
     * 单位：core。
     * @example 4
     *
     * @var int
     */
    public $gatewayCpu;

    /**
     * @description 网关内存资源。
     * 单位：GB。
     * @example 16
     *
     * @var int
     */
    public $gatewayMemory;

    /**
     * @description The billing method of the instance.
     *
     * Valid values:
     *
     *   PostPaid
     *
     * .
     *
     *   PrePaid
     *
     * .
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance ID.
     *
     * @example hgpostcn-cn-tl32s6cgw00b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name. The instance name must be 2 to 64 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The owner of the instance.
     *
     * @example 12345678900000
     *
     * @var string
     */
    public $instanceOwner;

    /**
     * @description The status of the instance.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Suspended
     *
     * <!-- -->
     *
     *   Allocating
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The type of the instance.
     *
     * Valid values:
     *
     *   Follower
     *
     * .
     *
     *   Standard
     *
     * .
     * @example Standard
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the primary instance.
     *
     * @example hgpostcn-cn-i7m2ncd6w002
     *
     * @var string
     */
    public $leaderInstanceId;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 128
     *
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzuq7hpybze2i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The reason for the suspension.
     *
     * @example Manual
     *
     * @var string
     */
    public $suspendReason;

    /**
     * @description The instance tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The instance version.
     *
     * @example r1.3.37
     *
     * @var string
     */
    public $version;

    /**
     * @description The ID of the zone where the instance resides.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewal'        => 'AutoRenewal',
        'coldStorage'        => 'ColdStorage',
        'commodityCode'      => 'CommodityCode',
        'computeNodeCount'   => 'ComputeNodeCount',
        'cpu'                => 'Cpu',
        'creationTime'       => 'CreationTime',
        'disk'               => 'Disk',
        'enableHiveAccess'   => 'EnableHiveAccess',
        'endpoints'          => 'Endpoints',
        'expirationTime'     => 'ExpirationTime',
        'gatewayCount'       => 'GatewayCount',
        'gatewayCpu'         => 'GatewayCpu',
        'gatewayMemory'      => 'GatewayMemory',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'instanceOwner'      => 'InstanceOwner',
        'instanceStatus'     => 'InstanceStatus',
        'instanceType'       => 'InstanceType',
        'leaderInstanceId'   => 'LeaderInstanceId',
        'memory'             => 'Memory',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'suspendReason'      => 'SuspendReason',
        'tags'               => 'Tags',
        'version'            => 'Version',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->computeNodeCount) {
            $res['ComputeNodeCount'] = $this->computeNodeCount;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->enableHiveAccess) {
            $res['EnableHiveAccess'] = $this->enableHiveAccess;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->gatewayCount) {
            $res['GatewayCount'] = $this->gatewayCount;
        }
        if (null !== $this->gatewayCpu) {
            $res['GatewayCpu'] = $this->gatewayCpu;
        }
        if (null !== $this->gatewayMemory) {
            $res['GatewayMemory'] = $this->gatewayMemory;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceOwner) {
            $res['InstanceOwner'] = $this->instanceOwner;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->leaderInstanceId) {
            $res['LeaderInstanceId'] = $this->leaderInstanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->suspendReason) {
            $res['SuspendReason'] = $this->suspendReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ComputeNodeCount'])) {
            $model->computeNodeCount = $map['ComputeNodeCount'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['EnableHiveAccess'])) {
            $model->enableHiveAccess = $map['EnableHiveAccess'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }
        if (isset($map['GatewayCount'])) {
            $model->gatewayCount = $map['GatewayCount'];
        }
        if (isset($map['GatewayCpu'])) {
            $model->gatewayCpu = $map['GatewayCpu'];
        }
        if (isset($map['GatewayMemory'])) {
            $model->gatewayMemory = $map['GatewayMemory'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceOwner'])) {
            $model->instanceOwner = $map['InstanceOwner'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LeaderInstanceId'])) {
            $model->leaderInstanceId = $map['LeaderInstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SuspendReason'])) {
            $model->suspendReason = $map['SuspendReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
