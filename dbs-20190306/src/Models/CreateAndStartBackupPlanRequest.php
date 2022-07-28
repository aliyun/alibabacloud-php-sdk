<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class CreateAndStartBackupPlanRequest extends Model
{
    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var int
     */
    public $backupLogIntervalSeconds;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupObjects;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var int
     */
    public $backupRateLimit;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var int
     */
    public $backupSpeedLimit;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStorageType;

    /**
     * @var string
     */
    public $backupStrategyType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $crossAliyunId;

    /**
     * @var string
     */
    public $crossRoleName;

    /**
     * @var string
     */
    public $databaseRegion;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var int
     */
    public $duplicationArchivePeriod;

    /**
     * @var int
     */
    public $duplicationInfrequentAccessPeriod;

    /**
     * @var bool
     */
    public $enableBackupLog;

    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $OSSBucketName;

    /**
     * @var string
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
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @var int
     */
    public $sourceEndpointPort;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @var string
     */
    public $storageRegion;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'backupGatewayId'                   => 'BackupGatewayId',
        'backupLogIntervalSeconds'          => 'BackupLogIntervalSeconds',
        'backupMethod'                      => 'BackupMethod',
        'backupObjects'                     => 'BackupObjects',
        'backupPeriod'                      => 'BackupPeriod',
        'backupPlanId'                      => 'BackupPlanId',
        'backupPlanName'                    => 'BackupPlanName',
        'backupRateLimit'                   => 'BackupRateLimit',
        'backupRetentionPeriod'             => 'BackupRetentionPeriod',
        'backupSpeedLimit'                  => 'BackupSpeedLimit',
        'backupStartTime'                   => 'BackupStartTime',
        'backupStorageType'                 => 'BackupStorageType',
        'backupStrategyType'                => 'BackupStrategyType',
        'clientToken'                       => 'ClientToken',
        'crossAliyunId'                     => 'CrossAliyunId',
        'crossRoleName'                     => 'CrossRoleName',
        'databaseRegion'                    => 'DatabaseRegion',
        'databaseType'                      => 'DatabaseType',
        'duplicationArchivePeriod'          => 'DuplicationArchivePeriod',
        'duplicationInfrequentAccessPeriod' => 'DuplicationInfrequentAccessPeriod',
        'enableBackupLog'                   => 'EnableBackupLog',
        'fromApp'                           => 'FromApp',
        'instanceClass'                     => 'InstanceClass',
        'instanceType'                      => 'InstanceType',
        'OSSBucketName'                     => 'OSSBucketName',
        'ownerId'                           => 'OwnerId',
        'payType'                           => 'PayType',
        'period'                            => 'Period',
        'region'                            => 'Region',
        'resourceGroupId'                   => 'ResourceGroupId',
        'sourceEndpointDatabaseName'        => 'SourceEndpointDatabaseName',
        'sourceEndpointIP'                  => 'SourceEndpointIP',
        'sourceEndpointInstanceID'          => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType'        => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID'           => 'SourceEndpointOracleSID',
        'sourceEndpointPassword'            => 'SourceEndpointPassword',
        'sourceEndpointPort'                => 'SourceEndpointPort',
        'sourceEndpointRegion'              => 'SourceEndpointRegion',
        'sourceEndpointUserName'            => 'SourceEndpointUserName',
        'storageRegion'                     => 'StorageRegion',
        'storageType'                       => 'StorageType',
        'usedTime'                          => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->backupLogIntervalSeconds) {
            $res['BackupLogIntervalSeconds'] = $this->backupLogIntervalSeconds;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }
        if (null !== $this->backupRateLimit) {
            $res['BackupRateLimit'] = $this->backupRateLimit;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupSpeedLimit) {
            $res['BackupSpeedLimit'] = $this->backupSpeedLimit;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStorageType) {
            $res['BackupStorageType'] = $this->backupStorageType;
        }
        if (null !== $this->backupStrategyType) {
            $res['BackupStrategyType'] = $this->backupStrategyType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }
        if (null !== $this->databaseRegion) {
            $res['DatabaseRegion'] = $this->databaseRegion;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->duplicationArchivePeriod) {
            $res['DuplicationArchivePeriod'] = $this->duplicationArchivePeriod;
        }
        if (null !== $this->duplicationInfrequentAccessPeriod) {
            $res['DuplicationInfrequentAccessPeriod'] = $this->duplicationInfrequentAccessPeriod;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->OSSBucketName) {
            $res['OSSBucketName'] = $this->OSSBucketName;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }
        if (null !== $this->storageRegion) {
            $res['StorageRegion'] = $this->storageRegion;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndStartBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['BackupLogIntervalSeconds'])) {
            $model->backupLogIntervalSeconds = $map['BackupLogIntervalSeconds'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }
        if (isset($map['BackupRateLimit'])) {
            $model->backupRateLimit = $map['BackupRateLimit'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupSpeedLimit'])) {
            $model->backupSpeedLimit = $map['BackupSpeedLimit'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStorageType'])) {
            $model->backupStorageType = $map['BackupStorageType'];
        }
        if (isset($map['BackupStrategyType'])) {
            $model->backupStrategyType = $map['BackupStrategyType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }
        if (isset($map['DatabaseRegion'])) {
            $model->databaseRegion = $map['DatabaseRegion'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['DuplicationArchivePeriod'])) {
            $model->duplicationArchivePeriod = $map['DuplicationArchivePeriod'];
        }
        if (isset($map['DuplicationInfrequentAccessPeriod'])) {
            $model->duplicationInfrequentAccessPeriod = $map['DuplicationInfrequentAccessPeriod'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OSSBucketName'])) {
            $model->OSSBucketName = $map['OSSBucketName'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }
        if (isset($map['StorageRegion'])) {
            $model->storageRegion = $map['StorageRegion'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
