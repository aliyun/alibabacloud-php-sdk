<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. Default value: true. Valid values:
     *
     *   **true**: enables auto-renewal.
     *   **false**: disables auto-renewal. If you set this parameter to **false**, the instance must be manually renewed before it expires. For more information, see [Renew an instance](~~26352~~).
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the promotional event or business information.
     *
     * @example 000000001
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
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
     * @description The time when to change the configurations. Default value: Immediately. Valid values:
     *
     *   **Immediately**: The configurations are immediately changed.
     *   **MaintainTime**: The configurations are changed within the maintenance window. You can call the [ModifyInstanceMaintainTime](~~61000~~) operation to change the maintenance window.
     *
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceTrans;

    /**
     * @description Specifies whether to forcefully change the configurations of the instance. Default value: true. Valid values:
     *
     *   **false**: The system does not forcefully change the configurations.
     *   **true**: The system forcefully changes the configurations.
     *
     * @example true
     *
     * @var bool
     */
    public $forceUpgrade;

    /**
     * @description The new instance type. You can call the [DescribeAvailableResource](~~120580~~) operation to query the instance types available for configuration change within the zone to which the instance belongs.
     *
     * >  For more information about the instance types, see [Overview](~~26350~~).
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance. You can call the [DescribeInstances](~~60933~~) operation to query the ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The major version to which you want to upgrade. When you change the configurations of an instance, you can upgrade the major version of the instance by setting this parameter. Valid values: **4.0** and **5.0**.
     *
     * @example 5.0
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @description The change type. This parameter is required when you change the configurations of a subscription instance. Default value: UPGRADE. Valid values:
     *
     *   **UPGRADE**: upgrades the configurations of a subscription instance.
     *   **DOWNGRADE**: downgrades the configurations of a subscription instance.
     *
     * > *   To downgrade a subscription instance, you must set this parameter to **DOWNGRADE**.
     * > *   If the price of an instance increases after its configurations are changed, the instance is upgraded. If the price decreases, the instance is downgraded. For example, the price of an 8 GB read/write splitting instance with five read replicas is higher than that of a 16 GB cluster instance. If you want to change a 16 GB cluster instance to an 8 GB read/write splitting instance with five read replicas, you must upgrade the instance.
     * @example DOWNGRADE
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
     * @description The number of read-only nodes. This parameter is available only for read/write splitting instances that use cloud disks. Valid values: 1 to 5.
     *
     * @example 5
     *
     * @var int
     */
    public $readOnlyCount;

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
     * @description The number of shards. This parameter is available only for cluster instances that use cloud disks.
     *
     * @example 8
     *
     * @var int
     */
    public $shardCount;

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
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'couponNo'             => 'CouponNo',
        'effectiveTime'        => 'EffectiveTime',
        'forceTrans'           => 'ForceTrans',
        'forceUpgrade'         => 'ForceUpgrade',
        'instanceClass'        => 'InstanceClass',
        'instanceId'           => 'InstanceId',
        'majorVersion'         => 'MajorVersion',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'readOnlyCount'        => 'ReadOnlyCount',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'shardCount'           => 'ShardCount',
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
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->forceTrans) {
            $res['ForceTrans'] = $this->forceTrans;
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
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
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
        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
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
        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceSpecRequest
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
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ForceTrans'])) {
            $model->forceTrans = $map['ForceTrans'];
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
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
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
        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
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
        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }

        return $model;
    }
}
