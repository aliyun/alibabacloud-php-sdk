<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
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
    public $masterInstanceType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $coldStorageSize;

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

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'regionId'           => 'RegionId',
        'zoneId'             => 'ZoneId',
        'clusterName'        => 'ClusterName',
        'vpcId'              => 'VpcId',
        'vSwitchId'          => 'VSwitchId',
        'masterInstanceType' => 'MasterInstanceType',
        'coreInstanceType'   => 'CoreInstanceType',
        'diskType'           => 'DiskType',
        'diskSize'           => 'DiskSize',
        'nodeCount'          => 'NodeCount',
        'payType'            => 'PayType',
        'engine'             => 'Engine',
        'securityIPList'     => 'SecurityIPList',
        'engineVersion'      => 'EngineVersion',
        'coldStorageSize'    => 'ColdStorageSize',
        'periodUnit'         => 'PeriodUnit',
        'period'             => 'Period',
        'autoRenewPeriod'    => 'AutoRenewPeriod',
        'clientToken'        => 'ClientToken',
        'resourceGroupId'    => 'ResourceGroupId',
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
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
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
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
