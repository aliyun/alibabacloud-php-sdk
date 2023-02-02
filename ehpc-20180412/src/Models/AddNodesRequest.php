<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesRequest\dataDisks;
use AlibabaCloud\Tea\Model;

class AddNodesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allocatePublicAddress;

    /**
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @example 1
     *
     * @var int
     */
    public $computeSpotDuration;

    /**
     * @example Terminate
     *
     * @var string
     */
    public $computeSpotInterruptionBehavior;

    /**
     * @example 0.68
     *
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example manual
     *
     * @var string
     */
    public $createMode;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @example 01
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthIn;

    /**
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @example 1
     *
     * @var int
     */
    public $minCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example false
     *
     * @var bool
     */
    public $sync;

    /**
     * @example PL0
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocatePublicAddress'           => 'AllocatePublicAddress',
        'autoRenew'                       => 'AutoRenew',
        'autoRenewPeriod'                 => 'AutoRenewPeriod',
        'clientToken'                     => 'ClientToken',
        'clusterId'                       => 'ClusterId',
        'computeEnableHt'                 => 'ComputeEnableHt',
        'computeSpotDuration'             => 'ComputeSpotDuration',
        'computeSpotInterruptionBehavior' => 'ComputeSpotInterruptionBehavior',
        'computeSpotPriceLimit'           => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'             => 'ComputeSpotStrategy',
        'count'                           => 'Count',
        'createMode'                      => 'CreateMode',
        'dataDisks'                       => 'DataDisks',
        'ecsChargeType'                   => 'EcsChargeType',
        'hostNamePrefix'                  => 'HostNamePrefix',
        'hostNameSuffix'                  => 'HostNameSuffix',
        'imageId'                         => 'ImageId',
        'imageOwnerAlias'                 => 'ImageOwnerAlias',
        'instanceType'                    => 'InstanceType',
        'internetChargeType'              => 'InternetChargeType',
        'internetMaxBandWidthIn'          => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut'         => 'InternetMaxBandWidthOut',
        'jobQueue'                        => 'JobQueue',
        'minCount'                        => 'MinCount',
        'period'                          => 'Period',
        'periodUnit'                      => 'PeriodUnit',
        'sync'                            => 'Sync',
        'systemDiskLevel'                 => 'SystemDiskLevel',
        'systemDiskSize'                  => 'SystemDiskSize',
        'systemDiskType'                  => 'SystemDiskType',
        'vSwitchId'                       => 'VSwitchId',
        'zoneId'                          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatePublicAddress) {
            $res['AllocatePublicAddress'] = $this->allocatePublicAddress;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->computeSpotDuration) {
            $res['ComputeSpotDuration'] = $this->computeSpotDuration;
        }
        if (null !== $this->computeSpotInterruptionBehavior) {
            $res['ComputeSpotInterruptionBehavior'] = $this->computeSpotInterruptionBehavior;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
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
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePublicAddress'])) {
            $model->allocatePublicAddress = $map['AllocatePublicAddress'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['ComputeSpotDuration'])) {
            $model->computeSpotDuration = $map['ComputeSpotDuration'];
        }
        if (isset($map['ComputeSpotInterruptionBehavior'])) {
            $model->computeSpotInterruptionBehavior = $map['ComputeSpotInterruptionBehavior'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
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
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
