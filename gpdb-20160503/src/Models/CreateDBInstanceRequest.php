<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest\AINodeSpecInfos;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var AINodeSpecInfos[]
     */
    public $AINodeSpecInfos;

    /**
     * @description Backup set ID.
     *
     * > You can call the [DescribeDataBackups](https://help.aliyun.com/document_detail/210093.html) interface to view the backup set IDs of all backup sets under the target instance.
     * @example 1111111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description Idempotence check. For more information, see [How to Ensure Idempotence](https://help.aliyun.com/document_detail/327176.html).
     *
     * @example 0c593ea1-3bea-11e9-b96b-88**********
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Whether to load sample datasets after the instance is created. The values are as follows:
     *
     * - **true**: Load sample datasets.
     * - **false**: Do not load sample datasets.
     *
     * > If this parameter is not specified, it defaults to not loading sample datasets.
     * @example false
     *
     * @var bool
     */
    public $createSampleData;

    /**
     * @description Instance series. The value description is as follows:
     *
     * - **HighAvailability**: High availability version.
     * - **Basic**: Basic version.
     *
     * > This parameter is required when creating an instance in the storage elastic mode.
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @description Instance type. For more details, see the supplementary description of the DBInstanceClass parameter.
     *
     * > This parameter is required when creating a reserved storage mode instance.
     * @example gpdb.group.segsdx1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description Instance description.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description Number of compute groups. The values are: 2, 4, 8, 12, 16, 24, 32, 64, 96, 128.
     *
     * > This parameter is required when creating a reserved storage mode instance.
     * @example 2
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @description Instance resource type. The value description is as follows:
     *
     * - **StorageElastic**: Storage elastic mode.
     * - **Serverless**: Serverless mode.
     * - **Classic**: Storage reserved mode.
     *
     * This parameter is required.
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description Deployment mode. The values are as follows:
     * > - Currently, only single-zone deployment is supported.
     * @example single
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description Indicates whether to enable SSL encryption. The values are as follows:
     * - **true**: Enable SSL encryption.
     * - **false** (default): Do not enable SSL encryption.
     * @example false
     *
     * @var bool
     */
    public $enableSSL;

    /**
     * @description Key ID.
     *
     * > If the value of the **EncryptionType** parameter is **CloudDisk**, you need to specify the encryption key ID within the same region through this parameter; otherwise, it should be empty.
     * @example 0d2470df-da7b-4786-b981-88888888****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description Encryption type. The value description is as follows:
     *
     * - **NULL**: No encryption (default).
     * - **CloudDisk**: Enable cloud disk encryption and specify the key through the **EncryptionKey** parameter.
     *
     * > Once cloud disk encryption is enabled, it cannot be disabled.
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description Database engine, with the value **gpdb**.
     *
     * This parameter is required.
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description Engine version. The values are as follows:
     * - **6.0**: Version 6.0.
     * - **7.0**: Version 7.0.
     *
     * This parameter is required.
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The idle release wait time. When the duration without business traffic reaches the specified time, the instance will enter the idle state. The unit is seconds, with a minimum value of 60, and the default value is 600.
     *
     * > This parameter is required only for Serverless auto-scheduling mode instances.
     * @example 600
     *
     * @var int
     */
    public $idleTime;

    /**
     * @description Instance network type, with the value **VPC**.
     *
     * > - If not specified, it defaults to VPC type.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description Compute node specifications.
     *
     * For high-availability versions of the elastic storage mode, the values are as follows:
     * - **2C16G**
     * - **4C32G**
     * - **16C128G**
     *
     * For basic versions of the elastic storage mode, the values are as follows:
     * - **2C8G**
     * - **4C16G**
     * - **8C32G**
     * - **16C64G**
     *
     * For Serverless mode, the values are as follows:
     * - **4C16G**
     * - **8C32G**
     *
     * > This parameter is required when creating an elastic storage mode instance or a Serverless mode instance.
     * @example 2C16G
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $masterAISpec;

    /**
     * @description Master resources, with the following values:
     * > Master resources above 8 CU will incur charges.
     * @example 8 CU
     *
     * @var int
     */
    public $masterCU;

    /**
     * @description This parameter is deprecated and should not be passed.
     *
     * @example null
     *
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Billing type. The values are as follows:
     *
     * - **Postpaid**: Pay-as-you-go
     * - **Prepaid**: Subscription
     *
     * > - When using the subscription billing model, there may be discounts for purchasing one year or longer at once. It is recommended to choose the billing type according to your needs.
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description Unit of the duration for which resources are purchased. The values are as follows:
     * - **Month**: Month
     * - **Year**: Year
     *
     * > This parameter is required when creating a subscription-billed instance.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description This parameter is deprecated and should not be passed.
     *
     * @example null
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Product type. The values are as follows:
     * - **standard**: Standard Edition.
     * - **cost-effective**: Cost-Effective Edition.
     *
     * > If this parameter is not specified, the default value is Standard Edition.
     * @example standard
     *
     * @var string
     */
    public $prodType;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the enterprise resource group where the instance is located.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description IP whitelist.
     *
     * 127.0.0.1 indicates that no external IP addresses are allowed to access. You can modify the IP whitelist by calling the [ModifySecurityIps](https://help.aliyun.com/document_detail/86928.html) interface after the instance is created.
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description ESSD cloud disk performance level. The values are as follows:
     *
     * - **pl0**: PL0 level.
     * - **pl1**: PL1 level.
     * - **pl2**: PL2 level.
     *
     * > - If not specified, it defaults to PL1 level.
     * @example pl1
     *
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @description The number of compute nodes. The value description is as follows:
     *
     * > This parameter is required when creating instances in the storage elastic mode or Serverless mode.
     * @example 4
     *
     * @var string
     */
    public $segNodeNum;

    /**
     * @description Disk storage type, currently only ESSD cloud disks are supported, with the value **cloud_essd**.
     *
     * > This parameter is required when creating an elastic storage mode instance.
     * @example cloud_essd
     *
     * @var string
     */
    public $segStorageType;

    /**
     * @description The mode of the Serverless instance. The values are as follows:
     *
     * - **Manual**: Manual scheduling (default).
     * - **Auto**: Auto scheduling.
     *
     * > This parameter is required only for Serverless mode instances.
     * @example Auto
     *
     * @var string
     */
    public $serverlessMode;

    /**
     * @description The threshold for computing resources. The value range is 8 to 32, with a step of 8, and the unit is ACU. The default value is 32.
     *
     * > This parameter is required only for Serverless auto-scheduling mode instances.
     * @example 32
     *
     * @var int
     */
    public $serverlessResource;

    /**
     * @description ID of the source instance to be cloned.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) interface to view details of all AnalyticDB for PostgreSQL instances in the target region, including the instance ID.
     * @example gp-bp***************
     *
     * @var string
     */
    public $srcDbInstanceName;

    /**
     * @description VSwitch ID of the standby zone.
     *
     * > - The VSwitch ID of the standby zone must be in the same zone as the StandbyZoneId.
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @description ID of the standby zone.
     *
     * > - The ID of the standby zone must be different from the ID of the primary zone.
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $standbyZoneId;

    /**
     * @description The size of the storage space, in GB, with a value range of <props="china">50~8000<props="intl">50~6000.
     *
     * > This parameter is required when creating an instance in the storage elastic mode.
     * @example 200
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description This parameter is deprecated and should not be passed.
     *
     * @example null
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The Nth tag. The value of N ranges from 1 to 20.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Duration for which resources are purchased. The values are as follows:
     * - When **Period** is **Month**, the value ranges from 1 to 9.
     * - When **Period** is **Year**, the value ranges from 1 to 3.
     *
     * > This parameter is required when creating a subscription-billed instance.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description VPC ID.
     *
     * > - **VPCId** is required.
     * > - The region of the **VPC** must be consistent with **RegionId**.
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description vSwitch ID.
     *
     * > - **vSwitchId** is required.
     * > - The availability zone of the **vSwitch** must be consistent with **ZoneId**.
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Whether to enable vector engine optimization. The value description is as follows:
     * - **enabled**: Enable vector engine optimization.
     * - **disabled** (default): Do not enable vector engine optimization.
     *
     * > - For mainstream analysis scenarios, data warehouse scenarios, and real-time data warehouse scenarios, it is recommended to **not enable** vector engine optimization.
     * > - For users using the vector analysis engine for AIGC, vector retrieval, and other scenarios, it is recommended to **enable** vector engine optimization.
     * @example enabled
     *
     * @var string
     */
    public $vectorConfigurationStatus;

    /**
     * @description Zone ID.
     *
     * This parameter is required.
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'AINodeSpecInfos'           => 'AINodeSpecInfos',
        'backupId'                  => 'BackupId',
        'clientToken'               => 'ClientToken',
        'createSampleData'          => 'CreateSampleData',
        'DBInstanceCategory'        => 'DBInstanceCategory',
        'DBInstanceClass'           => 'DBInstanceClass',
        'DBInstanceDescription'     => 'DBInstanceDescription',
        'DBInstanceGroupCount'      => 'DBInstanceGroupCount',
        'DBInstanceMode'            => 'DBInstanceMode',
        'deployMode'                => 'DeployMode',
        'enableSSL'                 => 'EnableSSL',
        'encryptionKey'             => 'EncryptionKey',
        'encryptionType'            => 'EncryptionType',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'idleTime'                  => 'IdleTime',
        'instanceNetworkType'       => 'InstanceNetworkType',
        'instanceSpec'              => 'InstanceSpec',
        'masterAISpec'              => 'MasterAISpec',
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
        'standbyVSwitchId'          => 'StandbyVSwitchId',
        'standbyZoneId'             => 'StandbyZoneId',
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
        if (null !== $this->AINodeSpecInfos) {
            $res['AINodeSpecInfos'] = [];
            if (null !== $this->AINodeSpecInfos && \is_array($this->AINodeSpecInfos)) {
                $n = 0;
                foreach ($this->AINodeSpecInfos as $item) {
                    $res['AINodeSpecInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
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
        if (null !== $this->masterAISpec) {
            $res['MasterAISpec'] = $this->masterAISpec;
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
        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
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
        if (isset($map['AINodeSpecInfos'])) {
            if (!empty($map['AINodeSpecInfos'])) {
                $model->AINodeSpecInfos = [];
                $n                      = 0;
                foreach ($map['AINodeSpecInfos'] as $item) {
                    $model->AINodeSpecInfos[$n++] = null !== $item ? AINodeSpecInfos::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
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
        if (isset($map['MasterAISpec'])) {
            $model->masterAISpec = $map['MasterAISpec'];
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
        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
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
