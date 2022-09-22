<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsRequest\instanceTypeModel;
use AlibabaCloud\Tea\Model;

class DescribeResourceSolutionsRequest extends Model
{
    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $instanceChargeType;

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
     * @var bool
     */
    public $matchOpenInstances;

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
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
     * @var string
     */
    public $spotStrategy;

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
        'cores'                   => 'Cores',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceFamilyLevel'     => 'InstanceFamilyLevel',
        'instanceTypeModel'       => 'InstanceTypeModel',
        'instanceTypeSupportIPv6' => 'InstanceTypeSupportIPv6',
        'matchOpenInstances'      => 'MatchOpenInstances',
        'maxPrice'                => 'MaxPrice',
        'memory'                  => 'Memory',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceAmountType'      => 'ResourceAmountType',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'spotStrategy'            => 'SpotStrategy',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'targetCapacity'          => 'TargetCapacity',
        'zoneId'                  => 'ZoneId',
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
        if (null !== $this->matchOpenInstances) {
            $res['MatchOpenInstances'] = $this->matchOpenInstances;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (null !== $this->resourceAmountType) {
            $res['ResourceAmountType'] = $this->resourceAmountType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
     * @return DescribeResourceSolutionsRequest
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
        if (isset($map['MatchOpenInstances'])) {
            $model->matchOpenInstances = $map['MatchOpenInstances'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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
        if (isset($map['ResourceAmountType'])) {
            $model->resourceAmountType = $map['ResourceAmountType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
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
