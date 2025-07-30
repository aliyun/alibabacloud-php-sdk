<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true** (default): enables automatic payment.
     *   **false**: disables automatic payment. If you set this parameter to **false**, the instance must be manually renewed before it expires. For more information, see [Renew an instance](https://help.aliyun.com/document_detail/26352.html).
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the promotional event or the business information.
     *
     * @example 000000001
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
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
     * @description The time when you want the configurations to be changed. Valid values:
     *
     *   **Immediately** (default): immediately changes the configurations.
     *   **MaintainTime**: changes the configurations within the maintenance window. You can call the [ModifyInstanceMaintainTime](https://help.aliyun.com/document_detail/473775.html) operation to change the maintenance window.
     *
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description Specifies whether to enable forced transmission during a configuration change. Valid values:
     *
     *   **false** (default): Before the configuration change, the system checks the minor version of the instance. If the minor version of the instance is outdated, an error is reported. You must update the minor version of the instance and try again.
     *   **true**: The system skips the version check and directly performs the configuration change.
     *
     * @example false
     *
     * @var bool
     */
    public $forceTrans;

    /**
     * @description Specifies whether to forcibly change the configurations. Valid values:
     *
     *   **false**: The system does not forcefully change the configurations.
     *   **true** (default): The system forcefully changes the configurations.
     *
     * @example true
     *
     * @var bool
     */
    public $forceUpgrade;

    /**
     * @description The new instance type. You can call the [DescribeAvailableResource](https://help.aliyun.com/document_detail/473765.html) operation to query the instance types available for configuration change within the zone to which the instance belongs.
     *
     * >  For more information about the instance types, see [Overview](https://help.aliyun.com/document_detail/26350.html).
     *
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The instance ID. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/473778.html) operation to query the instance ID.
     *
     * This parameter is required.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The major version of the classic instance that you want to upgrade. Valid values: **2.8**, **4.0**, and **5.0**.
     *
     * >  The **InstanceClass** parameter is required when you upgrade the instance version. This parameter indicates that you can upgrade the instance version only when you update the instance specifications. If you only need to upgrade the instance version, call the [ModifyInstanceMajorVersion](https://help.aliyun.com/document_detail/473776.html) operation.
     *
     * @example 5.0
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @description The type of the node. Valid values:
     *
     *   **MASTER_SLAVE**: high availability (master-replica)
     *   **STAND_ALONE**: standalone
     *   **double**: master-replica
     *   **single**: standalone
     *
     * >  To create a cloud-native instance, set this parameter to **MASTER_SLAVE** or **STAND_ALONE**. To create a classic instance, set this parameter to **double** or **single**.
     *
     * @example MASTER_SLAVE
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The change type. This parameter is required when you change the configurations of a subscription instance. Valid values:
     *
     *   **UPGRADE** (default): upgrades the configurations of the subscription instance.
     *   **DOWNGRADE**: downgrades the configurations of the subscription instance.
     *
     * >
     *
     *   To downgrade a subscription instance, you must set this parameter to **DOWNGRADE**.
     *
     *   If the price of an instance increases after its configurations are changed, the instance is upgraded. If the price decreases, the instance is downgraded. For example, the price of an 8 GB read/write splitting instance with five read replicas is higher than that of a 16 GB cluster instance. If you want to change a 16 GB cluster instance to an 8 GB read/write splitting instance with five read replicas, you must upgrade the instance.
     *
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
     * @description The number of read replicas in the primary zone. Valid values: 0 to 5. This parameter applies only to the following scenarios:
     *
     *   If the instance is a cloud-native standard instance, you can set this parameter to a value greater than 0 to enable the read/write splitting architecture.
     *   If the instance is a cloud-native read/write splitting instance, you can use this parameter to customize the number of read replicas. You can also set this parameter to 0 to disable the read/write splitting architecture and switch the instance to the standard architecture.
     *
     * @example 5
     *
     * @var int
     */
    public $readOnlyCount;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/473763.html) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of replica nodes in the primary zone. This parameter is applicable only to cloud-native multi-replica cluster instances. Valid values: 1 to 4.
     *
     * >
     *
     *   The sum of the values of this parameter and the SlaveReplicaCount parameter cannot be greater than 4.
     *
     *   You can specify either ReplicaCount or ReadOnlyCount.
     *
     *   A master-replica instance cannot contain multiple replica nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $replicaCount;

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
     * @description The number of shards. This parameter is applicable only to cloud-native cluster instances.
     *
     * >
     *
     *   If you want to change a cloud-native cluster instance to a standard instance, you must explicitly set the ShardCount parameter to 1 and specify the specifications of the master-replica instance.
     *
     *   To change a cloud-native standard instance to a cluster instance, you must explicitly set the ShardCount parameter to a value greater than 1 and specify the specifications of the cluster instance.
     *
     * @example 8
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The number of read replicas in the secondary zone when you create a read/write splitting instance that is deployed across multiple zones. Valid values: 1 to 9. The sum of the values of this parameter and the ReadOnlyCount parameter cannot be greater than 9.
     *
     * @example 2
     *
     * @var int
     */
    public $slaveReadOnlyCount;

    /**
     * @description The number of replica nodes in the secondary zone when you create a cloud-native multi-replica cluster instance that is deployed across multiple zones. The sum of the values of this parameter and the ReplicaCount parameter cannot be greater than 4.
     *
     * >  When you create a cloud-native multi-replica cluster instance that is deployed across multiple zones, you must specify both SlaveReplicaCount and SecondaryZoneId.
     *
     * @example 1
     *
     * @var int
     */
    public $slaveReplicaCount;

    /**
     * @description The source of the operation. This parameter is used only for internal maintenance. You do not need to specify this parameter.
     *
     * @example SDK
     *
     * @var string
     */
    public $sourceBiz;

    /**
     * @description The storage capacity of the ESSD/SSD-based instance. The valid values vary based on the instance type. For more information, see [ESSD/SSD-based instances](https://help.aliyun.com/document_detail/2527111.html).
     *
     * >  This parameter is required only when you set the **InstanceType** parameter to **tair_essd** to create an ESSD-based instance. If you create a Tair **SSD**-based instance, the Storage parameter is automatically specified based on predefined specifications. You do not need to specify this parameter.
     *
     * @example 60
     *
     * @var int
     */
    public $storage;

    /**
     * @description The storage type. Valid values: **essd_pl1**, **essd_pl2**, and **essd_pl3**.
     *
     * >  This parameter is required only when you set the **InstanceType** parameter to **tair_essd** to create an ESSD-based instance.
     *
     * @example essd_pl1
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'businessInfo' => 'BusinessInfo',
        'clientToken' => 'ClientToken',
        'couponNo' => 'CouponNo',
        'effectiveTime' => 'EffectiveTime',
        'forceTrans' => 'ForceTrans',
        'forceUpgrade' => 'ForceUpgrade',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'majorVersion' => 'MajorVersion',
        'nodeType' => 'NodeType',
        'orderType' => 'OrderType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'readOnlyCount' => 'ReadOnlyCount',
        'regionId' => 'RegionId',
        'replicaCount' => 'ReplicaCount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'shardCount' => 'ShardCount',
        'slaveReadOnlyCount' => 'SlaveReadOnlyCount',
        'slaveReplicaCount' => 'SlaveReplicaCount',
        'sourceBiz' => 'SourceBiz',
        'storage' => 'Storage',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

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
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
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
        if (null !== $this->slaveReadOnlyCount) {
            $res['SlaveReadOnlyCount'] = $this->slaveReadOnlyCount;
        }
        if (null !== $this->slaveReplicaCount) {
            $res['SlaveReplicaCount'] = $this->slaveReplicaCount;
        }
        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
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
        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
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
        if (isset($map['SlaveReadOnlyCount'])) {
            $model->slaveReadOnlyCount = $map['SlaveReadOnlyCount'];
        }
        if (isset($map['SlaveReplicaCount'])) {
            $model->slaveReplicaCount = $map['SlaveReplicaCount'];
        }
        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
