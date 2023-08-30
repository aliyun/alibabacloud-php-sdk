<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description The extended information such as the promotional event ID and business information.
     *
     * @example 000000000000
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The storage capacity of the instance. Unit: MB. You must specify one of the **InstanceClass** and **Capacity** parameters to specify the instance type. We recommend that you use **InstanceClass** to specify the instance type.
     *
     * @example 1024
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PostPaid**: pay-as-you-go
     *   **PrePaid**: subscription.
     *
     * > The default value is **PostPaid**.
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The coupon code. Default value: youhuiquan_promotion_option_id_for_blank. This value indicates that no coupon code is available.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description Specifies whether to forcefully change the configurations of the instance. Valid values:
     *
     *   **false**: forcefully changes the configurations.
     *   **true**: does not forcefully change the configurations.
     *
     * > The default value is **true**.
     * @example true
     *
     * @var bool
     */
    public $forceUpgrade;

    /**
     * @description The instance type of the instance. You must specify one of the InstanceClass and Capacity parameters to specify the instance type. We recommend that you use InstanceClass to specify the instance type.
     *
     * To query the instance type, perform the following steps:
     *
     * 1.  In the [Overview](~~26350~~) topic, click the link in the **Reference** column corresponding to the instance type that you want to view.
     * 2.  In the instance type table of the page that appears, find the instance type in the **InstanceClass** column.
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
     * @description A JSON string that contains multiple instances. For more information, see [Description of the Instances parameter in the DescribePrice API operation](~~161811~~).
     *
     * @example Instances=[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-b","InstanceClass": "redis.master.small.default","Period": "1","Quantity": "1","Capacity": "4096"}]
     *
     * @var string
     */
    public $instances;

    /**
     * @description The node type. Set the value to MASTER_SLAVE. This value indicates that the node type is master-replica.
     *
     * @example MASTER_SLAVE
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description Specifies whether to return parameters related to the order. Valid values:
     *
     *   **false**: does not return parameters related to the order.
     *   **true**: returns parameters related to the order.
     *
     * > The default value is **false**.
     * @example true
     *
     * @var string
     */
    public $orderParamOut;

    /**
     * @description The order type. Valid values:
     *
     *   **BUY**: The order is used to purchase instances.
     *   **UPGRADE**: The order is used to change the configurations of instances.
     *   **RENEW**: The order is used to renew instances.
     *   **CONVERT**: The order is used to change the billing methods of instances.
     *
     * @example BUY
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
     * @description The subscription duration. Unit: months. Valid values: **1**, 2, 3, 4, 5, 6, 7, 8, **9**, **12**, **24**, and **36**.
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The number of instances that you want to purchase. Valid values: **1** to **30**.
     *
     * > The default value is **1**.
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61012~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
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
    public $securityToken;

    /**
     * @description The zone ID of the instance. You can call the [DescribeZones](~~94527~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'businessInfo'         => 'BusinessInfo',
        'capacity'             => 'Capacity',
        'chargeType'           => 'ChargeType',
        'couponNo'             => 'CouponNo',
        'forceUpgrade'         => 'ForceUpgrade',
        'instanceClass'        => 'InstanceClass',
        'instanceId'           => 'InstanceId',
        'instances'            => 'Instances',
        'nodeType'             => 'NodeType',
        'orderParamOut'        => 'OrderParamOut',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'quantity'             => 'Quantity',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
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
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->orderParamOut) {
            $res['OrderParamOut'] = $this->orderParamOut;
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
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
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
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OrderParamOut'])) {
            $model->orderParamOut = $map['OrderParamOut'];
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
