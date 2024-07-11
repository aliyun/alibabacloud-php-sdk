<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateServerlessClusterRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example xx
     *
     * @var string
     */
    public $clientType;

    /**
     * @example serverless-name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @example serverlesshbase
     *
     * @var string
     */
    public $engine;

    /**
     * @example 2.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description This parameter is required.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 6
     *
     * @var int
     */
    public $period;

    /**
     * @example month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-j4d53glb3****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $serverlessCapability;

    /**
     * @example serverless.small
     *
     * @var string
     */
    public $serverlessSpec;

    /**
     * @example 100
     *
     * @var int
     */
    public $serverlessStorage;

    /**
     * @example vsw-bp191ipotqj1ssyl*****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp120k6ixs4eog****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'clientToken'          => 'ClientToken',
        'clientType'           => 'ClientType',
        'clusterName'          => 'ClusterName',
        'diskType'             => 'DiskType',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'payType'              => 'PayType',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'serverlessCapability' => 'ServerlessCapability',
        'serverlessSpec'       => 'ServerlessSpec',
        'serverlessStorage'    => 'ServerlessStorage',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverlessCapability) {
            $res['ServerlessCapability'] = $this->serverlessCapability;
        }
        if (null !== $this->serverlessSpec) {
            $res['ServerlessSpec'] = $this->serverlessSpec;
        }
        if (null !== $this->serverlessStorage) {
            $res['ServerlessStorage'] = $this->serverlessStorage;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerlessCapability'])) {
            $model->serverlessCapability = $map['ServerlessCapability'];
        }
        if (isset($map['ServerlessSpec'])) {
            $model->serverlessSpec = $map['ServerlessSpec'];
        }
        if (isset($map['ServerlessStorage'])) {
            $model->serverlessStorage = $map['ServerlessStorage'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
