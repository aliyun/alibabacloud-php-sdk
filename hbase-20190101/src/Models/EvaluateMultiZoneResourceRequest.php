<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EvaluateMultiZoneResourceRequest extends Model
{
    /**
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @var string
     */
    public $archVersion;

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
    public $clusterName;

    /**
     * @var int
     */
    public $coreDiskSize;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var int
     */
    public $coreNodeCount;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $logDiskSize;

    /**
     * @var string
     */
    public $logDiskType;

    /**
     * @var string
     */
    public $logInstanceType;

    /**
     * @var int
     */
    public $logNodeCount;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $multiZoneCombination;

    /**
     * @var string
     */
    public $payType;

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
    public $primaryVSwitchId;

    /**
     * @var string
     */
    public $primaryZoneId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'archVersion'          => 'ArchVersion',
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'clientToken'          => 'ClientToken',
        'clusterName'          => 'ClusterName',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreDiskType'         => 'CoreDiskType',
        'coreInstanceType'     => 'CoreInstanceType',
        'coreNodeCount'        => 'CoreNodeCount',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'logDiskSize'          => 'LogDiskSize',
        'logDiskType'          => 'LogDiskType',
        'logInstanceType'      => 'LogInstanceType',
        'logNodeCount'         => 'LogNodeCount',
        'masterInstanceType'   => 'MasterInstanceType',
        'multiZoneCombination' => 'MultiZoneCombination',
        'payType'              => 'PayType',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'primaryVSwitchId'     => 'PrimaryVSwitchId',
        'primaryZoneId'        => 'PrimaryZoneId',
        'regionId'             => 'RegionId',
        'securityIPList'       => 'SecurityIPList',
        'standbyVSwitchId'     => 'StandbyVSwitchId',
        'standbyZoneId'        => 'StandbyZoneId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arbiterVSwitchId) {
            $res['ArbiterVSwitchId'] = $this->arbiterVSwitchId;
        }
        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }
        if (null !== $this->archVersion) {
            $res['ArchVersion'] = $this->archVersion;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = $this->logDiskSize;
        }
        if (null !== $this->logDiskType) {
            $res['LogDiskType'] = $this->logDiskType;
        }
        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }
        if (null !== $this->logNodeCount) {
            $res['LogNodeCount'] = $this->logNodeCount;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }
        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ArbiterVSwitchId'])) {
            $model->arbiterVSwitchId = $map['ArbiterVSwitchId'];
        }
        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }
        if (isset($map['ArchVersion'])) {
            $model->archVersion = $map['ArchVersion'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = $map['LogDiskSize'];
        }
        if (isset($map['LogDiskType'])) {
            $model->logDiskType = $map['LogDiskType'];
        }
        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }
        if (isset($map['LogNodeCount'])) {
            $model->logNodeCount = $map['LogNodeCount'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }
        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
