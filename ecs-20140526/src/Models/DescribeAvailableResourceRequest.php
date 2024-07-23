<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceRequest extends Model
{
    /**
     * @description The number of vCPUs of the instance type. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * The Cores parameter takes effect only when the DestinationResource parameter is set to InstanceType.
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The category of the data disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: ESSD
     *   cloud_auto: ESSD AutoPL disk
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The ID of the dedicated host.
     *
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The resource type to query. Valid values:
     *
     *   Zone: zone.
     *   IoOptimized: I/O optimized resource.
     *   InstanceType: instance type.
     *   SystemDisk: system disk.
     *   DataDisk: data disk.
     *   Network: network type.
     *   ddh: dedicated host.
     *
     * For more information about how to configure the DestinationResource parameter, see the **Description** section of this topic.
     *
     * This parameter is required.
     * @example InstanceType
     *
     * @var string
     */
    public $destinationResource;

    /**
     * @description The billing method of the resource. For more information, see [Billing overview](https://help.aliyun.com/document_detail/25398.html). Valid values:
     *
     *   PrePaid: subscription.
     *   PostPaid: pay-as-you-go.
     *
     * Default value: PostPaid.
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance types. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html) or call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation to query the most recent instance type list.
     *
     * For more information about how to configure the InstanceType parameter, see the **Description** section of this topic.
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether the instance is an I/O optimized instance. Valid values:
     *
     *   none: The instance is a non-I/O optimized instance.
     *   optimized: The instance is an I/O optimized instance.
     *
     * Default value: optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The memory size of the instance type. Unit: GiB. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * The Memory parameter takes effect only when the DestinationResource parameter is set to InstanceType.
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   vpc
     *   classic
     *
     * @example vpc
     *
     * @var string
     */
    public $networkCategory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region for which to query resources. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
     * @description The type of the resource. Valid values:
     *
     *   instance: ECS instance.
     *   disk: cloud disk.
     *   reservedinstance: reserved instance.
     *   ddh: dedicated host.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The scope of the reserved instance. Valid values:
     *
     *   Region: regional.
     *   Zone: zonal.
     *
     * @example Region
     *
     * @var string
     */
    public $scope;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Default value: 1. Valid values:
     *
     *   1: After a preemptible instance is created, Alibaba Cloud ensures that the instance is not automatically released within 1 hour. After the 1-hour protection period ends, the system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *   0: After a preemptible instance is created, Alibaba Cloud does not ensure that the instance runs for 1 hour. The system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *
     * >  This parameter takes effect only if SpotStrategy is set to SpotWithPriceLimit or SpotAsPriceGo.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The bidding policy for pay-as-you-go instances. Valid values:
     *
     *   NoSpot: The instance is a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price is automatically used as the bid price. The market price can be up to the pay-as-you-go price.
     *
     * The SpotStrategy parameter takes effect only when the InstanceChargeType parameter is set to PostPaid.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: Enterprise SSD (ESSD)
     *   cloud_auto: ESSD AutoPL disk
     *
     * >  This parameter must be specified when ResourceType is set to instance and DestinationResource is set to DataDisk. If you do not specify this parameter, the default value takes effect.
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The ID of the zone where the instance resides.
     *
     * This parameter is empty by default. When this parameter is empty, the system returns resources that match the other criteria in all zones within the region specified by `RegionId`.
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cores'                => 'Cores',
        'dataDiskCategory'     => 'DataDiskCategory',
        'dedicatedHostId'      => 'DedicatedHostId',
        'destinationResource'  => 'DestinationResource',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceType'         => 'InstanceType',
        'ioOptimized'          => 'IoOptimized',
        'memory'               => 'Memory',
        'networkCategory'      => 'NetworkCategory',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
        'scope'                => 'Scope',
        'spotDuration'         => 'SpotDuration',
        'spotStrategy'         => 'SpotStrategy',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'zoneId'               => 'ZoneId',
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
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkCategory) {
            $res['NetworkCategory'] = $this->networkCategory;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkCategory'])) {
            $model->networkCategory = $map['NetworkCategory'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
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

        return $model;
    }
}
