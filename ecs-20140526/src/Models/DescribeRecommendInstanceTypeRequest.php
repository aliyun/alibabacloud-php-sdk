<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecommendInstanceTypeRequest extends Model
{
    /**
     * @description The number of vCPUs of the instance.
     *
     * >  If the `Cores` and `Memory` parameters are both specified, all instance types that offer the vCPUs and memory size specified by the parameters are matched.
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The billing method of the instances of the instance type. For more information, see [Billing overview](~~25398~~). Valid values:
     *
     * PrePaid: subscription
     * PostPaid: pay-as-you-go
     *
     * Default value: PostPaid.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The level of the instance family. Valid values:
     *
     * EntryLevel
     * EnterpriseLevel.
     * CreditEntryLevel. For more information, see [Burstable instance families](~~59977~~).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The specified instance type. For more information, see [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent instance type list.
     *
     * >  If the `InstanceType` parameter is specified, none of the `Cores` and `Memory` parameters can be specified.
     * @example ecs.hfg6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Instance families to be filtered out. You can specify up to 10 instance families.
     *
     * @example ecs.hfg6
     *
     * @var string[]
     */
    public $instanceTypeFamily;

    /**
     * @description Specifies whether to match I/O optimized instances. The IoOptimized parameter cannot be specified when the instance is not I/O optimized. Valid values:
     *
     * optimized: matches I/O optimized instances.
     * none: matches non-I/O optimized instances.
     *
     * If you query alternative instance types for retired instance types, this parameter is set to none by default. Default value: none.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The maximum hourly price for pay-as-you-go instances or preemptible instances.
     *
     * >  If this parameter is specified, the `SpotStrategy` parameter must be set to `SpotWithPriceLimit`.
     * @example 10.0
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The memory size of the instance. Unit: GiB.
     *
     * >  If the `Cores` and `Memory` parameters are both specified, all instance types that offer the vCPUs and memory size specified by the parameters are matched.
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The network type of the ECS instance. Valid values:
     *
     *   classic: classic network
     *   vpc: VPC
     *
     * Default value: vpc.
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The policy for recommending instance types. Valid values:
     *
     * InventoryFirst: Instance types are recommended in descending order based on resource availability.
     * PriceFirst: Instance types are recommended in ascending order based on hourly price per vCPU.
     * NewProductFirst: The latest instance types are recommended first.
     *
     * Default value: InventoryFirst.
     * @example PriceFirst
     *
     * @var string
     */
    public $priorityStrategy;

    /**
     * @description The region ID of the alternative instance types. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies the scenario in which the instance type is recommended. Valid values:
     *
     * UPGRADE: instance type upgrade or downgrade
     * CREATE: instance creation
     *
     * Default value: CREATE.
     * @example CREATE
     *
     * @var string
     */
    public $scene;

    /**
     * @description The bidding policy of preemptible instances. Valid values:
     *
     * NoSpot: applies to regular pay-as-you-go instances.
     * SpotWithPriceLimit: applies to preemptible instances that have user-defined maximum hourly prices.
     * SpotAsPriceGo: applies to preemptible instances that are of the market price at the time of purchase.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The category of the system disk. Valid values:
     *
     * cloud_efficiency: ultra disk
     * cloud_ssd: standard SSD
     * cloud_essd: enhanced SSD (ESSD)
     * cloud: basic disk
     *
     * For I/O optimized instances, the default value is cloud_efficiency.
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The zone ID of the alternative instance types. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * When you specify this parameter, we recommend that you set ZoneMatchMode to the default value Include. This value indicates that instance types in the zone specified by ZoneId are preferentially recommended, and instance types in other zones in the same region are also listed.
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Specifies which alternative instance types are recommended. Valid values:
     *
     * Strict: recommends only alternative instance types in the zone specified by ZoneId.
     * Include: recommends all instance types in all the zones in the same region as the specified instance type.
     *
     * When `ZoneId` is specified, the default value of this parameter is Strict. This value indicates that only alternative instance types in the zone specified by ZoneId are recommended.
     * @example Strict
     *
     * @var string
     */
    public $zoneMatchMode;
    protected $_name = [
        'cores'                => 'Cores',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceFamilyLevel'  => 'InstanceFamilyLevel',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'ioOptimized'          => 'IoOptimized',
        'maxPrice'             => 'MaxPrice',
        'memory'               => 'Memory',
        'networkType'          => 'NetworkType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'priorityStrategy'     => 'PriorityStrategy',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scene'                => 'Scene',
        'spotStrategy'         => 'SpotStrategy',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'zoneId'               => 'ZoneId',
        'zoneMatchMode'        => 'ZoneMatchMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneMatchMode) {
            $res['ZoneMatchMode'] = $this->zoneMatchMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecommendInstanceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            if (!empty($map['InstanceTypeFamily'])) {
                $model->instanceTypeFamily = $map['InstanceTypeFamily'];
            }
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneMatchMode'])) {
            $model->zoneMatchMode = $map['ZoneMatchMode'];
        }

        return $model;
    }
}
