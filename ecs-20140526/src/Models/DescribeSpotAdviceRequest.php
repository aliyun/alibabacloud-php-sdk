<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpotAdviceRequest extends Model
{
    /**
     * @description The number of vCPUs of the instance type. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The number of GPUs that a GPU-accelerated instance has. For information about the valid values, see [GPU-accelerated compute optimized instance types](https://help.aliyun.com/document_detail/108496.html).
     *
     * @example 2
     *
     * @var int
     */
    public $gpuAmount;

    /**
     * @description The GPU type. Valid values:
     *
     *   NVIDIA P4
     *   NVIDIA T4
     *   NVIDIA P100
     *   NVIDIA V100
     *   NVIDIA A100
     *
     * This parameter is left empty by default, which indicates that all GPU types are queried. For more information, see [GPU-accelerated compute optimized instance types](https://help.aliyun.com/document_detail/108496.html).
     * @example NVIDIA T4
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The level of the instance family. Valid values:
     *
     *   EntryLevel.
     *   EnterpriseLevel.
     *   CreditEntryLevel. For more information, see [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html).
     *
     * This parameter is left empty by default, which indicates that instance families at all levels are queried.
     * @example EntryLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The instance family. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example ecs.c5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The instance types. You can specify up to 10 instance types.
     *
     * @example ecs.c5.large
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The memory size of the instance type. Unit: GiB. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The minimum number of vCPUs of the instance type. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example 2
     *
     * @var int
     */
    public $minCores;

    /**
     * @description The minimum memory size of the instance type. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example 8.0
     *
     * @var float
     */
    public $minMemory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
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
     * @description The zone ID.
     *
     * This parameter is left empty by default, which indicates that all zones in the specified region are queried.
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cores'                => 'Cores',
        'gpuAmount'            => 'GpuAmount',
        'gpuSpec'              => 'GpuSpec',
        'instanceFamilyLevel'  => 'InstanceFamilyLevel',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'instanceTypes'        => 'InstanceTypes',
        'memory'               => 'Memory',
        'minCores'             => 'MinCores',
        'minMemory'            => 'MinMemory',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->gpuAmount) {
            $res['GpuAmount'] = $this->gpuAmount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minCores) {
            $res['MinCores'] = $this->minCores;
        }
        if (null !== $this->minMemory) {
            $res['MinMemory'] = $this->minMemory;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotAdviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['GpuAmount'])) {
            $model->gpuAmount = $map['GpuAmount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinCores'])) {
            $model->minCores = $map['MinCores'];
        }
        if (isset($map['MinMemory'])) {
            $model->minMemory = $map['MinMemory'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
