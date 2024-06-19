<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTairInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Set the value to **true**.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Default value: false. Valid values:
     *
     *   **true**: enables auto-renewal.
     *   **false**: disables auto-renewal.
     *
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The subscription duration that is supported by auto-renewal. Unit: months. Valid values: **1**, **2**, **3**, **6**, and **12**.
     *
     * > This parameter is required only if the **AutoRenew** parameter is set to **true**.
     * @example 3
     *
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @description Specifies whether to use a coupon. Default value: false. Valid values:
     *
     *   **true**: uses a coupon.
     *   **false**: does not use a coupon.
     *
     * @example true
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The ID of the backup set of the source instance. The system uses the data stored in the backup set to create an instance. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/61081.html) operation to query the backup set ID.
     *
     * @example 11111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the promotion event or the business information.
     *
     * @example 000000000
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The billing method of the instance. Default value: PrePaid. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the token is unique among different requests. The token is case-sensitive. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is supported for specific new cluster instances. You can query the backup set ID by calling the [DescribeClusterBackupList](https://help.aliyun.com/document_detail/2679158.html) operation.
     *
     *   If this parameter is supported, you can specify the backup set ID. In this case, you do not need to specify the **BackupId** parameter.
     *   If this parameter is not supported, set the BackupId parameter to the IDs of backup sets in all shards of the source instance, separated by commas (,). Example: "2158\\*\\*\\*\\*20,2158\\*\\*\\*\\*22".
     *
     * @example cb-hyxdof5x9kqb****
     *
     * @var string
     */
    public $clusterBackupId;

    /**
     * @description The coupon code.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description Specifies whether to perform a dry run. Default value: false. Valid values:
     *
     *   **true**: performs a dry run and does not create the instance. The system prechecks the request parameters, request format, service limits, and available resources. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**: performs a dry run and sends the request. If the request passes the dry run, the instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The engine version. Default value: **1.0**. The parameter value varies with the Tair instance type.
     *
     *   For Tair DRAM-based instances (tair_rdb) that are compatible with Redis 5.0 or 6.0, set this parameter to 5.0 or 6.0.
     *   For Tair persistent memory-optimized instances (tair_scm) that are compatible with Redis 6.0, set this parameter to 1.0.
     *   For Tair ESSD-based instances (tair_essd) that are compatible with Redis 4.0 or 6.0, set this parameter to 1.0 or 2.0.
     *
     * @example 1.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Specifies whether to use the created instance as a child instance of a distributed instance.
     *
     *   If you want the created instance to be used as the first child instance, enter **true**.
     *   If you want the created instance to be used as the second or third child instance, enter the ID of the distributed instance, such as gr-bp14rkqrhac\\*\\*\\*\\*.
     *   If you do not want the created instance to be used as a distributed instance, leave the parameter empty.
     *
     * >  If you want the created instance to be used as a distributed instance, the created instance must be a Tair DRAM-based instance.
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description The global IP whitelist template of the instance. Separate multiple IP whitelist templates with commas (,) and make sure that each IP whitelist template is unique.
     *
     * @example g-zsldxfiwjmti0kcm****
     *
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @description The instance type. For more information, see the following topics:
     *
     *   [DRAM-based instances](https://help.aliyun.com/document_detail/443844.html)
     *   [Persistent memory-optimized instances](https://help.aliyun.com/document_detail/443845.html)
     *   [ESSD-based instances](https://help.aliyun.com/document_detail/443846.html)
     *
     * This parameter is required.
     * @example tair.scm.standard.4m.32d
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The name of the instance. The name must meet the following requirements:
     *
     *   The name is 2 to 80 characters in length.
     *   The name starts with a letter and does not contain spaces or special characters. Special characters include `@ / : = " < > { [ ] }`
     *
     * @example apitest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **tair_rdb**: ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance
     *   **tair_scm**: ApsaraDB for Redis Enhanced Edition (Tair) persistent memory-optimized instance
     *   **tair_essd**: ApsaraDB for Redis Enhanced Edition (Tair) ESSD-based instance
     *
     * This parameter is required.
     * @example tair_scm
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the parameter template. The instance is created based on the parameters in the parameter template. The ID must be unique.
     *
     * @example g-50npzjcqb1ua6q6j****
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description The password that is used to connect to the instance. The password must meet the following requirements:
     *
     *   The password is 8 to 32 characters in length.
     *   The password contains at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * @example Pass!123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The subscription duration. Valid values: **1**, 2, 3, 4, 5, 6, 7, 8, **9**, **12**, **24**,**36**, and **60**. Unit: months.
     *
     * > This parameter is required only if you set the **ChargeType** parameter to **PrePaid**.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The port number of the instance. Valid values: **1024** to **65535**. Default value: **6379**.
     *
     * @example 6379
     *
     * @var int
     */
    public $port;

    /**
     * @description The private IP address of the instance.
     *
     * > The IP address must be within the CIDR block of the vSwitch to which you want the instance to connect. You can call the [DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html) operation of the VPC API to query the CIDR block information.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The number of read replicas in the primary zone. This parameter applies only to read/write splitting instances that use cloud disks. You can use this parameter to customize the number of read replicas. Valid values: 1 to 9.
     *
     * >  The sum of the values of this parameter and SlaveReadOnlyCount cannot be greater than 9.
     * @example 5
     *
     * @var int
     */
    public $readOnlyCount;

    /**
     * @var string
     */
    public $recoverConfigMode;

    /**
     * @description The ID of the region where you want to create the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61012.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which you want to assign the instance.
     *
     * >
     *
     *   You can query resource group IDs by using the ApsaraDB for Redis console or by calling the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation. For more information, see [View basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
     *
     *   Before you modify the resource group to which an instance belongs, you can call the [ListResources](https://help.aliyun.com/document_detail/158866.html) operation to view the current resource group of the instance.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description If data flashback is enabled for the source instance, you can use this parameter to specify a point in time within the backup retention period of the source instance. The system uses the backup data of the source instance at the point in time to create an instance. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2021-07-06T07:25:57Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The ID of the secondary zone. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61012.html) operation to query the ID of the secondary zone.
     *
     * > You cannot specify multiple zone IDs or set this parameter to a value that is the same as that of the ZoneId parameter.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The number of data nodes in the instance. Valid values:
     *
     *   **1** (default): You can create a [standard instance](https://help.aliyun.com/document_detail/52228.html) that contains only a single data node.
     *   **2** to **32**: You can create a [cluster instance](https://help.aliyun.com/document_detail/52228.html) that contains the specified number of data nodes.
     *
     * >  When the **InstanceType** parameter is set to **tair_rdb** or **tair_scm**, this parameter can be set to **2** to **32**. Only DRAM-based and persistent memory-optimized instances support the cluster architecture.
     * @example 1
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The data shard type of the instance. Default value: MASTER_SLAVE. Valid values:
     *
     *   **MASTER_SLAVE**: runs in a master-replica architecture that provides high availability.
     *   **STAND_ALONE**: runs in a standalone architecture. If the only node fails, the system creates a new instance and switches the workloads to the new instance. This may cause data loss. You can set this parameter to this value only if the instance uses the **single-zone** deployment type. If you set this parameter to this value, you cannot create cluster or read/write splitting instances.
     *
     * @example MASTER_SLAVE
     *
     * @var string
     */
    public $shardType;

    /**
     * @description The number of read replicas in the secondary zone when you create a multi-zone read/write splitting instance. The sum of the values of this parameter and ReadOnlyCount cannot be greater than 9.
     *
     * > When you create a multi-zone read/write splitting instance, you must specify both SlaveReadOnlyCount and SecondaryZoneId.
     * @example 1
     *
     * @var int
     */
    public $slaveReadOnlyCount;

    /**
     * @description If you want to create an instance based on the backup set of an existing instance, set this parameter to the ID of the source instance.
     *
     * >  Then, you can use the **BackupId**, **ClusterBackupId**, or **RestoreTime** parameter to specify the backup set that you want to use or the point in time. This parameter must be used in combination with one of the preceding three parameters.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @description The storage space of cloud disks. Valid values vary based on the instance specifications. For more information, see [ESSD-based instances](https://help.aliyun.com/document_detail/443846.html).
     *
     * > This parameter is available and required only if the **InstanceType** parameter is set to **tair_essd**.
     * @example 60
     *
     * @var int
     */
    public $storage;

    /**
     * @description The storage type of the instance. Set the value to **essd_pl1**.
     *
     * > This parameter is available only if the **InstanceType** parameter is set to **tair_essd**.
     * @example essd_pl1
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The tags to add to the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch that belongs to the VPC. You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/35739.html) operation to query the ID of the vSwitch.
     *
     * This parameter is required.
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC). You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/35739.html) operation to query the ID of the VPC.
     *
     * This parameter is required.
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The primary zone ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61012.html) operation to query the IDs of available zones.
     *
     * >  You can also set the SecondaryZoneId parameter to specify the secondary zone. The primary and secondary nodes will then be deployed in the specified primary and secondary zones to implement the master-replica zone-disaster recovery architecture. For example, you can set the ZoneId parameter to cn-hangzhou-h and the SecondaryZoneId parameter to cn-hangzhou-g.
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'                => 'AutoPay',
        'autoRenew'              => 'AutoRenew',
        'autoRenewPeriod'        => 'AutoRenewPeriod',
        'autoUseCoupon'          => 'AutoUseCoupon',
        'backupId'               => 'BackupId',
        'businessInfo'           => 'BusinessInfo',
        'chargeType'             => 'ChargeType',
        'clientToken'            => 'ClientToken',
        'clusterBackupId'        => 'ClusterBackupId',
        'couponNo'               => 'CouponNo',
        'dryRun'                 => 'DryRun',
        'engineVersion'          => 'EngineVersion',
        'globalInstanceId'       => 'GlobalInstanceId',
        'globalSecurityGroupIds' => 'GlobalSecurityGroupIds',
        'instanceClass'          => 'InstanceClass',
        'instanceName'           => 'InstanceName',
        'instanceType'           => 'InstanceType',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'paramGroupId'           => 'ParamGroupId',
        'password'               => 'Password',
        'period'                 => 'Period',
        'port'                   => 'Port',
        'privateIpAddress'       => 'PrivateIpAddress',
        'readOnlyCount'          => 'ReadOnlyCount',
        'recoverConfigMode'      => 'RecoverConfigMode',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'restoreTime'            => 'RestoreTime',
        'secondaryZoneId'        => 'SecondaryZoneId',
        'securityToken'          => 'SecurityToken',
        'shardCount'             => 'ShardCount',
        'shardType'              => 'ShardType',
        'slaveReadOnlyCount'     => 'SlaveReadOnlyCount',
        'srcDBInstanceId'        => 'SrcDBInstanceId',
        'storage'                => 'Storage',
        'storageType'            => 'StorageType',
        'tag'                    => 'Tag',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'zoneId'                 => 'ZoneId',
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
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterBackupId) {
            $res['ClusterBackupId'] = $this->clusterBackupId;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->globalSecurityGroupIds) {
            $res['GlobalSecurityGroupIds'] = $this->globalSecurityGroupIds;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
        }
        if (null !== $this->recoverConfigMode) {
            $res['RecoverConfigMode'] = $this->recoverConfigMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->shardType) {
            $res['ShardType'] = $this->shardType;
        }
        if (null !== $this->slaveReadOnlyCount) {
            $res['SlaveReadOnlyCount'] = $this->slaveReadOnlyCount;
        }
        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTairInstanceRequest
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
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterBackupId'])) {
            $model->clusterBackupId = $map['ClusterBackupId'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['GlobalSecurityGroupIds'])) {
            $model->globalSecurityGroupIds = $map['GlobalSecurityGroupIds'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
        }
        if (isset($map['RecoverConfigMode'])) {
            $model->recoverConfigMode = $map['RecoverConfigMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['ShardType'])) {
            $model->shardType = $map['ShardType'];
        }
        if (isset($map['SlaveReadOnlyCount'])) {
            $model->slaveReadOnlyCount = $map['SlaveReadOnlyCount'];
        }
        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
