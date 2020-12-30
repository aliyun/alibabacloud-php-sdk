<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EvaluateMultiZoneResourceRequest extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $archVersion;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $multiZoneCombination;

    /**
     * @var string
     */
    public $primaryZoneId;

    /**
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var int
     */
    public $coreDiskSize;

    /**
     * @var int
     */
    public $coreNodeCount;

    /**
     * @var string
     */
    public $logInstanceType;

    /**
     * @var string
     */
    public $logDiskType;

    /**
     * @var int
     */
    public $logDiskSize;

    /**
     * @var int
     */
    public $logNodeCount;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'archVersion'          => 'ArchVersion',
        'clusterName'          => 'ClusterName',
        'regionId'             => 'RegionId',
        'vpcId'                => 'VpcId',
        'multiZoneCombination' => 'MultiZoneCombination',
        'primaryZoneId'        => 'PrimaryZoneId',
        'primaryVSwitchId'     => 'PrimaryVSwitchId',
        'standbyZoneId'        => 'StandbyZoneId',
        'standbyVSwitchId'     => 'StandbyVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'masterInstanceType'   => 'MasterInstanceType',
        'coreInstanceType'     => 'CoreInstanceType',
        'coreDiskType'         => 'CoreDiskType',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreNodeCount'        => 'CoreNodeCount',
        'logInstanceType'      => 'LogInstanceType',
        'logDiskType'          => 'LogDiskType',
        'logDiskSize'          => 'LogDiskSize',
        'logNodeCount'         => 'LogNodeCount',
        'securityIPList'       => 'SecurityIPList',
        'payType'              => 'PayType',
        'periodUnit'           => 'PeriodUnit',
        'period'               => 'Period',
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->archVersion) {
            $res['ArchVersion'] = $this->archVersion;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
        }
        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }
        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }
        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }
        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }
        if (null !== $this->arbiterVSwitchId) {
            $res['ArbiterVSwitchId'] = $this->arbiterVSwitchId;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }
        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }
        if (null !== $this->logDiskType) {
            $res['LogDiskType'] = $this->logDiskType;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = $this->logDiskSize;
        }
        if (null !== $this->logNodeCount) {
            $res['LogNodeCount'] = $this->logNodeCount;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateMultiZoneResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ArchVersion'])) {
            $model->archVersion = $map['ArchVersion'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
        }
        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }
        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }
        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }
        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }
        if (isset($map['ArbiterVSwitchId'])) {
            $model->arbiterVSwitchId = $map['ArbiterVSwitchId'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }
        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }
        if (isset($map['LogDiskType'])) {
            $model->logDiskType = $map['LogDiskType'];
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = $map['LogDiskSize'];
        }
        if (isset($map['LogNodeCount'])) {
            $model->logNodeCount = $map['LogNodeCount'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
