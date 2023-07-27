<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSpecShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description N/A
     *
     * @example rm-uf6wjk5*******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the zone.
     *
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The specification changes of a serverless ApsaraDB RDS for MySQL instance.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description Specifies whether to enable the forced scaling feature for the serverless instance. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example dhg-7a9********
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The maximum number of RDS Capacity Units (RCUs).
     *
     * @example Up
     *
     * @var string
     */
    public $direction;

    /**
     * @description The ID of the resource group.
     *
     * @example MaintainTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The validity period of the specification changes on an ApsaraDB RDS for SQL Server instance. Unit: day.
     *
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The time at which you want to change the specifications. We recommend that you apply the specification during off-peak hours. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >
     *
     *   You must specify a point in time later than the current time. Otherwise, the specification change task fails. The current time refers to the time to call this operation. If the specification change task fails, you must wait for the order to be automatically canceled, and then call this operation again.
     *
     *   If you want to increase the storage capacity or change the ESSD storage type between different PLs, the specification change immediately takes effect and does not affect your workloads. You do not need to configure this parameter.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the request.
     *
     * @example rg-acfmy**********
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $serverlessConfigurationShrink;

    /**
     * @description The minimum number of RCUs.
     *
     * @example Specifies whether to enable the automatic suspension feature.
     *
     * @var string
     */
    public $sourceBiz;

    /**
     * @description The response parameters.
     *
     * @example 2019-07-10T13:15:12Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @description The ID of the order.
     *
     * @example 3
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition.
     *   **HighAvailability**: RDS High-availability Edition.
     *   **AlwaysOn**: RDS Cluster Edition for SQL Server.
     *   **Finance**: RDS Enterprise Edition. This edition is available only on the China site (aliyun.com).
     *
     * > If you set **EngineVersion** to an SQL Server version number, you must also specify this parameter.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoUseCoupon'                 => 'AutoUseCoupon',
        'burstingEnabled'               => 'BurstingEnabled',
        'category'                      => 'Category',
        'DBInstanceClass'               => 'DBInstanceClass',
        'DBInstanceId'                  => 'DBInstanceId',
        'DBInstanceStorage'             => 'DBInstanceStorage',
        'DBInstanceStorageType'         => 'DBInstanceStorageType',
        'dedicatedHostGroupId'          => 'DedicatedHostGroupId',
        'direction'                     => 'Direction',
        'effectiveTime'                 => 'EffectiveTime',
        'engineVersion'                 => 'EngineVersion',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'payType'                       => 'PayType',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'serverlessConfigurationShrink' => 'ServerlessConfiguration',
        'sourceBiz'                     => 'SourceBiz',
        'switchTime'                    => 'SwitchTime',
        'targetMinorVersion'            => 'TargetMinorVersion',
        'usedTime'                      => 'UsedTime',
        'zoneId'                        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serverlessConfigurationShrink) {
            $res['ServerlessConfiguration'] = $this->serverlessConfigurationShrink;
        }
        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSpecShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServerlessConfiguration'])) {
            $model->serverlessConfigurationShrink = $map['ServerlessConfiguration'];
        }
        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
