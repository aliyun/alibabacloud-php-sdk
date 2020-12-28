<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class AddNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $createMode;

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
    public $zoneId;

    /**
     * @var string
     */
    public $vSwitchId;

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
    public $computeEnableHt;

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
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'imageOwnerAlias'         => 'ImageOwnerAlias',
        'imageId'                 => 'ImageId',
        'count'                   => 'Count',
        'instanceType'            => 'InstanceType',
        'computeSpotStrategy'     => 'ComputeSpotStrategy',
        'computeSpotPriceLimit'   => 'ComputeSpotPriceLimit',
        'ecsChargeType'           => 'EcsChargeType',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'autoRenew'               => 'AutoRenew',
        'autoRenewPeriod'         => 'AutoRenewPeriod',
        'jobQueue'                => 'JobQueue',
        'createMode'              => 'CreateMode',
        'systemDiskType'          => 'SystemDiskType',
        'systemDiskSize'          => 'SystemDiskSize',
        'zoneId'                  => 'ZoneId',
        'vSwitchId'               => 'VSwitchId',
        'hostNamePrefix'          => 'HostNamePrefix',
        'hostNameSuffix'          => 'HostNameSuffix',
        'computeEnableHt'         => 'ComputeEnableHt',
        'allocatePublicAddress'   => 'AllocatePublicAddress',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandWidthIn'  => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut' => 'InternetMaxBandWidthOut',
        'clientToken'             => 'ClientToken',
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
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
