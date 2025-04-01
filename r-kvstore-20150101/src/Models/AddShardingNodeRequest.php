<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class AddShardingNodeRequest extends Model
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
     * @var bool
     */
    public $forceTrans;

    /**
     * @var string
     */
    public $instanceId;

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
     * @var string
     */
    public $sourceBiz;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'businessInfo' => 'BusinessInfo',
        'couponNo' => 'CouponNo',
        'forceTrans' => 'ForceTrans',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'shardCount' => 'ShardCount',
        'sourceBiz' => 'SourceBiz',
        'vSwitchId' => 'VSwitchId',
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

        if (null !== $this->forceTrans) {
            $res['ForceTrans'] = $this->forceTrans;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['ForceTrans'])) {
            $model->forceTrans = $map['ForceTrans'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
