<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateServerlessClusterRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

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
    public $serverlessSpec;

    /**
     * @var int
     */
    public $serverlessCapability;

    /**
     * @var int
     */
    public $serverlessStorage;

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
    public $clientToken;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'regionId'             => 'RegionId',
        'zoneId'               => 'ZoneId',
        'clusterName'          => 'ClusterName',
        'vpcId'                => 'VpcId',
        'vSwitchId'            => 'VSwitchId',
        'payType'              => 'PayType',
        'periodUnit'           => 'PeriodUnit',
        'period'               => 'Period',
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'serverlessSpec'       => 'ServerlessSpec',
        'serverlessCapability' => 'ServerlessCapability',
        'serverlessStorage'    => 'ServerlessStorage',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'clientToken'          => 'ClientToken',
        'clientType'           => 'ClientType',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (null !== $this->serverlessSpec) {
            $res['ServerlessSpec'] = $this->serverlessSpec;
        }
        if (null !== $this->serverlessCapability) {
            $res['ServerlessCapability'] = $this->serverlessCapability;
        }
        if (null !== $this->serverlessStorage) {
            $res['ServerlessStorage'] = $this->serverlessStorage;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServerlessClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
        if (isset($map['ServerlessSpec'])) {
            $model->serverlessSpec = $map['ServerlessSpec'];
        }
        if (isset($map['ServerlessCapability'])) {
            $model->serverlessCapability = $map['ServerlessCapability'];
        }
        if (isset($map['ServerlessStorage'])) {
            $model->serverlessStorage = $map['ServerlessStorage'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
