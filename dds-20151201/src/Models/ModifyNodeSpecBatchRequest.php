<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyNodeSpecBatchRequest extends Model
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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $nodesInfo;

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
    public $regionId;

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
        'clientToken' => 'ClientToken',
        'couponNo' => 'CouponNo',
        'DBInstanceId' => 'DBInstanceId',
        'effectiveTime' => 'EffectiveTime',
        'nodesInfo' => 'NodesInfo',
        'orderType' => 'OrderType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->nodesInfo) {
            $res['NodesInfo'] = $this->nodesInfo;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['NodesInfo'])) {
            $model->nodesInfo = $map['NodesInfo'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
