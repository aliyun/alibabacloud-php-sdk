<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var bool
     */
    public $forceTrans;

    /**
     * @var bool
     */
    public $forceUpgrade;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $readOnlyCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicaCount;

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
    public $securityToken;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var int
     */
    public $slaveReadOnlyCount;

    /**
     * @var int
     */
    public $slaveReplicaCount;

    /**
     * @var string
     */
    public $sourceBiz;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'businessInfo' => 'BusinessInfo',
        'clientToken' => 'ClientToken',
        'couponNo' => 'CouponNo',
        'effectiveTime' => 'EffectiveTime',
        'forceTrans' => 'ForceTrans',
        'forceUpgrade' => 'ForceUpgrade',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'majorVersion' => 'MajorVersion',
        'nodeType' => 'NodeType',
        'orderType' => 'OrderType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'readOnlyCount' => 'ReadOnlyCount',
        'regionId' => 'RegionId',
        'replicaCount' => 'ReplicaCount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'shardCount' => 'ShardCount',
        'slaveReadOnlyCount' => 'SlaveReadOnlyCount',
        'slaveReplicaCount' => 'SlaveReplicaCount',
        'sourceBiz' => 'SourceBiz',
        'storage' => 'Storage',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->forceTrans) {
            $res['ForceTrans'] = $this->forceTrans;
        }

        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->slaveReadOnlyCount) {
            $res['SlaveReadOnlyCount'] = $this->slaveReadOnlyCount;
        }

        if (null !== $this->slaveReplicaCount) {
            $res['SlaveReplicaCount'] = $this->slaveReplicaCount;
        }

        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ForceTrans'])) {
            $model->forceTrans = $map['ForceTrans'];
        }

        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['SlaveReadOnlyCount'])) {
            $model->slaveReadOnlyCount = $map['SlaveReadOnlyCount'];
        }

        if (isset($map['SlaveReplicaCount'])) {
            $model->slaveReplicaCount = $map['SlaveReplicaCount'];
        }

        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
