<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesRequest\dataDisks;

class AddNodesRequest extends Model
{
    /**
     * @var bool
     */
    public $allocatePublicAddress;

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
    public $clientToken;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @var int
     */
    public $computeSpotDuration;

    /**
     * @var string
     */
    public $computeSpotInterruptionBehavior;

    /**
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $dnsConfig;

    /**
     * @var string
     */
    public $ecsChargeType;

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
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $instanceType;

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
    public $jobQueue;

    /**
     * @var int
     */
    public $minCount;

    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $sync;

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
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocatePublicAddress' => 'AllocatePublicAddress',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'clientToken' => 'ClientToken',
        'clusterId' => 'ClusterId',
        'computeEnableHt' => 'ComputeEnableHt',
        'computeSpotDuration' => 'ComputeSpotDuration',
        'computeSpotInterruptionBehavior' => 'ComputeSpotInterruptionBehavior',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'count' => 'Count',
        'createMode' => 'CreateMode',
        'dataDisks' => 'DataDisks',
        'dnsConfig' => 'DnsConfig',
        'ecsChargeType' => 'EcsChargeType',
        'hostNamePrefix' => 'HostNamePrefix',
        'hostNameSuffix' => 'HostNameSuffix',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandWidthIn' => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut' => 'InternetMaxBandWidthOut',
        'jobQueue' => 'JobQueue',
        'minCount' => 'MinCount',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'sync' => 'Sync',
        'systemDiskLevel' => 'SystemDiskLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'systemDiskType' => 'SystemDiskType',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1 = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = $this->dnsConfig;
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

        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
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
                $n1 = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1++] = dataDisks::fromMap($item1);
                }
            }
        }

        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = $map['DnsConfig'];
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

        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
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
