<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class RenewAdditionalBandwidthRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     *
     *   **true**: enables automatic payment.
     *   **false**: disables automatic payment. If automatic payment is disabled, you must perform the following steps to complete the payment in the ApsaraDB for Redis console: In the top navigation bar, choose **Expenses** > **Renewal Management**. In the left-side navigation pane, click **Orders**. On the **Orders** page, find the order and complete the payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the coupon.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The ID of the instance. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/60933.html) operation to query the ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The validity period of the bandwidth that you purchase. Unit: days. Valid values: **1**, **2**, **3**, **7**, **14**, **30**, **60**, **90**, **180**, **365**, **730**, **1095**, and **1825**.
     *
     * This parameter is required.
     * @example 30
     *
     * @var string
     */
    public $orderTimeLength;

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
     * @description The source of the operation. This parameter is used only for internal maintenance. You do not need to specify this parameter.
     *
     * @example SDK
     *
     * @var string
     */
    public $sourceBiz;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'couponNo'             => 'CouponNo',
        'instanceId'           => 'InstanceId',
        'orderTimeLength'      => 'OrderTimeLength',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'sourceBiz'            => 'SourceBiz',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderTimeLength) {
            $res['OrderTimeLength'] = $this->orderTimeLength;
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
        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewAdditionalBandwidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderTimeLength'])) {
            $model->orderTimeLength = $map['OrderTimeLength'];
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
        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }

        return $model;
    }
}
