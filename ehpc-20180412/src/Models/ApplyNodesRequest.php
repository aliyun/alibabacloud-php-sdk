<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\instanceTypeModel;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\tag;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\zoneInfos;
use AlibabaCloud\Tea\Model;

class ApplyNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @var bool
     */
    public $allocatePublicAddress;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandWidthIn;

    /**
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var int
     */
    public $targetCapacity;

    /**
     * @var string
     */
    public $resourceAmountType;

    /**
     * @var string
     */
    public $priorityStrategy;

    /**
     * @var bool
     */
    public $strictSatisfiedTargetCapacity;

    /**
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @var bool
     */
    public $strictResourceProvision;

    /**
     * @var int
     */
    public $round;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;

    /**
     * @var instanceTypeModel[]
     */
    public $instanceTypeModel;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clusterId'                     => 'ClusterId',
        'imageId'                       => 'ImageId',
        'computeSpotStrategy'           => 'ComputeSpotStrategy',
        'computeSpotPriceLimit'         => 'ComputeSpotPriceLimit',
        'systemDiskType'                => 'SystemDiskType',
        'systemDiskSize'                => 'SystemDiskSize',
        'hostNamePrefix'                => 'HostNamePrefix',
        'hostNameSuffix'                => 'HostNameSuffix',
        'allocatePublicAddress'         => 'AllocatePublicAddress',
        'internetChargeType'            => 'InternetChargeType',
        'internetMaxBandWidthIn'        => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut'       => 'InternetMaxBandWidthOut',
        'cores'                         => 'Cores',
        'memory'                        => 'Memory',
        'instanceFamilyLevel'           => 'InstanceFamilyLevel',
        'targetCapacity'                => 'TargetCapacity',
        'resourceAmountType'            => 'ResourceAmountType',
        'priorityStrategy'              => 'PriorityStrategy',
        'strictSatisfiedTargetCapacity' => 'StrictSatisfiedTargetCapacity',
        'systemDiskLevel'               => 'SystemDiskLevel',
        'strictResourceProvision'       => 'StrictResourceProvision',
        'round'                         => 'Round',
        'interval'                      => 'Interval',
        'zoneInfos'                     => 'ZoneInfos',
        'instanceTypeModel'             => 'InstanceTypeModel',
        'tag'                           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->allocatePublicAddress) {
            $res['AllocatePublicAddress'] = $this->allocatePublicAddress;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandWidthIn) {
            $res['InternetMaxBandWidthIn'] = $this->internetMaxBandWidthIn;
        }
        if (null !== $this->internetMaxBandWidthOut) {
            $res['InternetMaxBandWidthOut'] = $this->internetMaxBandWidthOut;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->targetCapacity) {
            $res['TargetCapacity'] = $this->targetCapacity;
        }
        if (null !== $this->resourceAmountType) {
            $res['ResourceAmountType'] = $this->resourceAmountType;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->strictSatisfiedTargetCapacity) {
            $res['StrictSatisfiedTargetCapacity'] = $this->strictSatisfiedTargetCapacity;
        }
        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }
        if (null !== $this->strictResourceProvision) {
            $res['StrictResourceProvision'] = $this->strictResourceProvision;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->zoneInfos) {
            $res['ZoneInfos'] = [];
            if (null !== $this->zoneInfos && \is_array($this->zoneInfos)) {
                $n = 0;
                foreach ($this->zoneInfos as $item) {
                    $res['ZoneInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['AllocatePublicAddress'])) {
            $model->allocatePublicAddress = $map['AllocatePublicAddress'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandWidthIn'])) {
            $model->internetMaxBandWidthIn = $map['InternetMaxBandWidthIn'];
        }
        if (isset($map['InternetMaxBandWidthOut'])) {
            $model->internetMaxBandWidthOut = $map['InternetMaxBandWidthOut'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['TargetCapacity'])) {
            $model->targetCapacity = $map['TargetCapacity'];
        }
        if (isset($map['ResourceAmountType'])) {
            $model->resourceAmountType = $map['ResourceAmountType'];
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['StrictSatisfiedTargetCapacity'])) {
            $model->strictSatisfiedTargetCapacity = $map['StrictSatisfiedTargetCapacity'];
        }
        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }
        if (isset($map['StrictResourceProvision'])) {
            $model->strictResourceProvision = $map['StrictResourceProvision'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['ZoneInfos'])) {
            if (!empty($map['ZoneInfos'])) {
                $model->zoneInfos = [];
                $n                = 0;
                foreach ($map['ZoneInfos'] as $item) {
                    $model->zoneInfos[$n++] = null !== $item ? zoneInfos::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
