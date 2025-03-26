<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceSpecShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowMajorVersionUpgrade;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @var string
     */
    public $compressionMode;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @var string
     */
    public $optimizedWrites;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $readOnlyDBInstanceClass;

    /**
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
     * @var string
     */
    public $sourceBiz;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneIdSlave1;
    protected $_name = [
        'allowMajorVersionUpgrade' => 'AllowMajorVersionUpgrade',
        'autoUseCoupon' => 'AutoUseCoupon',
        'burstingEnabled' => 'BurstingEnabled',
        'category' => 'Category',
        'coldDataEnabled' => 'ColdDataEnabled',
        'compressionMode' => 'CompressionMode',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'direction' => 'Direction',
        'effectiveTime' => 'EffectiveTime',
        'engineVersion' => 'EngineVersion',
        'ioAccelerationEnabled' => 'IoAccelerationEnabled',
        'optimizedWrites' => 'OptimizedWrites',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'promotionCode' => 'PromotionCode',
        'readOnlyDBInstanceClass' => 'ReadOnlyDBInstanceClass',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'serverlessConfigurationShrink' => 'ServerlessConfiguration',
        'sourceBiz' => 'SourceBiz',
        'switchTime' => 'SwitchTime',
        'targetMinorVersion' => 'TargetMinorVersion',
        'usedTime' => 'UsedTime',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
        'zoneIdSlave1' => 'ZoneIdSlave1',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowMajorVersionUpgrade) {
            $res['AllowMajorVersionUpgrade'] = $this->allowMajorVersionUpgrade;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }

        if (null !== $this->compressionMode) {
            $res['CompressionMode'] = $this->compressionMode;
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

        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }

        if (null !== $this->optimizedWrites) {
            $res['OptimizedWrites'] = $this->optimizedWrites;
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

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->readOnlyDBInstanceClass) {
            $res['ReadOnlyDBInstanceClass'] = $this->readOnlyDBInstanceClass;
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
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
        if (isset($map['AllowMajorVersionUpgrade'])) {
            $model->allowMajorVersionUpgrade = $map['AllowMajorVersionUpgrade'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }

        if (isset($map['CompressionMode'])) {
            $model->compressionMode = $map['CompressionMode'];
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

        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }

        if (isset($map['OptimizedWrites'])) {
            $model->optimizedWrites = $map['OptimizedWrites'];
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

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['ReadOnlyDBInstanceClass'])) {
            $model->readOnlyDBInstanceClass = $map['ReadOnlyDBInstanceClass'];
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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }

        return $model;
    }
}
