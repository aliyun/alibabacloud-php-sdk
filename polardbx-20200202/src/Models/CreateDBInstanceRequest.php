<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $CNNodeCount;

    /**
     * @example xxxxxx-xxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cnClass;

    /**
     * @example polarx.x4.2xlarge.2d
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @example 2
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $DNNodeCount;

    /**
     * @var string
     */
    public $dnClass;

    /**
     * @example 2.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $isReadDBInstance;

    /**
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @example pxc-*********
     *
     * @var string
     */
    public $primaryDBInstanceName;

    /**
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example null
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example cn-shenzhen-a
     *
     * @var string
     */
    public $secondaryZone;

    /**
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $tertiaryZone;

    /**
     * @example 3azones
     *
     * @var string
     */
    public $topologyType;

    /**
     * @example 1
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description VPC ID。
     *
     * @example vpc-*****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-*********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'CNNodeCount'           => 'CNNodeCount',
        'clientToken'           => 'ClientToken',
        'cnClass'               => 'CnClass',
        'DBNodeClass'           => 'DBNodeClass',
        'DBNodeCount'           => 'DBNodeCount',
        'DNNodeCount'           => 'DNNodeCount',
        'dnClass'               => 'DnClass',
        'engineVersion'         => 'EngineVersion',
        'isReadDBInstance'      => 'IsReadDBInstance',
        'networkType'           => 'NetworkType',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'primaryDBInstanceName' => 'PrimaryDBInstanceName',
        'primaryZone'           => 'PrimaryZone',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'secondaryZone'         => 'SecondaryZone',
        'tertiaryZone'          => 'TertiaryZone',
        'topologyType'          => 'TopologyType',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->CNNodeCount) {
            $res['CNNodeCount'] = $this->CNNodeCount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cnClass) {
            $res['CnClass'] = $this->cnClass;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->DNNodeCount) {
            $res['DNNodeCount'] = $this->DNNodeCount;
        }
        if (null !== $this->dnClass) {
            $res['DnClass'] = $this->dnClass;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->isReadDBInstance) {
            $res['IsReadDBInstance'] = $this->isReadDBInstance;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->primaryDBInstanceName) {
            $res['PrimaryDBInstanceName'] = $this->primaryDBInstanceName;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryZone) {
            $res['SecondaryZone'] = $this->secondaryZone;
        }
        if (null !== $this->tertiaryZone) {
            $res['TertiaryZone'] = $this->tertiaryZone;
        }
        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
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
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['CNNodeCount'])) {
            $model->CNNodeCount = $map['CNNodeCount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CnClass'])) {
            $model->cnClass = $map['CnClass'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['DNNodeCount'])) {
            $model->DNNodeCount = $map['DNNodeCount'];
        }
        if (isset($map['DnClass'])) {
            $model->dnClass = $map['DnClass'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['IsReadDBInstance'])) {
            $model->isReadDBInstance = $map['IsReadDBInstance'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrimaryDBInstanceName'])) {
            $model->primaryDBInstanceName = $map['PrimaryDBInstanceName'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryZone'])) {
            $model->secondaryZone = $map['SecondaryZone'];
        }
        if (isset($map['TertiaryZone'])) {
            $model->tertiaryZone = $map['TertiaryZone'];
        }
        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
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
