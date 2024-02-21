<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeBatchRequest extends Model
{
    /**
     * @description The username of the account. The username must meet the following requirements:
     * > - The username and password are required to be set only when you apply for an endpoint for the shard node for the first time.
     * @example ceshi
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the account. The password must meet the following requirements:
     * - The password contains at least three of the following character types: uppercase letters, lowercase letters, digits, and specific special characters.
     * - These special characters include ! @ # $ % ^ & * ( ) _ + - =
     * > The account password of the shard node cannot be reset.
     * @example 123+abc
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     * - **true**: enables automatic payment. Make sure that you have sufficient balance within your account.
     * - **false**: disables automatic payment. In this case, you must manually pay for the instance. You can perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner of the page, choose **Expenses** > **Orders**. On the Orders page, find the order and complete the payment.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The business information.
     *
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to use coupons. Default value: null. Valid values:
     *
     *   **default** or **null**: uses coupons.
     *   **youhuiquan_promotion_option_id_for_blank**: does not use coupons.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The ID of the instance for which you want to add nodes.
     *
     * @example dds-bp18b0934e70****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The source of the request. Valid values:
     * - **OpenApi**: ApsaraDB for MongoDB API
     * - **mongo_buy**: ApsaraDB for MongoDB console
     * @example OpenApi
     *
     * @var string
     */
    public $fromApp;

    /**
     * @description The specifications of the mongos or shard node that you want to add. For more information, see [Instance types](~~57141~~).
     *
     * > Up to 32 mongos or shard nodes are supported for each sharded cluster instance.
     * @example {"Shards":[{"DBInstanceClass":"mdb.shard.4x.large.d","Storage":20}]}
     *
     * @var string
     */
    public $nodesInfo;

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
     * @description Specifies whether to apply for an endpoint for the shard node. Default value: false. Valid values:
     * - **true**: applies for an endpoint for the shard node.
     * - **false**: does not apply for an endpoint for the shard node.
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
        'fromApp'              => 'FromApp',
        'nodesInfo'            => 'NodesInfo',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->nodesInfo) {
            $res['NodesInfo'] = $this->nodesInfo;
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
        if (null !== $this->shardDirect) {
            $res['ShardDirect'] = $this->shardDirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeBatchRequest
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
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['NodesInfo'])) {
            $model->nodesInfo = $map['NodesInfo'];
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
        if (isset($map['ShardDirect'])) {
            $model->shardDirect = $map['ShardDirect'];
        }

        return $model;
    }
}
