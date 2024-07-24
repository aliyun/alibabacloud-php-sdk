<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @description The cache size of the ClickHouse wide table engine. Unit: GB. If a value of -1 is returned, the ClickHouse wide table engine is disabled. If a value other than -1 is returned, this parameter indicates the disk cache size.
     *
     * @example 100
     *
     * @var int
     */
    public $clickhouseEngineCacheSize;

    /**
     * @description Indicates whether the ClickHouse wide table engine is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $clickhouseEngineEnabled;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **ads**: pay-as-you-go.
     *   **ads_pre**: subscription.
     *
     * @example ads_pre
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The specifications of reserved computing resources. Each ACU is approximately equal to 1 core and 4 GB memory. Computing resources are used to compute data. The increase in the computing resources can accelerate queries. You can scale computing resources based on your business requirements.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The total amount of computing resources in the cluster. Each ACU is approximately equal to 1 core and 4 GB memory.
     *
     * @example 48ACU
     *
     * @var string
     */
    public $computeResourceTotal;

    /**
     * @description The public endpoint that is used to connect to the cluster.
     *
     * @example amv-wz9509beptiz****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-07-01T09:50:18Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the cluster.
     *
     * @example adb_test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster. **VPC** is returned.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **Preparing**
     *   **Creating**
     *   **Running**
     *   **Deleting**
     *   **Restoring**
     *   **ClassChanging**
     *   **NetAddressCreating**
     *   **NetAddressDeleting**
     *   **NetAddressModifying**
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The type of the cluster. By default, **Common** is returned, which indicates a common cluster.
     *
     * @example Common
     *
     * @var string
     */
    public $DBClusterType;

    /**
     * @description The engine version of the AnalyticDB for MySQL Data Lakehouse Edition cluster. **5.0** is returned.
     *
     * @example 5.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The engine of the cluster. **AnalyticDB** is returned.
     *
     * @example AnalyticDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The minor version of the cluster.
     *
     * @example 3.1.16
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the cluster expires.
     *
     *   If the billing method of the cluster is subscription, the actual expiration time is returned.
     *   If the billing method of the cluster is pay-as-you-go, null is returned.
     *
     * @example 2022-10-01T09:50:18Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the subscription cluster has expired. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >
     *
     *   If the cluster has expired, the system locks or releases the cluster within a period of time. We recommend that you renew the expired cluster. For more information, see [Renewal policy](https://help.aliyun.com/document_detail/135248.html).
     *
     *   This parameter is not returned for pay-as-you-go clusters.
     *
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description The ID of the key that is used to encrypt disk data.
     *
     * >  This parameter is returned only when disk encryption is enabled.
     * @example e1935511-cf88-1123-a0f8-1be8d251****
     *
     * @var string
     */
    public $kmsId;

    /**
     * @description The lock mode of the cluster. Valid values:
     *
     *   **Unlock**: The cluster is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The cluster is automatically locked due to cluster expiration.
     *
     * @example ManualLock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster is locked.
     *
     * >  This parameter is returned only when the cluster was locked. **instance_expire** is returned.
     * @example instance_expire
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maintenance window of the cluster. The time is displayed in the `HH:mmZ-HH:mmZ` format in UTC.
     *
     * >  For more information about maintenance windows, see [Configure a maintenance window](https://help.aliyun.com/document_detail/122569.html).
     * @example 04:00Z-05:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The mode of the cluster. By default, **flexible** is returned, which indicates that the cluster is in elastic mode.
     *
     * @example flexible
     *
     * @var string
     */
    public $mode;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port number that is used to connect to the cluster.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $productForm;

    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **BasicVersion**: Basic Edition.
     *   **EnterpriseVersion**: Enterprise Edition.
     *
     * @example BasicVersion
     *
     * @var string
     */
    public $productVersion;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The amount of remaining reserved computing resources that are available in the cluster. Each ACU is approximately equal to 1 core and 4 GB memory.
     *
     * @example 24ACU
     *
     * @var string
     */
    public $reservedACU;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $reservedNodeCount;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $reservedNodeSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specifications of reserved storage resources. Each AnalyticDB compute unit (ACU) is approximately equal to 1 core and 4 GB memory. Storage resources are used to read and write data. The increase in the storage resources can improve the read and write performance of the cluster.
     *
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;

    /**
     * @description The total amount of storage resources in the cluster. Each ACU is approximately equal to 1 core and 4 GB memory.
     *
     * @example 24ACU
     *
     * @var string
     */
    public $storageResourceTotal;

    /**
     * @description Reserved parameters.
     *
     * @var string[]
     */
    public $supportedFeatures;

    /**
     * @description The tags that are added to the cluster.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether Elastic Network Interface (ENI) is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $userENIStatus;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * @example vpc-bp13h7uzhulpu****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-uf629gydd54ld****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clickhouseEngineCacheSize' => 'ClickhouseEngineCacheSize',
        'clickhouseEngineEnabled'   => 'ClickhouseEngineEnabled',
        'commodityCode'             => 'CommodityCode',
        'computeResource'           => 'ComputeResource',
        'computeResourceTotal'      => 'ComputeResourceTotal',
        'connectionString'          => 'ConnectionString',
        'creationTime'              => 'CreationTime',
        'DBClusterDescription'      => 'DBClusterDescription',
        'DBClusterId'               => 'DBClusterId',
        'DBClusterNetworkType'      => 'DBClusterNetworkType',
        'DBClusterStatus'           => 'DBClusterStatus',
        'DBClusterType'             => 'DBClusterType',
        'DBVersion'                 => 'DBVersion',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'expireTime'                => 'ExpireTime',
        'expired'                   => 'Expired',
        'kmsId'                     => 'KmsId',
        'lockMode'                  => 'LockMode',
        'lockReason'                => 'LockReason',
        'maintainTime'              => 'MaintainTime',
        'mode'                      => 'Mode',
        'payType'                   => 'PayType',
        'port'                      => 'Port',
        'productForm'               => 'ProductForm',
        'productVersion'            => 'ProductVersion',
        'regionId'                  => 'RegionId',
        'reservedACU'               => 'ReservedACU',
        'reservedNodeCount'         => 'ReservedNodeCount',
        'reservedNodeSize'          => 'ReservedNodeSize',
        'resourceGroupId'           => 'ResourceGroupId',
        'storageResource'           => 'StorageResource',
        'storageResourceTotal'      => 'StorageResourceTotal',
        'supportedFeatures'         => 'SupportedFeatures',
        'tags'                      => 'Tags',
        'userENIStatus'             => 'UserENIStatus',
        'VPCId'                     => 'VPCId',
        'vSwitchId'                 => 'VSwitchId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clickhouseEngineCacheSize) {
            $res['ClickhouseEngineCacheSize'] = $this->clickhouseEngineCacheSize;
        }
        if (null !== $this->clickhouseEngineEnabled) {
            $res['ClickhouseEngineEnabled'] = $this->clickhouseEngineEnabled;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->computeResourceTotal) {
            $res['ComputeResourceTotal'] = $this->computeResourceTotal;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->kmsId) {
            $res['KmsId'] = $this->kmsId;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->productForm) {
            $res['ProductForm'] = $this->productForm;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedACU) {
            $res['ReservedACU'] = $this->reservedACU;
        }
        if (null !== $this->reservedNodeCount) {
            $res['ReservedNodeCount'] = $this->reservedNodeCount;
        }
        if (null !== $this->reservedNodeSize) {
            $res['ReservedNodeSize'] = $this->reservedNodeSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->storageResourceTotal) {
            $res['StorageResourceTotal'] = $this->storageResourceTotal;
        }
        if (null !== $this->supportedFeatures) {
            $res['SupportedFeatures'] = $this->supportedFeatures;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->userENIStatus) {
            $res['UserENIStatus'] = $this->userENIStatus;
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
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClickhouseEngineCacheSize'])) {
            $model->clickhouseEngineCacheSize = $map['ClickhouseEngineCacheSize'];
        }
        if (isset($map['ClickhouseEngineEnabled'])) {
            $model->clickhouseEngineEnabled = $map['ClickhouseEngineEnabled'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['ComputeResourceTotal'])) {
            $model->computeResourceTotal = $map['ComputeResourceTotal'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['KmsId'])) {
            $model->kmsId = $map['KmsId'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProductForm'])) {
            $model->productForm = $map['ProductForm'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedACU'])) {
            $model->reservedACU = $map['ReservedACU'];
        }
        if (isset($map['ReservedNodeCount'])) {
            $model->reservedNodeCount = $map['ReservedNodeCount'];
        }
        if (isset($map['ReservedNodeSize'])) {
            $model->reservedNodeSize = $map['ReservedNodeSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['StorageResourceTotal'])) {
            $model->storageResourceTotal = $map['StorageResourceTotal'];
        }
        if (isset($map['SupportedFeatures'])) {
            $model->supportedFeatures = $map['SupportedFeatures'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UserENIStatus'])) {
            $model->userENIStatus = $map['UserENIStatus'];
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
