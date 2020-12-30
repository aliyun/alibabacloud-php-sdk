<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ConfigureBackupPlanRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @var int
     */
    public $sourceEndpointPort;

    /**
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $OSSBucketName;

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
    public $backupStartTime;

    /**
     * @var bool
     */
    public $enableBackupLog;

    /**
     * @var int
     */
    public $backupLogIntervalSeconds;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var int
     */
    public $duplicationInfrequentAccessPeriod;

    /**
     * @var int
     */
    public $duplicationArchivePeriod;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @var string
     */
    public $backupStorageType;

    /**
     * @var int
     */
    public $backupSpeedLimit;

    /**
     * @var int
     */
    public $backupRateLimit;

    /**
     * @var string
     */
    public $backupStrategyType;

    /**
     * @var string
     */
    public $crossAliyunId;

    /**
     * @var string
     */
    public $crossRoleName;

    /**
     * @var bool
     */
    public $autoStartBackup;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'backupPlanId'                      => 'BackupPlanId',
        'sourceEndpointInstanceType'        => 'SourceEndpointInstanceType',
        'sourceEndpointRegion'              => 'SourceEndpointRegion',
        'sourceEndpointInstanceID'          => 'SourceEndpointInstanceID',
        'sourceEndpointIP'                  => 'SourceEndpointIP',
        'sourceEndpointPort'                => 'SourceEndpointPort',
        'sourceEndpointDatabaseName'        => 'SourceEndpointDatabaseName',
        'sourceEndpointUserName'            => 'SourceEndpointUserName',
        'sourceEndpointPassword'            => 'SourceEndpointPassword',
        'backupGatewayId'                   => 'BackupGatewayId',
        'OSSBucketName'                     => 'OSSBucketName',
        'backupObjects'                     => 'BackupObjects',
        'backupPeriod'                      => 'BackupPeriod',
        'backupStartTime'                   => 'BackupStartTime',
        'enableBackupLog'                   => 'EnableBackupLog',
        'backupLogIntervalSeconds'          => 'BackupLogIntervalSeconds',
        'backupRetentionPeriod'             => 'BackupRetentionPeriod',
        'duplicationInfrequentAccessPeriod' => 'DuplicationInfrequentAccessPeriod',
        'duplicationArchivePeriod'          => 'DuplicationArchivePeriod',
        'backupPlanName'                    => 'BackupPlanName',
        'sourceEndpointOracleSID'           => 'SourceEndpointOracleSID',
        'backupStorageType'                 => 'BackupStorageType',
        'backupSpeedLimit'                  => 'BackupSpeedLimit',
        'backupRateLimit'                   => 'BackupRateLimit',
        'backupStrategyType'                => 'BackupStrategyType',
        'crossAliyunId'                     => 'CrossAliyunId',
        'crossRoleName'                     => 'CrossRoleName',
        'autoStartBackup'                   => 'AutoStartBackup',
        'ownerId'                           => 'OwnerId',
        'clientToken'                       => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->OSSBucketName) {
            $res['OSSBucketName'] = $this->OSSBucketName;
        }
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->backupLogIntervalSeconds) {
            $res['BackupLogIntervalSeconds'] = $this->backupLogIntervalSeconds;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->duplicationInfrequentAccessPeriod) {
            $res['DuplicationInfrequentAccessPeriod'] = $this->duplicationInfrequentAccessPeriod;
        }
        if (null !== $this->duplicationArchivePeriod) {
            $res['DuplicationArchivePeriod'] = $this->duplicationArchivePeriod;
        }
        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->backupStorageType) {
            $res['BackupStorageType'] = $this->backupStorageType;
        }
        if (null !== $this->backupSpeedLimit) {
            $res['BackupSpeedLimit'] = $this->backupSpeedLimit;
        }
        if (null !== $this->backupRateLimit) {
            $res['BackupRateLimit'] = $this->backupRateLimit;
        }
        if (null !== $this->backupStrategyType) {
            $res['BackupStrategyType'] = $this->backupStrategyType;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }
        if (null !== $this->autoStartBackup) {
            $res['AutoStartBackup'] = $this->autoStartBackup;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['OSSBucketName'])) {
            $model->OSSBucketName = $map['OSSBucketName'];
        }
        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['BackupLogIntervalSeconds'])) {
            $model->backupLogIntervalSeconds = $map['BackupLogIntervalSeconds'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['DuplicationInfrequentAccessPeriod'])) {
            $model->duplicationInfrequentAccessPeriod = $map['DuplicationInfrequentAccessPeriod'];
        }
        if (isset($map['DuplicationArchivePeriod'])) {
            $model->duplicationArchivePeriod = $map['DuplicationArchivePeriod'];
        }
        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['BackupStorageType'])) {
            $model->backupStorageType = $map['BackupStorageType'];
        }
        if (isset($map['BackupSpeedLimit'])) {
            $model->backupSpeedLimit = $map['BackupSpeedLimit'];
        }
        if (isset($map['BackupRateLimit'])) {
            $model->backupRateLimit = $map['BackupRateLimit'];
        }
        if (isset($map['BackupStrategyType'])) {
            $model->backupStrategyType = $map['BackupStrategyType'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }
        if (isset($map['AutoStartBackup'])) {
            $model->autoStartBackup = $map['AutoStartBackup'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
