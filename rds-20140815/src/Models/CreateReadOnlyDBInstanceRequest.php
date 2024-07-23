<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateReadOnlyDBInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateProxy;

    /**
     * @description Specifies whether to enable the automatic payment feature. Valid values:
     *
     * 1.  **true**: enables the feature. Make sure that your account balance is sufficient.
     * 2.  **false**: disables the feature. An unpaid order is generated.
     *
     * >  Default value: true. If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to complete the payment.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the auto-renewal feature for the read-only instance. If you set the PayType parameter to Prepaid, you must also specify this parameter. Valid values:
     *
     *   **true**: enables the feature.
     *   **false**: disables the feature.
     *
     * > * If you set the Period parameter to Month, the auto-renewal cycle is one month.
     * > * If you set the Period parameter to Year, the auto-renewal cycle is one year.
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var string
     */
    public $bpeEnabled;

    /**
     * @description An invalid parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability** (default): RDS High-availability Edition
     *   **AlwaysOn**: RDS Cluster Edition
     *
     * >  The read-only instances of the primary instance that run PostgreSQL and use cloud disks run RDS Basic Edition. Therefore, set this parameter to **Basic**.
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOC****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance type of the read-only instance. For more information, see [Read-only instance types](https://help.aliyun.com/document_detail/145759.html). We recommend that you specify an instance type whose specifications are higher than or equal to the specifications of the instance type of the primary instance. If the specifications of the read-only instance are lower than the specifications of the primary instance, the read-only instance may encounter issues such as high latency and heavy load.
     *
     * This parameter is required.
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The description of the read-only instance. The description must be 2 to 256 characters in length and can contain letters, digits, underscores (_), and hyphens (-). The value must start with a letter
     *
     * > The value cannot start with [http:// or https://.](http://https://。)
     * @example Test read-only instance
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The primary instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the read-only instance. The storage capacity of the read-only instance must be greater than or equal to that of the primary instance. For more information, see the **Storage capacity** column in [Read-only instance types](https://help.aliyun.com/document_detail/145759.html). This value must be a multiple of 5. Unit: GB.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSDs
     *   **cloud_ssd**: standard SSDs
     *   **cloud_essd**: enhanced SSDs (ESSDs) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSDs of PL2
     *   **cloud_essd3**: ESSDs of PL3
     *
     * > *   If the primary instance runs MySQL with local disks, you must set this parameter to **local_ssd**. If the primary instance runs MySQL with cloud disks, you must set this parameter to cloud_ssd, cloud_essd, cloud_essd2, or cloud_essd3.
     * > *   If the primary instance runs SQL Server, you must set this parameter to cloud_ssd, cloud_essd, cloud_essd2, or cloud_essd3.
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The ID of the dedicated cluster to which the read-only instance belongs. This parameter is valid when you create the read-only instance in a dedicated cluster.
     *
     * @example dhg-4n****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description Specifies whether to enable the release protection feature for the read-only instance. Valid values:
     *
     *   **true**: enables the feature.
     *   **false** (default): disables the feature.
     *
     * >  You can enable the release protection feature for the read-only instance only when you set the **Billing Method** parameter to **Pay-As-You-Go**.
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The version of the database engine. The read-only instance and the primary instance must run the same major engine version.
     *
     *   If the read-only instance runs MySQL, set this parameter to **5.6**, **5.7**, or **8.0**.
     *   If the read-only instance runs MySQL, set this parameter to **2017_ent, 2019_ent, or 2022_ent**.
     *   If the read-only instance runs PostgreSQL, set this parameter to **10.0, 11.0, 12.0, 13.0, 14.0, or 15.0**.
     *
     * This parameter is required.
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $gdnInstanceName;

    /**
     * @description The network type of the read-only instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * Default value: VPC. If you set this parameter to VPC, you must also specify the **VPCId** and **VSwitchId** parameters.
     *
     * > The network type of the read-only instance can be different from the network type of the primary instance.
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $instructionSetArch;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the read-only instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * This parameter is required.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The renewal cycle of the read-only instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The port that can be initialized when you create a read-only ApsaraDB RDS for MySQL instance.
     *
     * Valid values: 1000 to 65534.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The private IP address of the read-only instance. The private IP address must be within the CIDR block that is supported by the specified vSwitch. The system assigns a private IP address to the read-only instance based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID. The read-only instance and the primary instance must reside in the same region. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy****
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
     * @description The ID of the host on which the primary instance resides. This parameter is valid when you create the read-only instance in a dedicated cluster.
     *
     * @example i-bp****
     *
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $tddlBizType;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $tddlRegionConfig;

    /**
     * @description The subscription duration of the read-only instance. Valid values:
     *
     *   If you set the **Period** parameter to **Year**, the value of the **UsedTime** parameter ranges from **1** to **5**.
     *   If you set the **Period** parameter to **Month**, the value of the **UsedTime** parameter ranges from **1** to **9**.
     *
     * > If you set the **PayType** parameter to **Prepaid**, you must specify the UsedTime parameter.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the read-only instance. If you leave the **InstanceNetworkType** parameter empty or set it to **VPC**, you must also specify this parameter.
     *
     * > * If the primary instance uses local disks, the read-only instance and the primary instance can belong to the same VPC or different VPCs.
     * > * If the primary instance uses cloud disks, the read-only instance and the primary instance must belong to the same VPC.
     * @example vpc-uf6f7l4fg90****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the read-only instance. If you leave the **InstanceNetworkType** parameter empty or set it to **VPC**, you must specify the VSwitchId parameter.
     *
     * @example vsw-uf6adz52c2p****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID. You can call the DescribeRegions operation to query the zone ID.
     *
     * This parameter is required.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoCreateProxy'                => 'AutoCreateProxy',
        'autoPay'                        => 'AutoPay',
        'autoRenew'                      => 'AutoRenew',
        'bpeEnabled'                     => 'BpeEnabled',
        'burstingEnabled'                => 'BurstingEnabled',
        'category'                       => 'Category',
        'clientToken'                    => 'ClientToken',
        'DBInstanceClass'                => 'DBInstanceClass',
        'DBInstanceDescription'          => 'DBInstanceDescription',
        'DBInstanceId'                   => 'DBInstanceId',
        'DBInstanceStorage'              => 'DBInstanceStorage',
        'DBInstanceStorageType'          => 'DBInstanceStorageType',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'deletionProtection'             => 'DeletionProtection',
        'engineVersion'                  => 'EngineVersion',
        'gdnInstanceName'                => 'GdnInstanceName',
        'instanceNetworkType'            => 'InstanceNetworkType',
        'instructionSetArch'             => 'InstructionSetArch',
        'ioAccelerationEnabled'          => 'IoAccelerationEnabled',
        'ownerAccount'                   => 'OwnerAccount',
        'ownerId'                        => 'OwnerId',
        'payType'                        => 'PayType',
        'period'                         => 'Period',
        'port'                           => 'Port',
        'privateIpAddress'               => 'PrivateIpAddress',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'tddlBizType'                    => 'TddlBizType',
        'tddlRegionConfig'               => 'TddlRegionConfig',
        'usedTime'                       => 'UsedTime',
        'VPCId'                          => 'VPCId',
        'vSwitchId'                      => 'VSwitchId',
        'zoneId'                         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateProxy) {
            $res['AutoCreateProxy'] = $this->autoCreateProxy;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->gdnInstanceName) {
            $res['GdnInstanceName'] = $this->gdnInstanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instructionSetArch) {
            $res['InstructionSetArch'] = $this->instructionSetArch;
        }
        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->tddlBizType) {
            $res['TddlBizType'] = $this->tddlBizType;
        }
        if (null !== $this->tddlRegionConfig) {
            $res['TddlRegionConfig'] = $this->tddlRegionConfig;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReadOnlyDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateProxy'])) {
            $model->autoCreateProxy = $map['AutoCreateProxy'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GdnInstanceName'])) {
            $model->gdnInstanceName = $map['GdnInstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstructionSetArch'])) {
            $model->instructionSetArch = $map['InstructionSetArch'];
        }
        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if (isset($map['TddlBizType'])) {
            $model->tddlBizType = $map['TddlBizType'];
        }
        if (isset($map['TddlRegionConfig'])) {
            $model->tddlRegionConfig = $map['TddlRegionConfig'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
