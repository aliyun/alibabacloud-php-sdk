<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     *
     *   **true**: enables automatic payment. Make sure that your Alibaba Cloud account has a sufficient balance.
     *   **false**: disables automatic payment. You can perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner of the page, choose **Expenses** > **User Center**. In the left-side navigation pane, choose **Order Management** > **Order**. On the **Orders for Services** tab, find the order and pay for the order.
     *
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
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The instance type. For more information, see [Instance types](~~57141~~). You can also call the [DescribeAvailableResource](~~149719~~) operation to view instance types.
     *
     * >  You must specify at least one of the DBInstanceClass and **DBInstanceStorage** parameters.
     * @example dds.sn4.xlarge.1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example dds-bp1ea17b41ab****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the instance. Valid values: 10 to 3000. The value must be a multiple of 10. Unit: GB. The values that can be specified for this parameter are subject to the instance types. For more information, see [Instance types](~~57141~~).
     *
     * > * You must specify at least one of the DBInstanceStorage and **DBInstanceClass** parameters.
     * > * Storage capacity can be scaled down only for pay-as-you-go replica set instances. The new storage capacity you specify must be greater than the used storage capacity.
     * @example 50
     *
     * @var string
     */
    public $DBInstanceStorage;

    /**
     * @description The time when the changed configurations take effect. Default value: Immediately. Valid values:
     *
     *   **Immediately**: The configurations immediately take effect.
     *   **MaintainTime**: The configurations take effect during the maintenance window of the instance.
     *
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $extraParam;

    /**
     * @description The type of the modification. Valid values:
     *
     *   **UPGRADE**
     *   **DOWNGRADE**
     *
     * >  This parameter can be configured only when the billing method of the instance is subscription.
     * @example UPGRADE
     *
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
     * @description The number of read-only nodes. Valid values: **0** to **5**.
     *
     * If your instance has only **Classic Network** and **VPC** endpoints, you must apply for a public endpoint or release the classic network endpoint for the instance before you can change the **Read-only Nodes** value.
     *
     * >  You can go to the **Database Connections** page to view the types of networks that are enabled.
     * @example 1
     *
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @description The number of nodes in the instance.
     *
     *   Valid values of replica set instances: **3**, **5**, and **7**
     *   Valid values of standalone instances: **1**
     *
     * >  This parameter is not required for a serverless instance which is only available on the China site (aliyun.com).
     * @example 3
     *
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
    public $securityToken;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'couponNo'             => 'CouponNo',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceId'         => 'DBInstanceId',
        'DBInstanceStorage'    => 'DBInstanceStorage',
        'effectiveTime'        => 'EffectiveTime',
        'extraParam'           => 'ExtraParam',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'readonlyReplicas'     => 'ReadonlyReplicas',
        'replicationFactor'    => 'ReplicationFactor',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSpecRequest
     */
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
