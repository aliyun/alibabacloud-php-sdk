<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateDifyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $adbpgInstanceMode;

    /**
     * @var string
     */
    public $backupVSwitchId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @var string
     */
    public $databaseOption;

    /**
     * @var string
     */
    public $dbEngineType;

    /**
     * @var string
     */
    public $dbEngineVersion;

    /**
     * @var string
     */
    public $dbInstanceAccount;

    /**
     * @var string
     */
    public $dbInstanceCategory;

    /**
     * @var string
     */
    public $dbInstanceClass;

    /**
     * @var string
     */
    public $dbInstancePassword;

    /**
     * @var int
     */
    public $dbResourceId;

    /**
     * @var string
     */
    public $dbStorageSize;

    /**
     * @var string
     */
    public $dbStorageType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @example Community
     *
     * @var string
     */
    public $edition;

    /**
     * @var bool
     */
    public $enableExtraEndpoint;

    /**
     * @var string
     */
    public $gpuNodeSpec;

    /**
     * @var string
     */
    public $kvStoreAccount;

    /**
     * @var string
     */
    public $kvStoreEngineVersion;

    /**
     * @var string
     */
    public $kvStoreInstanceClass;

    /**
     * @var string
     */
    public $kvStoreNodeType;

    /**
     * @var string
     */
    public $kvStoreOption;

    /**
     * @var string
     */
    public $kvStorePassword;

    /**
     * @var int
     */
    public $kvStoreResourceId;

    /**
     * @var string
     */
    public $kvStoreType;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @example Disable
     *
     * @var string
     */
    public $modelOption;

    /**
     * @var string
     */
    public $natGatewayOption;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var int
     */
    public $ossResourceId;

    /**
     * @var int
     */
    public $payPeriod;

    /**
     * @var string
     */
    public $payPeriodType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $resourceQuota;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @var int
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vectordbAccount;

    /**
     * @var string
     */
    public $vectordbCategory;

    /**
     * @var string
     */
    public $vectordbEngineVersion;

    /**
     * @var string
     */
    public $vectordbInstanceSpec;

    /**
     * @var string
     */
    public $vectordbOption;

    /**
     * @var string
     */
    public $vectordbPassword;

    /**
     * @var int
     */
    public $vectordbResourceId;

    /**
     * @var string
     */
    public $vectordbStorageSize;

    /**
     * @var string
     */
    public $vectordbStorageType;

    /**
     * @var string
     */
    public $vectordbType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workspaceDescription;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $workspaceOption;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'adbpgInstanceMode' => 'AdbpgInstanceMode',
        'backupVSwitchId' => 'BackupVSwitchId',
        'clientToken' => 'ClientToken',
        'dataRegion' => 'DataRegion',
        'databaseOption' => 'DatabaseOption',
        'dbEngineType' => 'DbEngineType',
        'dbEngineVersion' => 'DbEngineVersion',
        'dbInstanceAccount' => 'DbInstanceAccount',
        'dbInstanceCategory' => 'DbInstanceCategory',
        'dbInstanceClass' => 'DbInstanceClass',
        'dbInstancePassword' => 'DbInstancePassword',
        'dbResourceId' => 'DbResourceId',
        'dbStorageSize' => 'DbStorageSize',
        'dbStorageType' => 'DbStorageType',
        'dryRun' => 'DryRun',
        'edition' => 'Edition',
        'enableExtraEndpoint' => 'EnableExtraEndpoint',
        'gpuNodeSpec' => 'GpuNodeSpec',
        'kvStoreAccount' => 'KvStoreAccount',
        'kvStoreEngineVersion' => 'KvStoreEngineVersion',
        'kvStoreInstanceClass' => 'KvStoreInstanceClass',
        'kvStoreNodeType' => 'KvStoreNodeType',
        'kvStoreOption' => 'KvStoreOption',
        'kvStorePassword' => 'KvStorePassword',
        'kvStoreResourceId' => 'KvStoreResourceId',
        'kvStoreType' => 'KvStoreType',
        'majorVersion' => 'MajorVersion',
        'modelId' => 'ModelId',
        'modelOption' => 'ModelOption',
        'natGatewayOption' => 'NatGatewayOption',
        'ossPath' => 'OssPath',
        'ossResourceId' => 'OssResourceId',
        'payPeriod' => 'PayPeriod',
        'payPeriodType' => 'PayPeriodType',
        'payType' => 'PayType',
        'replicas' => 'Replicas',
        'resourceQuota' => 'ResourceQuota',
        'securityGroupId' => 'SecurityGroupId',
        'segDiskPerformanceLevel' => 'SegDiskPerformanceLevel',
        'segNodeNum' => 'SegNodeNum',
        'storageType' => 'StorageType',
        'vSwitchId' => 'VSwitchId',
        'vectordbAccount' => 'VectordbAccount',
        'vectordbCategory' => 'VectordbCategory',
        'vectordbEngineVersion' => 'VectordbEngineVersion',
        'vectordbInstanceSpec' => 'VectordbInstanceSpec',
        'vectordbOption' => 'VectordbOption',
        'vectordbPassword' => 'VectordbPassword',
        'vectordbResourceId' => 'VectordbResourceId',
        'vectordbStorageSize' => 'VectordbStorageSize',
        'vectordbStorageType' => 'VectordbStorageType',
        'vectordbType' => 'VectordbType',
        'vpcId' => 'VpcId',
        'workspaceDescription' => 'WorkspaceDescription',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
        'workspaceOption' => 'WorkspaceOption',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbpgInstanceMode) {
            $res['AdbpgInstanceMode'] = $this->adbpgInstanceMode;
        }
        if (null !== $this->backupVSwitchId) {
            $res['BackupVSwitchId'] = $this->backupVSwitchId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->databaseOption) {
            $res['DatabaseOption'] = $this->databaseOption;
        }
        if (null !== $this->dbEngineType) {
            $res['DbEngineType'] = $this->dbEngineType;
        }
        if (null !== $this->dbEngineVersion) {
            $res['DbEngineVersion'] = $this->dbEngineVersion;
        }
        if (null !== $this->dbInstanceAccount) {
            $res['DbInstanceAccount'] = $this->dbInstanceAccount;
        }
        if (null !== $this->dbInstanceCategory) {
            $res['DbInstanceCategory'] = $this->dbInstanceCategory;
        }
        if (null !== $this->dbInstanceClass) {
            $res['DbInstanceClass'] = $this->dbInstanceClass;
        }
        if (null !== $this->dbInstancePassword) {
            $res['DbInstancePassword'] = $this->dbInstancePassword;
        }
        if (null !== $this->dbResourceId) {
            $res['DbResourceId'] = $this->dbResourceId;
        }
        if (null !== $this->dbStorageSize) {
            $res['DbStorageSize'] = $this->dbStorageSize;
        }
        if (null !== $this->dbStorageType) {
            $res['DbStorageType'] = $this->dbStorageType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enableExtraEndpoint) {
            $res['EnableExtraEndpoint'] = $this->enableExtraEndpoint;
        }
        if (null !== $this->gpuNodeSpec) {
            $res['GpuNodeSpec'] = $this->gpuNodeSpec;
        }
        if (null !== $this->kvStoreAccount) {
            $res['KvStoreAccount'] = $this->kvStoreAccount;
        }
        if (null !== $this->kvStoreEngineVersion) {
            $res['KvStoreEngineVersion'] = $this->kvStoreEngineVersion;
        }
        if (null !== $this->kvStoreInstanceClass) {
            $res['KvStoreInstanceClass'] = $this->kvStoreInstanceClass;
        }
        if (null !== $this->kvStoreNodeType) {
            $res['KvStoreNodeType'] = $this->kvStoreNodeType;
        }
        if (null !== $this->kvStoreOption) {
            $res['KvStoreOption'] = $this->kvStoreOption;
        }
        if (null !== $this->kvStorePassword) {
            $res['KvStorePassword'] = $this->kvStorePassword;
        }
        if (null !== $this->kvStoreResourceId) {
            $res['KvStoreResourceId'] = $this->kvStoreResourceId;
        }
        if (null !== $this->kvStoreType) {
            $res['KvStoreType'] = $this->kvStoreType;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelOption) {
            $res['ModelOption'] = $this->modelOption;
        }
        if (null !== $this->natGatewayOption) {
            $res['NatGatewayOption'] = $this->natGatewayOption;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->ossResourceId) {
            $res['OssResourceId'] = $this->ossResourceId;
        }
        if (null !== $this->payPeriod) {
            $res['PayPeriod'] = $this->payPeriod;
        }
        if (null !== $this->payPeriodType) {
            $res['PayPeriodType'] = $this->payPeriodType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->resourceQuota) {
            $res['ResourceQuota'] = $this->resourceQuota;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->segDiskPerformanceLevel) {
            $res['SegDiskPerformanceLevel'] = $this->segDiskPerformanceLevel;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vectordbAccount) {
            $res['VectordbAccount'] = $this->vectordbAccount;
        }
        if (null !== $this->vectordbCategory) {
            $res['VectordbCategory'] = $this->vectordbCategory;
        }
        if (null !== $this->vectordbEngineVersion) {
            $res['VectordbEngineVersion'] = $this->vectordbEngineVersion;
        }
        if (null !== $this->vectordbInstanceSpec) {
            $res['VectordbInstanceSpec'] = $this->vectordbInstanceSpec;
        }
        if (null !== $this->vectordbOption) {
            $res['VectordbOption'] = $this->vectordbOption;
        }
        if (null !== $this->vectordbPassword) {
            $res['VectordbPassword'] = $this->vectordbPassword;
        }
        if (null !== $this->vectordbResourceId) {
            $res['VectordbResourceId'] = $this->vectordbResourceId;
        }
        if (null !== $this->vectordbStorageSize) {
            $res['VectordbStorageSize'] = $this->vectordbStorageSize;
        }
        if (null !== $this->vectordbStorageType) {
            $res['VectordbStorageType'] = $this->vectordbStorageType;
        }
        if (null !== $this->vectordbType) {
            $res['VectordbType'] = $this->vectordbType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workspaceDescription) {
            $res['WorkspaceDescription'] = $this->workspaceDescription;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }
        if (null !== $this->workspaceOption) {
            $res['WorkspaceOption'] = $this->workspaceOption;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDifyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdbpgInstanceMode'])) {
            $model->adbpgInstanceMode = $map['AdbpgInstanceMode'];
        }
        if (isset($map['BackupVSwitchId'])) {
            $model->backupVSwitchId = $map['BackupVSwitchId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DatabaseOption'])) {
            $model->databaseOption = $map['DatabaseOption'];
        }
        if (isset($map['DbEngineType'])) {
            $model->dbEngineType = $map['DbEngineType'];
        }
        if (isset($map['DbEngineVersion'])) {
            $model->dbEngineVersion = $map['DbEngineVersion'];
        }
        if (isset($map['DbInstanceAccount'])) {
            $model->dbInstanceAccount = $map['DbInstanceAccount'];
        }
        if (isset($map['DbInstanceCategory'])) {
            $model->dbInstanceCategory = $map['DbInstanceCategory'];
        }
        if (isset($map['DbInstanceClass'])) {
            $model->dbInstanceClass = $map['DbInstanceClass'];
        }
        if (isset($map['DbInstancePassword'])) {
            $model->dbInstancePassword = $map['DbInstancePassword'];
        }
        if (isset($map['DbResourceId'])) {
            $model->dbResourceId = $map['DbResourceId'];
        }
        if (isset($map['DbStorageSize'])) {
            $model->dbStorageSize = $map['DbStorageSize'];
        }
        if (isset($map['DbStorageType'])) {
            $model->dbStorageType = $map['DbStorageType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EnableExtraEndpoint'])) {
            $model->enableExtraEndpoint = $map['EnableExtraEndpoint'];
        }
        if (isset($map['GpuNodeSpec'])) {
            $model->gpuNodeSpec = $map['GpuNodeSpec'];
        }
        if (isset($map['KvStoreAccount'])) {
            $model->kvStoreAccount = $map['KvStoreAccount'];
        }
        if (isset($map['KvStoreEngineVersion'])) {
            $model->kvStoreEngineVersion = $map['KvStoreEngineVersion'];
        }
        if (isset($map['KvStoreInstanceClass'])) {
            $model->kvStoreInstanceClass = $map['KvStoreInstanceClass'];
        }
        if (isset($map['KvStoreNodeType'])) {
            $model->kvStoreNodeType = $map['KvStoreNodeType'];
        }
        if (isset($map['KvStoreOption'])) {
            $model->kvStoreOption = $map['KvStoreOption'];
        }
        if (isset($map['KvStorePassword'])) {
            $model->kvStorePassword = $map['KvStorePassword'];
        }
        if (isset($map['KvStoreResourceId'])) {
            $model->kvStoreResourceId = $map['KvStoreResourceId'];
        }
        if (isset($map['KvStoreType'])) {
            $model->kvStoreType = $map['KvStoreType'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelOption'])) {
            $model->modelOption = $map['ModelOption'];
        }
        if (isset($map['NatGatewayOption'])) {
            $model->natGatewayOption = $map['NatGatewayOption'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['OssResourceId'])) {
            $model->ossResourceId = $map['OssResourceId'];
        }
        if (isset($map['PayPeriod'])) {
            $model->payPeriod = $map['PayPeriod'];
        }
        if (isset($map['PayPeriodType'])) {
            $model->payPeriodType = $map['PayPeriodType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['ResourceQuota'])) {
            $model->resourceQuota = $map['ResourceQuota'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SegDiskPerformanceLevel'])) {
            $model->segDiskPerformanceLevel = $map['SegDiskPerformanceLevel'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VectordbAccount'])) {
            $model->vectordbAccount = $map['VectordbAccount'];
        }
        if (isset($map['VectordbCategory'])) {
            $model->vectordbCategory = $map['VectordbCategory'];
        }
        if (isset($map['VectordbEngineVersion'])) {
            $model->vectordbEngineVersion = $map['VectordbEngineVersion'];
        }
        if (isset($map['VectordbInstanceSpec'])) {
            $model->vectordbInstanceSpec = $map['VectordbInstanceSpec'];
        }
        if (isset($map['VectordbOption'])) {
            $model->vectordbOption = $map['VectordbOption'];
        }
        if (isset($map['VectordbPassword'])) {
            $model->vectordbPassword = $map['VectordbPassword'];
        }
        if (isset($map['VectordbResourceId'])) {
            $model->vectordbResourceId = $map['VectordbResourceId'];
        }
        if (isset($map['VectordbStorageSize'])) {
            $model->vectordbStorageSize = $map['VectordbStorageSize'];
        }
        if (isset($map['VectordbStorageType'])) {
            $model->vectordbStorageType = $map['VectordbStorageType'];
        }
        if (isset($map['VectordbType'])) {
            $model->vectordbType = $map['VectordbType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkspaceDescription'])) {
            $model->workspaceDescription = $map['WorkspaceDescription'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }
        if (isset($map['WorkspaceOption'])) {
            $model->workspaceOption = $map['WorkspaceOption'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
