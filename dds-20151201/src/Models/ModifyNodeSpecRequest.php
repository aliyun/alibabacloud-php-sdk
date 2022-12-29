<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodeSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     *
     *   **true**: enables automatic payment. Make sure that you have sufficient balance within your account.
     *   **false**: disables automatic payment. In this case, you must manually pay for the instance.
     *
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
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
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
     * @description The ID of the instance.
     *
     * @example dds-bp1c0b990184****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The time when the changed configurations take effect. Default value: Immediately. Valid values:
     *
     *   **Immediately**: The new configurations immediately take effect
     *   **MaintainTime**: The new configurations take effect during the maintenance window of the instance.
     *
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The source of the request. Valid values:
     *
     *   **OpenApi**: the ApsaraDB for MongoDB API
     *   **mongo_buy**: the ApsaraDB for MongoDB console
     *
     * @example OpenApi
     *
     * @var string
     */
    public $fromApp;

    /**
     * @description The instance type of the shard or mongos node. For more information, see [Instance types](~~57141~~).
     *
     * @example dds.mongos.standard
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The ID of the shard or mongos node in the sharded cluster instance. You can call the [DescribeDBInstanceAttribute](~~62010~~) operation to query the node ID.
     *
     * >  If you set this parameter to the ID of a shard node, you must also specify the **NodeStorage** parameter.
     * @example s-bp143e1b1637****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The storage capacity of the shard node. Unit: GB.
     *
     *   Valid values are **10** to **2000** if the instance uses local SSDs.
     *   Valid values are **20** to **16000** if the instance uses enhanced SSDs (ESSDs) at PL1.
     *
     * >  The value must be a multiple of 10.
     * @example 20
     *
     * @var int
     */
    public $nodeStorage;

    /**
     * @description The order type. Valid values:
     *
     *   **UPGRADE**
     *   **DOWNGRADE**
     *
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
     * @description The number of read-only nodes in the shard node.
     *
     * Valid values: **0** to **5**. The value must be an integer. Default value: **0**.
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The execution time. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2022-01-05T03:18:53Z
     *
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'couponNo'             => 'CouponNo',
        'DBInstanceId'         => 'DBInstanceId',
        'effectiveTime'        => 'EffectiveTime',
        'fromApp'              => 'FromApp',
        'nodeClass'            => 'NodeClass',
        'nodeId'               => 'NodeId',
        'nodeStorage'          => 'NodeStorage',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'readonlyReplicas'     => 'ReadonlyReplicas',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'switchTime'           => 'SwitchTime',
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
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodeSpecRequest
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
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
