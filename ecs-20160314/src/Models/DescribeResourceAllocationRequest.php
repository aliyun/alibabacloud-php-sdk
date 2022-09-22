<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationRequest\instanceTypeModel;
use AlibabaCloud\Tea\Model;

class DescribeResourceAllocationRequest extends Model
{
    /**
     * @var int
     */
    public $cores;

    /**
     * @var string[]
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var instanceTypeModel[]
     */
    public $instanceTypeModel;

    /**
     * @var bool
     */
    public $instanceTypeSupportIPv6;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var float
     */
    public $memory;

    /**
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
     * @var int
     */
    public $postPaidBaseCapacity;

    /**
     * @var string
     */
    public $priorityStrategy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceAmountType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $spotBaseCapacity;

    /**
     * @var int
     */
    public $spotInstancePools;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $strictSatisfiedTargetCapacity;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $targetCapacity;

    /**
     * @var string[]
     */
    public $zoneId;
    protected $_name = [
        'cores'                         => 'Cores',
        'dataDiskCategory'              => 'DataDiskCategory',
        'defaultTargetCapacityType'     => 'DefaultTargetCapacityType',
        'instanceFamilyLevel'           => 'InstanceFamilyLevel',
        'instanceTypeModel'             => 'InstanceTypeModel',
        'instanceTypeSupportIPv6'       => 'InstanceTypeSupportIPv6',
        'ioOptimized'                   => 'IoOptimized',
        'maxPrice'                      => 'MaxPrice',
        'memory'                        => 'Memory',
        'networkType'                   => 'NetworkType',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'postPaidBaseCapacity'          => 'PostPaidBaseCapacity',
        'priorityStrategy'              => 'PriorityStrategy',
        'regionId'                      => 'RegionId',
        'resourceAmountType'            => 'ResourceAmountType',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'spotBaseCapacity'              => 'SpotBaseCapacity',
        'spotInstancePools'             => 'SpotInstancePools',
        'spotStrategy'                  => 'SpotStrategy',
        'strictSatisfiedTargetCapacity' => 'StrictSatisfiedTargetCapacity',
        'systemDiskCategory'            => 'SystemDiskCategory',
        'targetCapacity'                => 'TargetCapacity',
        'zoneId'                        => 'ZoneId',
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
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeModel) {
            $res['InstanceTypeModel'] = [];
            if (null !== $this->instanceTypeModel && \is_array($this->instanceTypeModel)) {
                $n = 0;
                foreach ($this->instanceTypeModel as $item) {
                    $res['InstanceTypeModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceTypeSupportIPv6) {
            $res['InstanceTypeSupportIPv6'] = $this->instanceTypeSupportIPv6;
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
        if (null !== $this->postPaidBaseCapacity) {
            $res['PostPaidBaseCapacity'] = $this->postPaidBaseCapacity;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceAmountType) {
            $res['ResourceAmountType'] = $this->resourceAmountType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotBaseCapacity) {
            $res['SpotBaseCapacity'] = $this->spotBaseCapacity;
        }
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->strictSatisfiedTargetCapacity) {
            $res['StrictSatisfiedTargetCapacity'] = $this->strictSatisfiedTargetCapacity;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->targetCapacity) {
            $res['TargetCapacity'] = $this->targetCapacity;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceAllocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['DataDiskCategory'])) {
            if (!empty($map['DataDiskCategory'])) {
                $model->dataDiskCategory = $map['DataDiskCategory'];
            }
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeModel'])) {
            if (!empty($map['InstanceTypeModel'])) {
                $model->instanceTypeModel = [];
                $n                        = 0;
                foreach ($map['InstanceTypeModel'] as $item) {
                    $model->instanceTypeModel[$n++] = null !== $item ? instanceTypeModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceTypeSupportIPv6'])) {
            $model->instanceTypeSupportIPv6 = $map['InstanceTypeSupportIPv6'];
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
        if (isset($map['PostPaidBaseCapacity'])) {
            $model->postPaidBaseCapacity = $map['PostPaidBaseCapacity'];
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceAmountType'])) {
            $model->resourceAmountType = $map['ResourceAmountType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotBaseCapacity'])) {
            $model->spotBaseCapacity = $map['SpotBaseCapacity'];
        }
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StrictSatisfiedTargetCapacity'])) {
            $model->strictSatisfiedTargetCapacity = $map['StrictSatisfiedTargetCapacity'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['TargetCapacity'])) {
            $model->targetCapacity = $map['TargetCapacity'];
        }
        if (isset($map['ZoneId'])) {
            if (!empty($map['ZoneId'])) {
                $model->zoneId = $map['ZoneId'];
            }
        }

        return $model;
    }
}
