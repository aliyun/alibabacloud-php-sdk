<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description 指定新创建实例的 aof 参数配置。
     *
     * > 改参数适用于创建本地盘实例，云盘实例暂不支持指定 aof 参数。
     * @example yes
     *
     * @var string
     */
    public $appendonly;

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
     * @example false
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The ID of the backup file of the original instance. If you want to create an instance based on a backup file of a specified instance, you can specify this parameter after you specify the **SrcDBInstanceId** parameter. Then, the system creates an instance based on the backup file that is specified by this parameter. You can call the [DescribeBackups](~~61081~~) operation to query the IDs of backup files.
     *
     * > After you specify the **SrcDBInstanceId** parameter, you must use the **BackupId** or **RestoreTime** parameter to specify the backup file.
     * @example 111111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the promotional event or business information.
     *
     * @example 000000000
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The storage capacity of the instance. Unit: MB.
     *
     * > You must specify at least one of the **Capacity** and **InstanceClass** parameters when you call this operation.
     * @example 16384
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method of the instance. Default value: PrePaid. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The ID of the dedicated cluster. This parameter is required if you create an instance in a dedicated cluster.
     *
     * @example dhg-uv4fnk6r7zff****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description Specifies whether to perform a dry run. Default value: false. Valid values:
     *
     *   **true**: performs a dry run and does not create the instance. The system prechecks the request parameters, request format, service limits, and available resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**: performs a dry run and sends the request. If the request passes the dry run, the instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The database engine version of the instance. Valid values: **4.0**, **5.0**, **6.0**, and **7.0**.
     *
     * > The default value is **5.0**.
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Specifies whether to use the new instance as the first child instance of the distributed instance. Default value: false. Valid values:
     *
     *   **true**: uses the new instance as the first child instance.
     *   **false**: does not use the new instance as the first child instance.
     *
     * >
     *
     *   If you want to create an ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance that runs Redis 5.0, you must set this parameter to **true**.
     *
     *   This parameter is available only on the China site (aliyun.com).
     *
     * @example false
     *
     * @var bool
     */
    public $globalInstance;

    /**
     * @description The ID of the distributed instance. This parameter is available only on the China site (aliyun.com).
     *
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description The global IP whitelist template for the instance. Multiple IP whitelist templates should be separated by English commas (,) and cannot be duplicated.
     *
     * @example g-zsldxfiwjmti0kcm****
     *
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @description The instance type of the instance. Example: redis.master.small.default. A redis.master.small.default instance is a 1 GB standard master-replica instance of the Community Edition that uses local disks. For more information, see [Overview](~~26350~~).
     *
     * > You must specify at least one of the **Capacity** and **InstanceClass** parameters when you call this operation.
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The name of the instance. The name must be 2 to 80 characters in length and must start with a letter. It cannot contain spaces or specific special characters. These special characters include `@ / : = " < > { [ ] }`
     *
     * @example apitest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The category of the instance. Default value: Redis. Valid values:
     *
     *   **Redis**
     *   **Memcache**
     *
     * @example Redis
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The network type of the instance. Default value: VPC. Valid values:
     *
     *   **VPC**
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
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
     * @description The password that is used to connect to the instance. The password must be 8 to 32 characters in length and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and specific special characters. These special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * @example Pass!123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The subscription duration. Valid values: **1**, 2, 3, 4, 5, 6, 7, 8, **9**, **12**, **24**,**36**, and **60**. Unit: months.
     *
     * > This parameter is available and required only if the **ChargeType** parameter is set to **PrePaid**.
     * @example 12
     *
     * @var string
     */
    public $period;

    /**
     * @description The port number that is used to connect to the instance. Valid values: **1024** to **65535**. Default value: **6379**.
     *
     * @example 6379
     *
     * @var string
     */
    public $port;

    /**
     * @description The private IP address of the instance.
     *
     * > The private IP address must be available within the CIDR block of the vSwitch to which to connect the instance.
     * @example 172.16.0.***
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The number of read-only nodes in the instance. This parameter is available only if you create a read/write splitting instance that uses cloud disks. Valid values: 1 to 5.
     *
     * @example 5
     *
     * @var int
     */
    public $readOnlyCount;

    /**
     * @description The ID of the region where you want to create the instance. You can call the [DescribeRegions](~~61012~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-resourcegroupid1
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
     * @description The point in time at which the specified original instance is backed up. The point in time must be within the retention period of backup files of the original instance. If you want to create an instance based on a backup file of a specified instance, you can set this parameter to specify a point in time after you set the **SrcDBInstanceId** parameter. Then, the system creates an instance based on the backup file that was created at the specified point in time for the original instance. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > After you specify the **SrcDBInstanceId** parameter, you must use the **BackupId** or **RestoreTime** parameter to specify the backup file.
     * @example 2019-06-19T16:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The secondary zone ID of the instance. You can call the [DescribeZones](~~94527~~) operation to query the most recent zone list.
     *
     * > If you specify this parameter, the master node and replica node of the instance can be deployed in different zones and disaster recovery is implemented across zones. The instance can withstand failures in data centers.
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
     * @description The number of data shards. This parameter is available only if you create a cluster instance that uses cloud disks. You can use this parameter to specify a custom number of data shards.
     *
     * @example 4
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The ID of the original instance. If you want to create an instance based on a backup file of a specified instance, you can specify this parameter and use the **BackupId** or **RestoreTime** parameter to specify the backup file.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @description The tags of the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the token is unique among different requests. The token is case-sensitive. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the vSwitch to which you want the instance to connect.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The primary zone ID of the instance. You can call the [DescribeRegions](~~61012~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appendonly'             => 'Appendonly',
        'autoRenew'              => 'AutoRenew',
        'autoRenewPeriod'        => 'AutoRenewPeriod',
        'autoUseCoupon'          => 'AutoUseCoupon',
        'backupId'               => 'BackupId',
        'businessInfo'           => 'BusinessInfo',
        'capacity'               => 'Capacity',
        'chargeType'             => 'ChargeType',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'couponNo'               => 'CouponNo',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'dryRun'                 => 'DryRun',
        'engineVersion'          => 'EngineVersion',
        'globalInstance'         => 'GlobalInstance',
        'globalInstanceId'       => 'GlobalInstanceId',
        'globalSecurityGroupIds' => 'GlobalSecurityGroupIds',
        'instanceClass'          => 'InstanceClass',
        'instanceName'           => 'InstanceName',
        'instanceType'           => 'InstanceType',
        'networkType'            => 'NetworkType',
        'nodeType'               => 'NodeType',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'password'               => 'Password',
        'period'                 => 'Period',
        'port'                   => 'Port',
        'privateIpAddress'       => 'PrivateIpAddress',
        'readOnlyCount'          => 'ReadOnlyCount',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'restoreTime'            => 'RestoreTime',
        'secondaryZoneId'        => 'SecondaryZoneId',
        'securityToken'          => 'SecurityToken',
        'shardCount'             => 'ShardCount',
        'srcDBInstanceId'        => 'SrcDBInstanceId',
        'tag'                    => 'Tag',
        'token'                  => 'Token',
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
        if (null !== $this->appendonly) {
            $res['Appendonly'] = $this->appendonly;
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
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->globalInstance) {
            $res['GlobalInstance'] = $this->globalInstance;
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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
        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Appendonly'])) {
            $model->appendonly = $map['Appendonly'];
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GlobalInstance'])) {
            $model->globalInstance = $map['GlobalInstance'];
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
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
        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
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
