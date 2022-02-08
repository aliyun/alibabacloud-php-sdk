<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $isReadDBInstance;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $primaryDBInstanceName;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryZone;

    /**
     * @var string
     */
    public $tertiaryZone;

    /**
     * @var string
     */
    public $topologyType;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'clientToken'           => 'ClientToken',
        'DBNodeClass'           => 'DBNodeClass',
        'DBNodeCount'           => 'DBNodeCount',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
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
