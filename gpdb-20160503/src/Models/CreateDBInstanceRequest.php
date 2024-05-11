<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @description The ID of the backup set.
     *
     * >  You can call the [DescribeDataBackups](https://help.aliyun.com/document_detail/210093.html) operation to query the IDs of all backup sets in the instance.
     * @example 1111111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. For more information, see [Ensure idempotence](https://help.aliyun.com/document_detail/327176.html).
     *
     * @example 0c593ea1-3bea-11e9-b96b-88**********
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to load a sample dataset after the instance is created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If you do not specify this parameter, no sample dataset is loaded.
     * @example false
     *
     * @var bool
     */
    public $createSampleData;

    /**
     * @description The edition of the instance. Valid values:
     *
     * - **HighAvailability**: High-availability Edition.
     * - **Basic**: Basic Edition.
     *
     * > This parameter must be specified when you create an instance in elastic storage mode.
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @description The instance type of the instance. For information, see [Instance types](https://help.aliyun.com/document_detail/86942.html).
     *
     * > This parameter must be specified when you create an instance in reserved storage mode.
     * @example gpdb.group.segsdx1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The number of compute groups. Valid values: 2, 4, 8, 12, 16, 24, 32, 64, 96, and 128.
     *
     * > This parameter must be specified when you create an instance in reserved storage mode.
     * @example 2
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @description The resource type of the instance. Valid values:
     *
     * - **StorageElastic**: elastic storage mode.
     * - **Serverless**: Serverless mode.
     * - **Classic**: reserved storage mode.
     *
     * This parameter is required.
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @description The ID of the encryption key.
     *
     * > If EncryptionType is set to CloudDisk, you must specify an encryption key that resides in the same region as the cloud disk that is specified by EncryptionType. Otherwise, leave this parameter empty.
     * @example 0d2470df-da7b-4786-b981-88888888****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption type. Valid values:
     *
     * - **NULL** (default): Encryption is disabled.
     * - **CloudDisk**: Encryption is enabled on cloud disks, and EncryptionKey is used to specify an encryption key.
     *
     * > Disk encryption cannot be disabled after it is enabled.
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description The database engine of the instance. Set the value to gpdb.
     *
     * This parameter is required.
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine. Valid values:
     *
     * This parameter is required.
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The wait time for the instance that has no traffic to become idle. Minimum value: 60. Default value: 600. Unit: seconds.
     *
     * > This parameter must be specified only when you create an instance in automatic Serverless mode.
     * @example 600
     *
     * @var int
     */
    public $idleTime;

    /**
     * @description The network type of the instance. Set the value to **VPC**.
     *
     * >
     *
     *   Only the Virtual Private Cloud (VPC) type is supported in Alibaba Cloud public cloud.
     *
     *   If you do not specify this parameter, VPC is used.
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The specifications of compute nodes.
     *
     * Valid values for High-availability Edition instances in elastic storage mode:
     *
     * - **2C16G**
     * - **4C32G**
     * - **16C128G**
     *
     * Valid values for Basic Edition instances in elastic storage mode:
     *
     * - **2C8G**
     * - **4C16G**
     * - **8C32G**
     * - **16C64G**
     *
     * Valid values for instances in Serverless mode:
     *
     * - **4C16G**
     * - **8C32G**
     *
     * > This parameter must be specified when you create an instance in elastic storage mode or Serverless mode.
     * @example 2C16G
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The amount of coordinator node resources. Valid values:
     *
     *   2 CU
     *   4 CU
     *   8 CU
     *   16 CU
     *   32 CU
     *
     * >  You are charged for coordinator node resources of more than 8 CUs.
     * @example 8 CU
     *
     * @var int
     */
    public $masterCU;

    /**
     * @description This parameter is no longer used.
     *
     * @example 1
     *
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * >
     *
     *   If you do not specify this parameter, Postpaid is used.
     *
     *   You can obtain more cost savings if you create a subscription instance for one year or longer. We recommend that you select the billing method that best suits your needs.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     * - **Month**
     * - **Year**
     * > This parameter must be specified when PayType is set to Prepaid.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description This parameter is no longer used.
     *
     * @example 1.1.1.*
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $prodType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IP address whitelist of the instance.
     *
     * This parameter is required.
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The performance level of ESSDs. Valid values:
     *
     *   **pl0**
     *   **pl1**
     *   **pl2**
     *
     * >
     *
     *   This parameter takes effect only when SegStorageType is set to cloud_essd.
     *
     *   If you do not specify this parameter, pl1 is used.
     *
     * @example pl1
     *
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @description The number of compute nodes.
     *
     * > This parameter must be specified when you create an instance in elastic storage mode or Serverless mode.
     * @example 4
     *
     * @var string
     */
    public $segNodeNum;

    /**
     * @description The disk storage type of the instance. Only enhanced SSDs (ESSDs) are supported. Set the value to cloud_essd.
     *
     * > This parameter must be specified when you create an instance in elastic storage mode.
     * @example cloud_essd
     *
     * @var string
     */
    public $segStorageType;

    /**
     * @description The type of the Serverless mode. Valid values:
     *
     * - **Manual** (default): manual scheduling.
     * - **Auto**: automatic scheduling.
     *
     * > This parameter must be specified only when you create an instance in Serverless mode.
     * @example Auto
     *
     * @var string
     */
    public $serverlessMode;

    /**
     * @description The threshold of computing resources. Unit: AnalyticDB compute unit (ACU). Valid values: 8 to 32. The value must be in increments of 8 ACUs. Default value: 32.
     *
     * > This parameter must be specified only when you create an instance in automatic Serverless mode.
     * @example 32
     *
     * @var int
     */
    public $serverlessResource;

    /**
     * @description The ID of the source instance.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     * @example gp-bp***************
     *
     * @var string
     */
    public $srcDbInstanceName;

    /**
     * @description The storage capacity of the instance. Unit: GB. Valid values: 50 to 6000.
     *
     * >  This parameter must be specified when you create an instance in elastic storage mode.
     * @example 200
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description This parameter is no longer used.
     *
     * @example null
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The subscription duration.
     *
     * > This parameter must be specified when PayType is set to Prepaid.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The VPC ID of the instance.
     *
     * >
     *
     *   **This parameter** must be specified.
     *
     *   The region where the **VPC** resides must be the same as the region that is specified by **RegionId**.
     *
     * @example vpc-bp*******************
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance.
     *
     * >
     *
     *   **This parameter** must be specified.
     *
     *   The zone where the **vSwitch** resides must be the same as the zone that is specified by **ZoneId**.
     *
     * @example vsw-bp*******************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Specifies whether to enable vector search engine optimization. Valid values:
     *
     *   **enabled**
     *   **disabled** (default)
     *
     * >
     *
     *   We recommend that you **do not enable** vector search engine optimization in mainstream analysis, data warehousing, and real-time data warehousing scenarios.
     *
     *   We recommend that you **enable** vector search engine optimization in AI-generated content (AIGC) and vector retrieval scenarios that require the vector analysis engine.
     *
     * @example enabled
     *
     * @var string
     */
    public $vectorConfigurationStatus;

    /**
     * @description The zone ID of the read-only instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent zone list.
     *
     * This parameter is required.
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupId'                  => 'BackupId',
        'clientToken'               => 'ClientToken',
        'createSampleData'          => 'CreateSampleData',
        'DBInstanceCategory'        => 'DBInstanceCategory',
        'DBInstanceClass'           => 'DBInstanceClass',
        'DBInstanceDescription'     => 'DBInstanceDescription',
        'DBInstanceGroupCount'      => 'DBInstanceGroupCount',
        'DBInstanceMode'            => 'DBInstanceMode',
        'enableSSL'                 => 'EnableSSL',
        'encryptionKey'             => 'EncryptionKey',
        'encryptionType'            => 'EncryptionType',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'idleTime'                  => 'IdleTime',
        'instanceNetworkType'       => 'InstanceNetworkType',
        'instanceSpec'              => 'InstanceSpec',
        'masterCU'                  => 'MasterCU',
        'masterNodeNum'             => 'MasterNodeNum',
        'ownerId'                   => 'OwnerId',
        'payType'                   => 'PayType',
        'period'                    => 'Period',
        'privateIpAddress'          => 'PrivateIpAddress',
        'prodType'                  => 'ProdType',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'securityIPList'            => 'SecurityIPList',
        'segDiskPerformanceLevel'   => 'SegDiskPerformanceLevel',
        'segNodeNum'                => 'SegNodeNum',
        'segStorageType'            => 'SegStorageType',
        'serverlessMode'            => 'ServerlessMode',
        'serverlessResource'        => 'ServerlessResource',
        'srcDbInstanceName'         => 'SrcDbInstanceName',
        'storageSize'               => 'StorageSize',
        'storageType'               => 'StorageType',
        'tag'                       => 'Tag',
        'usedTime'                  => 'UsedTime',
        'VPCId'                     => 'VPCId',
        'vSwitchId'                 => 'VSwitchId',
        'vectorConfigurationStatus' => 'VectorConfigurationStatus',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->createSampleData) {
            $res['CreateSampleData'] = $this->createSampleData;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->idleTime) {
            $res['IdleTime'] = $this->idleTime;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->masterCU) {
            $res['MasterCU'] = $this->masterCU;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
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
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->prodType) {
            $res['ProdType'] = $this->prodType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->segDiskPerformanceLevel) {
            $res['SegDiskPerformanceLevel'] = $this->segDiskPerformanceLevel;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->segStorageType) {
            $res['SegStorageType'] = $this->segStorageType;
        }
        if (null !== $this->serverlessMode) {
            $res['ServerlessMode'] = $this->serverlessMode;
        }
        if (null !== $this->serverlessResource) {
            $res['ServerlessResource'] = $this->serverlessResource;
        }
        if (null !== $this->srcDbInstanceName) {
            $res['SrcDbInstanceName'] = $this->srcDbInstanceName;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vectorConfigurationStatus) {
            $res['VectorConfigurationStatus'] = $this->vectorConfigurationStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CreateSampleData'])) {
            $model->createSampleData = $map['CreateSampleData'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['IdleTime'])) {
            $model->idleTime = $map['IdleTime'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['MasterCU'])) {
            $model->masterCU = $map['MasterCU'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ProdType'])) {
            $model->prodType = $map['ProdType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SegDiskPerformanceLevel'])) {
            $model->segDiskPerformanceLevel = $map['SegDiskPerformanceLevel'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['SegStorageType'])) {
            $model->segStorageType = $map['SegStorageType'];
        }
        if (isset($map['ServerlessMode'])) {
            $model->serverlessMode = $map['ServerlessMode'];
        }
        if (isset($map['ServerlessResource'])) {
            $model->serverlessResource = $map['ServerlessResource'];
        }
        if (isset($map['SrcDbInstanceName'])) {
            $model->srcDbInstanceName = $map['SrcDbInstanceName'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
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
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VectorConfigurationStatus'])) {
            $model->vectorConfigurationStatus = $map['VectorConfigurationStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
