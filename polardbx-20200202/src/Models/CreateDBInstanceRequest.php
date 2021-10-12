<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $autoRenew;

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
    public $primaryDBInstanceName;
    protected $_name = [
        'regionId'              => 'RegionId',
        'payType'               => 'PayType',
        'DBNodeCount'           => 'DBNodeCount',
        'DBNodeClass'           => 'DBNodeClass',
        'zoneId'                => 'ZoneId',
        'clientToken'           => 'ClientToken',
        'networkType'           => 'NetworkType',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'usedTime'              => 'UsedTime',
        'period'                => 'Period',
        'resourceGroupId'       => 'ResourceGroupId',
        'autoRenew'             => 'AutoRenew',
        'engineVersion'         => 'EngineVersion',
        'isReadDBInstance'      => 'IsReadDBInstance',
        'primaryDBInstanceName' => 'PrimaryDBInstanceName',
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
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->isReadDBInstance) {
            $res['IsReadDBInstance'] = $this->isReadDBInstance;
        }
        if (null !== $this->primaryDBInstanceName) {
            $res['PrimaryDBInstanceName'] = $this->primaryDBInstanceName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['IsReadDBInstance'])) {
            $model->isReadDBInstance = $map['IsReadDBInstance'];
        }
        if (isset($map['PrimaryDBInstanceName'])) {
            $model->primaryDBInstanceName = $map['PrimaryDBInstanceName'];
        }

        return $model;
    }
}
