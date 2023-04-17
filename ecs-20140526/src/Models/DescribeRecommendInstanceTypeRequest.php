<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecommendInstanceTypeRequest extends Model
{
    /**
     * @description The number of vCPUs for the instance.
     *
     * > If the `Cores` and `Memory` parameters are both specified, all instance types with the vCPUs and memory size specified by the parameters are queried.
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The billing method of the instance. For more information, see [Billing overview](~~25398~~). Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
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
     *   EntryLevel.
     *   EnterpriseLevel.
     *   CreditEntryLevel: credit-based entry level. For more information, see [Burstable instance families](~~59977~~).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The specified instance type. For more information, see [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent list of instance types.
     *
     * > If the `InstanceType` parameter is specified, the `Cores` and `Memory` are ignored.
     * @example ecs.hfg6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies the instance families from which the alternative instance types are selected. You can specify up to 10 instance types.
     *
     * @example ecs.hfg6
     *
     * @var string[]
     */
    public $instanceTypeFamily;

    /**
     * @description Indicates whether the instance is an I/O optimized instance. The IoOptimized parameter cannot be specified when the instance is not I/O optimized. Valid values:
     *
     *   optimized
     *   none
     *
     * If you query alternative instance types for retired instance types, this parameter is set to none by default.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The maximum hourly price for pay-as-you-go instances or preemptible instances.
     *
     * >  This parameter takes effect only when `SpotStrategy` is set to `SpotWithPriceLimit`.
     * @example 10.0
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The memory size of the instance. Unit: GiB.
     *
     * > If the `Cores` and `Memory` parameters are both specified, all instance types with the vCPUs and memory size specified by the parameters are queried.
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   classic
     *   vpc
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
     * @description The policy based on which the system recommends the instance type. Valid values:
     *
     *   InventoryFirst: Instance types are recommended in descending order based on resource availability.
     *   PriceFirst: Instance types are recommended in ascending order based on hourly price per vCPU.
     *   NewProductFirst: The latest instance types are recommended first.
     *
     * Default value: InventoryFirst.
     * @example PriceFirst
     *
     * @var string
     */
    public $priorityStrategy;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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
     * @description Specifies the scenarios in which the instance type is recommended. Valid values:
     *
     *   UPGRADE: instance type upgrade or downgrade
     *   CREATE: instance creation
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
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price is automatically used as the bid price. The market price can be as high as the pay-as-you-go price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk
     *
     * For I/O optimized instances, the default value is cloud_efficiency.
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The ID of the zone for which to query resources. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * We recommend that you set the value of ZoneMatchMode to Include, which is the default value. As a result, instance types within zones specified by ZoneId are recommended with priority. Instance types in other zones within the same region are also listed.
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Specifies whether to recommend only instance types in the zone specified by ZoneId. Valid values:
     *
     *   Strict: only instance types within zones specified by the ZoneId parameter are recommended.
     *   Include: instance types in other zones within the same region are also recommended.
     *
     * If `ZoneId` is specified, the default value of this parameter is Strict. This value indicates that only alternative instance types in the zone specified by ZoneId are recommended.
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
