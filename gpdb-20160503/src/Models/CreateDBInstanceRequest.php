<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest\AINodeSpecInfos;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest\tag;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var AINodeSpecInfos[]
     */
    public $AINodeSpecInfos;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $createSampleData;

    /**
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $idleTime;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $masterAISpec;

    /**
     * @var int
     */
    public $masterCU;

    /**
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $prodType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @var string
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $segStorageType;

    /**
     * @var string
     */
    public $serverlessMode;

    /**
     * @var int
     */
    public $serverlessResource;

    /**
     * @var string
     */
    public $srcDbInstanceName;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $usedTime;

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
    public $vectorConfigurationStatus;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'AINodeSpecInfos' => 'AINodeSpecInfos',
        'backupId' => 'BackupId',
        'clientToken' => 'ClientToken',
        'createSampleData' => 'CreateSampleData',
        'DBInstanceCategory' => 'DBInstanceCategory',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceGroupCount' => 'DBInstanceGroupCount',
        'DBInstanceMode' => 'DBInstanceMode',
        'deployMode' => 'DeployMode',
        'enableSSL' => 'EnableSSL',
        'encryptionKey' => 'EncryptionKey',
        'encryptionType' => 'EncryptionType',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'idleTime' => 'IdleTime',
        'instanceNetworkType' => 'InstanceNetworkType',
        'instanceSpec' => 'InstanceSpec',
        'masterAISpec' => 'MasterAISpec',
        'masterCU' => 'MasterCU',
        'masterNodeNum' => 'MasterNodeNum',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'period' => 'Period',
        'privateIpAddress' => 'PrivateIpAddress',
        'prodType' => 'ProdType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
        'segDiskPerformanceLevel' => 'SegDiskPerformanceLevel',
        'segNodeNum' => 'SegNodeNum',
        'segStorageType' => 'SegStorageType',
        'serverlessMode' => 'ServerlessMode',
        'serverlessResource' => 'ServerlessResource',
        'srcDbInstanceName' => 'SrcDbInstanceName',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyZoneId' => 'StandbyZoneId',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
        'tag' => 'Tag',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'vectorConfigurationStatus' => 'VectorConfigurationStatus',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->AINodeSpecInfos)) {
            Model::validateArray($this->AINodeSpecInfos);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodeSpecInfos) {
            if (\is_array($this->AINodeSpecInfos)) {
                $res['AINodeSpecInfos'] = [];
                $n1 = 0;
                foreach ($this->AINodeSpecInfos as $item1) {
                    $res['AINodeSpecInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AINodeSpecInfos'])) {
            if (!empty($map['AINodeSpecInfos'])) {
                $model->AINodeSpecInfos = [];
                $n1 = 0;
                foreach ($map['AINodeSpecInfos'] as $item1) {
                    $model->AINodeSpecInfos[$n1++] = AINodeSpecInfos::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
