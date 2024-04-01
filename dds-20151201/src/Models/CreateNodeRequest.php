<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeRequest extends Model
{
    /**
     * @description The username of the account. The username must meet the following requirements:
     *
     *   The username starts with a lowercase letter.
     *   The username can contain lowercase letters, digits, and underscores (\_).
     *   The username must be 4 to 16 characters in length.
     *
     * >
     *
     *   Keywords cannot be used as accounts.
     *
     *   This account is granted the read-only permissions.
     *   The username and password need to be set if you apply for an endpoint for the shard node for the first time.
     *
     * @example ceshi
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the account. The password must meet the following requirements:
     *
     *   The password contains at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   These special characters include ! @ # $ % ^ & \* ( ) \_ + - =
     *   The password is 8 to 32 characters in length.
     *
     * >  ApsaraDB for MongoDB does not allow you to reset the password of an account.
     * @example 123+abc
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true** (default): enables automatic payment. Make sure that you have sufficient balance within your account.
     *   **false**: disables automatic payment. You can perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner of the page, choose **Expenses** > Orders. On the **Orders** page, find the order that you want to pay for and complete the payment.
     *
     * >  This parameter is required only when the billing method of the instance is subscription.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The business information. This is an additional parameter.
     *
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The coupon code. Default value: **youhuiquan_promotion_option_id_for_blank**.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The ID of the sharded cluster instance.
     *
     * @example dds-bp11501cd7b5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The instance type of the shard or mongos node. For more information, see [Instance types](~~57141~~).
     *
     * @example dds.shard.mid
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The disk capacity of the node. Unit: GB.
     *
     * Valid values: **10** to **2000**. The value must be a multiple of 10.
     *
     * >  This parameter is required only when the NodeType parameter is set to **shard**.
     * @example 10
     *
     * @var int
     */
    public $nodeStorage;

    /**
     * @description The type of the node. Valid values:
     *
     *   **shard**: shard node
     *   **mongos**: mongos node
     *
     * @example shard
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of read-only nodes in the shard node.
     *
     * Valid values: **0**, 1, 2, 3, 4, and **5**. Default value: **0**.
     *
     * >  This parameter is available only for ApsaraDB for MongoDB instances that are purchased on the China site (aliyun.com).
     * @example 5
     *
     * @var int
     */
    public $readonlyReplicas;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to apply for an endpoint for the shard node. Valid values:
     *
     *   **true**: applies for an endpoint for the shard node.
     *   **false** (default): does not apply for an endpoint for the shard node.
     *
     * @example false
     *
     * @var bool
     */
    public $shardDirect;
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPassword'      => 'AccountPassword',
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'couponNo'             => 'CouponNo',
        'DBInstanceId'         => 'DBInstanceId',
        'nodeClass'            => 'NodeClass',
        'nodeStorage'          => 'NodeStorage',
        'nodeType'             => 'NodeType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'readonlyReplicas'     => 'ReadonlyReplicas',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'shardDirect'          => 'ShardDirect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
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
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->shardDirect) {
            $res['ShardDirect'] = $this->shardDirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
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
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ShardDirect'])) {
            $model->shardDirect = $map['ShardDirect'];
        }

        return $model;
    }
}
