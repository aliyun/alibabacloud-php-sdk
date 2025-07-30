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
     * @description The storage capacity of the instance. Unit: MB. This parameter is used only to query Redis Open-Source Edition instances that are deployed in classic mode. We recommend that you use the **InstanceClass** parameter to specify an exact instance type.
     *
     * >  If you specify the **InstanceClass** parameter, you do not need to specify the Capacity parameter.
     *
     * @example 1024
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method. Valid values:
     *
     *   **PostPaid** (default): pay-as-you-go
     *   **PrePaid**: subscription
     *
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
     * @description The engine version of the instance. Valid values: **2.8**, **4.0**, and **5.0**.
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Specifies whether to forcefully change the configurations of the instance. Valid values:
     *
     *   **false**: forcefully changes the configurations.
     *   **true** (default): does not forcefully change the configurations.
     *
     * @example true
     *
     * @var bool
     */
    public $forceUpgrade;

    /**
     * @description The instance type.**** **To view the instance type, perform the following steps:**
     *
     * 1.  In the [Instance specifications](https://help.aliyun.com/document_detail/26350.html) topic, click the link in the **References for instance specifications** column corresponding to the instance type that you want to view.
     * 2.  In the instance type table of the specification documentation, find the instance type in the **InstanceClass** column.
     *
     * >  If you want to query new instances, in addition to key parameters, you must also specify at least the following parameters:
     *
     *   To query a classic instance, specify this parameter.
     *
     *   To query a cloud-native standard instance, specify this parameter.
     *
     *   To query a cloud-native cluster instance, specify this parameter and the **ShardCount** parameter.
     *
     *   To query a cloud-native read/write splitting instance, specify this parameter and the **Instances** parameter.
     *
     *   To query multiple instances of different specifications or to query a Tair ESSD-based instance that has a custom storage type and storage capacity, specify the Instances parameter. In this case, you do not need to specify the InstanceClass parameter.
     *
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The instance ID.
     *
     * >  This parameter is required when the **OrderType** parameter is set to **UPGRADE** or **RENEW**.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description If you want to query cloud-native read/write splitting instances, Tair ESSD-based instances, or instances of different specifications, you must specify this parameter as a JSON string. For more information, see the **Additional description of the Instances parameter** section.
     *
     * @example Instances=[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-b","InstanceClass": "redis.master.small.default","Period": "1","Quantity": "1","Capacity": "4096"}]
     *
     * @var string
     */
    public $instances;

    /**
     * @description The node type. Valid values:
     *
     *   **STAND_ALONE**: standalone
     *   **MASTER_SLAVE** (default): high availability (master-replica)
     *
     * @example MASTER_SLAVE
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description Specifies whether to return parameters related to the order. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example true
     *
     * @var string
     */
    public $orderParamOut;

    /**
     * @description The order type. Valid values:
     *
     *   **BUY**: specifies the orders that are used to purchase instances.
     *   **UPGRADE**: specifies the orders that are used to change the configurations of instances.
     *   **RENEW**: specifies the orders that are used to renew instances.
     *   **CONVERT**: specifies the orders that are used to change the billing methods of instances.
     *
     * This parameter is required.
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
     * @description The subscription duration. Unit: month. Valid values: **1**, 2, 3, 4, 5, 6, 7, 8, **9**, **12**, **24**, and **36**.
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The number of instances that you want to purchase. Valid values: **1** to **30**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/473763.html) operation to query the region ID.
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
     * @description The number of data shards in the cloud-native cluster instance.
     *
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The zone ID. You can call the [DescribeZones](https://help.aliyun.com/document_detail/473764.html) operation to query the zone ID.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'businessInfo' => 'BusinessInfo',
        'capacity' => 'Capacity',
        'chargeType' => 'ChargeType',
        'couponNo' => 'CouponNo',
        'engineVersion' => 'EngineVersion',
        'forceUpgrade' => 'ForceUpgrade',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instances' => 'Instances',
        'nodeType' => 'NodeType',
        'orderParamOut' => 'OrderParamOut',
        'orderType' => 'OrderType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'quantity' => 'Quantity',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'shardCount' => 'ShardCount',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
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
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
