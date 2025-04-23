<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\instanceTypeModel;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\tag;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\zoneInfos;

class ApplyNodesRequest extends Model
{
    /**
     * @var bool
     */
    public $allocatePublicAddress;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var instanceTypeModel[]
     */
    public $instanceTypeModel;

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
    public $interval;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $priorityStrategy;

    /**
     * @var string
     */
    public $resourceAmountType;

    /**
     * @var int
     */
    public $round;

    /**
     * @var bool
     */
    public $strictResourceProvision;

    /**
     * @var bool
     */
    public $strictSatisfiedTargetCapacity;

    /**
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $targetCapacity;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;
    protected $_name = [
        'allocatePublicAddress' => 'AllocatePublicAddress',
        'clusterId' => 'ClusterId',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'cores' => 'Cores',
        'hostNamePrefix' => 'HostNamePrefix',
        'hostNameSuffix' => 'HostNameSuffix',
        'imageId' => 'ImageId',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instanceTypeModel' => 'InstanceTypeModel',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandWidthIn' => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut' => 'InternetMaxBandWidthOut',
        'interval' => 'Interval',
        'jobQueue' => 'JobQueue',
        'memory' => 'Memory',
        'priorityStrategy' => 'PriorityStrategy',
        'resourceAmountType' => 'ResourceAmountType',
        'round' => 'Round',
        'strictResourceProvision' => 'StrictResourceProvision',
        'strictSatisfiedTargetCapacity' => 'StrictSatisfiedTargetCapacity',
        'systemDiskLevel' => 'SystemDiskLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'systemDiskType' => 'SystemDiskType',
        'tag' => 'Tag',
        'targetCapacity' => 'TargetCapacity',
        'userData' => 'UserData',
        'zoneInfos' => 'ZoneInfos',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeModel)) {
            Model::validateArray($this->instanceTypeModel);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->zoneInfos)) {
            Model::validateArray($this->zoneInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatePublicAddress) {
            $res['AllocatePublicAddress'] = $this->allocatePublicAddress;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }

        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }

        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceTypeModel) {
            if (\is_array($this->instanceTypeModel)) {
                $res['InstanceTypeModel'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeModel as $item1) {
                    $res['InstanceTypeModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }

        if (null !== $this->resourceAmountType) {
            $res['ResourceAmountType'] = $this->resourceAmountType;
        }

        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }

        if (null !== $this->strictResourceProvision) {
            $res['StrictResourceProvision'] = $this->strictResourceProvision;
        }

        if (null !== $this->strictSatisfiedTargetCapacity) {
            $res['StrictSatisfiedTargetCapacity'] = $this->strictSatisfiedTargetCapacity;
        }

        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetCapacity) {
            $res['TargetCapacity'] = $this->targetCapacity;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->zoneInfos) {
            if (\is_array($this->zoneInfos)) {
                $res['ZoneInfos'] = [];
                $n1 = 0;
                foreach ($this->zoneInfos as $item1) {
                    $res['ZoneInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePublicAddress'])) {
            $model->allocatePublicAddress = $map['AllocatePublicAddress'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }

        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }

        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }

        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        if (isset($map['InstanceTypeModel'])) {
            if (!empty($map['InstanceTypeModel'])) {
                $model->instanceTypeModel = [];
                $n1 = 0;
                foreach ($map['InstanceTypeModel'] as $item1) {
                    $model->instanceTypeModel[$n1++] = instanceTypeModel::fromMap($item1);
                }
            }
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

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }

        if (isset($map['ResourceAmountType'])) {
            $model->resourceAmountType = $map['ResourceAmountType'];
        }

        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }

        if (isset($map['StrictResourceProvision'])) {
            $model->strictResourceProvision = $map['StrictResourceProvision'];
        }

        if (isset($map['StrictSatisfiedTargetCapacity'])) {
            $model->strictSatisfiedTargetCapacity = $map['StrictSatisfiedTargetCapacity'];
        }

        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TargetCapacity'])) {
            $model->targetCapacity = $map['TargetCapacity'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['ZoneInfos'])) {
            if (!empty($map['ZoneInfos'])) {
                $model->zoneInfos = [];
                $n1 = 0;
                foreach ($map['ZoneInfos'] as $item1) {
                    $model->zoneInfos[$n1++] = zoneInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
