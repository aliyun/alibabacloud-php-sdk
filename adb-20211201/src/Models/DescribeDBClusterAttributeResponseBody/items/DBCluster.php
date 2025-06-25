<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\tags;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\taskInfo;

class DBCluster extends Model
{
    /**
     * @var int
     */
    public $AINodeNumber;

    /**
     * @var string
     */
    public $AINodeSpec;

    /**
     * @var int
     */
    public $clickhouseEngineCacheSize;

    /**
     * @var bool
     */
    public $clickhouseEngineEnabled;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $computeResource;

    /**
     * @var string
     */
    public $computeResourceTotal;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBClusterType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var bool
     */
    public $diskEncryption;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $kmsId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $productForm;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reservedACU;

    /**
     * @var int
     */
    public $reservedNodeCount;

    /**
     * @var string
     */
    public $reservedNodeSize;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryVSwitchId;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $storageResource;

    /**
     * @var string
     */
    public $storageResourceTotal;

    /**
     * @var string[]
     */
    public $supportedFeatures;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var taskInfo
     */
    public $taskInfo;

    /**
     * @var bool
     */
    public $userENIStatus;

    /**
     * @var string
     */
    public $userENIVSwitchOptions;

    /**
     * @var string
     */
    public $userENIVpcId;

    /**
     * @var string
     */
    public $userENIZoneOptions;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'AINodeNumber' => 'AINodeNumber',
        'AINodeSpec' => 'AINodeSpec',
        'clickhouseEngineCacheSize' => 'ClickhouseEngineCacheSize',
        'clickhouseEngineEnabled' => 'ClickhouseEngineEnabled',
        'commodityCode' => 'CommodityCode',
        'computeResource' => 'ComputeResource',
        'computeResourceTotal' => 'ComputeResourceTotal',
        'connectionString' => 'ConnectionString',
        'creationTime' => 'CreationTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBClusterType' => 'DBClusterType',
        'DBVersion' => 'DBVersion',
        'diskEncryption' => 'DiskEncryption',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'kmsId' => 'KmsId',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainTime' => 'MaintainTime',
        'mode' => 'Mode',
        'payType' => 'PayType',
        'port' => 'Port',
        'productForm' => 'ProductForm',
        'productVersion' => 'ProductVersion',
        'regionId' => 'RegionId',
        'reservedACU' => 'ReservedACU',
        'reservedNodeCount' => 'ReservedNodeCount',
        'reservedNodeSize' => 'ReservedNodeSize',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryVSwitchId' => 'SecondaryVSwitchId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'storageResource' => 'StorageResource',
        'storageResourceTotal' => 'StorageResourceTotal',
        'supportedFeatures' => 'SupportedFeatures',
        'tags' => 'Tags',
        'taskInfo' => 'TaskInfo',
        'userENIStatus' => 'UserENIStatus',
        'userENIVSwitchOptions' => 'UserENIVSwitchOptions',
        'userENIVpcId' => 'UserENIVpcId',
        'userENIZoneOptions' => 'UserENIZoneOptions',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->supportedFeatures)) {
            Model::validateArray($this->supportedFeatures);
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->taskInfo) {
            $this->taskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodeNumber) {
            $res['AINodeNumber'] = $this->AINodeNumber;
        }

        if (null !== $this->AINodeSpec) {
            $res['AINodeSpec'] = $this->AINodeSpec;
        }

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

        if (null !== $this->diskEncryption) {
            $res['DiskEncryption'] = $this->diskEncryption;
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

        if (null !== $this->secondaryVSwitchId) {
            $res['SecondaryVSwitchId'] = $this->secondaryVSwitchId;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }

        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        if (null !== $this->storageResourceTotal) {
            $res['StorageResourceTotal'] = $this->storageResourceTotal;
        }

        if (null !== $this->supportedFeatures) {
            if (\is_array($this->supportedFeatures)) {
                $res['SupportedFeatures'] = [];
                foreach ($this->supportedFeatures as $key1 => $value1) {
                    $res['SupportedFeatures'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toArray($noStream) : $this->taskInfo;
        }

        if (null !== $this->userENIStatus) {
            $res['UserENIStatus'] = $this->userENIStatus;
        }

        if (null !== $this->userENIVSwitchOptions) {
            $res['UserENIVSwitchOptions'] = $this->userENIVSwitchOptions;
        }

        if (null !== $this->userENIVpcId) {
            $res['UserENIVpcId'] = $this->userENIVpcId;
        }

        if (null !== $this->userENIZoneOptions) {
            $res['UserENIZoneOptions'] = $this->userENIZoneOptions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AINodeNumber'])) {
            $model->AINodeNumber = $map['AINodeNumber'];
        }

        if (isset($map['AINodeSpec'])) {
            $model->AINodeSpec = $map['AINodeSpec'];
        }

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

        if (isset($map['DiskEncryption'])) {
            $model->diskEncryption = $map['DiskEncryption'];
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

        if (isset($map['SecondaryVSwitchId'])) {
            $model->secondaryVSwitchId = $map['SecondaryVSwitchId'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        if (isset($map['StorageResourceTotal'])) {
            $model->storageResourceTotal = $map['StorageResourceTotal'];
        }

        if (isset($map['SupportedFeatures'])) {
            if (!empty($map['SupportedFeatures'])) {
                $model->supportedFeatures = [];
                foreach ($map['SupportedFeatures'] as $key1 => $value1) {
                    $model->supportedFeatures[$key1] = $value1;
                }
            }
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }

        if (isset($map['UserENIStatus'])) {
            $model->userENIStatus = $map['UserENIStatus'];
        }

        if (isset($map['UserENIVSwitchOptions'])) {
            $model->userENIVSwitchOptions = $map['UserENIVSwitchOptions'];
        }

        if (isset($map['UserENIVpcId'])) {
            $model->userENIVpcId = $map['UserENIVpcId'];
        }

        if (isset($map['UserENIZoneOptions'])) {
            $model->userENIZoneOptions = $map['UserENIZoneOptions'];
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
