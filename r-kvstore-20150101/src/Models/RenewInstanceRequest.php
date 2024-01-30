<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     *
     *   **true**: enables automatic payment.
     *   **false**: disables automatic payment.
     *
     * If you select false, you must choose **Expenses** > **Renewal Management** in the top navigation bar. In the left-side navigation pane, click **Orders**. Find the specified order and pay for it.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the promotional event or business information.
     *
     * @example 000000000
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The storage capacity of the instance. Unit: MB. When you renew the instance, you can specify this parameter to change specifications of the instance.
     *
     * > To change the specifications when you renew the instance, you must specify at least one of the `Capacity` and `InstanceClass` parameters.
     * @example 1024
     *
     * @var string
     */
    public $capacity;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token is case-sensitive. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example TF-ModifyInstanceSpec-1686645570-7dac7257-4a14-4811-939c-51a282f
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The source of the request. The default value is **OpenAPI** and cannot be changed.
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $fromApp;

    /**
     * @description The instance type code. For more information, see [Instance specifications overview](~~26350~~). When you renew the instance, you can specify this parameter to change specifications of the instance.
     *
     * > To change the specifications when you renew the instance, you must specify at least one of the `Capacity` and `InstanceClass` parameters.
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
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
     * @description The renewal period. Valid values: **1**, 2, 3, 4, 5, 6, 7, 8, **9**, **12**, **24**, and **36**. Unit: months.
     *
     * @example 6
     *
     * @var int
     */
    public $period;

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
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'businessInfo'         => 'BusinessInfo',
        'capacity'             => 'Capacity',
        'clientToken'          => 'ClientToken',
        'couponNo'             => 'CouponNo',
        'fromApp'              => 'FromApp',
        'instanceClass'        => 'InstanceClass',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
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
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
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
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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

        return $model;
    }
}
