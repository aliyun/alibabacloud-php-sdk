<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceSpecRequest extends Model
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
    public $couponNo;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $extraParam;

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
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @var string
     */
    public $replicationFactor;

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
    public $searchNodeClass;

    /**
     * @var int
     */
    public $searchNodeCount;

    /**
     * @var int
     */
    public $searchNodeStorage;

    /**
     * @var string
     */
    public $targetHiddenZoneId;

    /**
     * @var string
     */
    public $targetSecondaryZoneId;

    /**
     * @var string
     */
    public $targetVswitchId;

    /**
     * @var string
     */
    public $targetZoneId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'businessInfo' => 'BusinessInfo',
        'couponNo' => 'CouponNo',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'effectiveTime' => 'EffectiveTime',
        'extraParam' => 'ExtraParam',
        'orderType' => 'OrderType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'replicationFactor' => 'ReplicationFactor',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'searchNodeClass' => 'SearchNodeClass',
        'searchNodeCount' => 'SearchNodeCount',
        'searchNodeStorage' => 'SearchNodeStorage',
        'targetHiddenZoneId' => 'TargetHiddenZoneId',
        'targetSecondaryZoneId' => 'TargetSecondaryZoneId',
        'targetVswitchId' => 'TargetVswitchId',
        'targetZoneId' => 'TargetZoneId',
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

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
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

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->extraParam) {
            $res['ExtraParam'] = $this->extraParam;
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

        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }

        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->searchNodeClass) {
            $res['SearchNodeClass'] = $this->searchNodeClass;
        }

        if (null !== $this->searchNodeCount) {
            $res['SearchNodeCount'] = $this->searchNodeCount;
        }

        if (null !== $this->searchNodeStorage) {
            $res['SearchNodeStorage'] = $this->searchNodeStorage;
        }

        if (null !== $this->targetHiddenZoneId) {
            $res['TargetHiddenZoneId'] = $this->targetHiddenZoneId;
        }

        if (null !== $this->targetSecondaryZoneId) {
            $res['TargetSecondaryZoneId'] = $this->targetSecondaryZoneId;
        }

        if (null !== $this->targetVswitchId) {
            $res['TargetVswitchId'] = $this->targetVswitchId;
        }

        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
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

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
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

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ExtraParam'])) {
            $model->extraParam = $map['ExtraParam'];
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

        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }

        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SearchNodeClass'])) {
            $model->searchNodeClass = $map['SearchNodeClass'];
        }

        if (isset($map['SearchNodeCount'])) {
            $model->searchNodeCount = $map['SearchNodeCount'];
        }

        if (isset($map['SearchNodeStorage'])) {
            $model->searchNodeStorage = $map['SearchNodeStorage'];
        }

        if (isset($map['TargetHiddenZoneId'])) {
            $model->targetHiddenZoneId = $map['TargetHiddenZoneId'];
        }

        if (isset($map['TargetSecondaryZoneId'])) {
            $model->targetSecondaryZoneId = $map['TargetSecondaryZoneId'];
        }

        if (isset($map['TargetVswitchId'])) {
            $model->targetVswitchId = $map['TargetVswitchId'];
        }

        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }

        return $model;
    }
}
