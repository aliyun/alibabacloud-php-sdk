<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupPlanDetail extends Model
{
    /**
     * @var int
     */
    public $backupGatewayId;

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
     * @var int
     */
    public $backupPlanCreateTime;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var string
     */
    public $backupPlanStatus;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $backupSetDownloadDir;

    /**
     * @var string
     */
    public $backupSetDownloadFullDataFormat;

    /**
     * @var int
     */
    public $backupSetDownloadGatewayId;

    /**
     * @var string
     */
    public $backupSetDownloadIncrementDataFormat;

    /**
     * @var string
     */
    public $backupSetDownloadTargetType;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStorageType;

    /**
     * @var int
     */
    public $beginTimestampForRestore;

    /**
     * @var string
     */
    public $crossAliyunId;

    /**
     * @var string
     */
    public $crossRoleName;

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
     * @var int
     */
    public $endTimestampForRestore;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $OSSBucketName;

    /**
     * @var string
     */
    public $OSSBucketRegion;

    /**
     * @var bool
     */
    public $openBackupSetAutoDownload;

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
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var string
     */
    public $sourceEndpointIpPort;

    /**
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointUserName;
    protected $_name = [
        'backupGatewayId'                      => 'BackupGatewayId',
        'backupMethod'                         => 'BackupMethod',
        'backupObjects'                        => 'BackupObjects',
        'backupPeriod'                         => 'BackupPeriod',
        'backupPlanCreateTime'                 => 'BackupPlanCreateTime',
        'backupPlanId'                         => 'BackupPlanId',
        'backupPlanName'                       => 'BackupPlanName',
        'backupPlanStatus'                     => 'BackupPlanStatus',
        'backupRetentionPeriod'                => 'BackupRetentionPeriod',
        'backupSetDownloadDir'                 => 'BackupSetDownloadDir',
        'backupSetDownloadFullDataFormat'      => 'BackupSetDownloadFullDataFormat',
        'backupSetDownloadGatewayId'           => 'BackupSetDownloadGatewayId',
        'backupSetDownloadIncrementDataFormat' => 'BackupSetDownloadIncrementDataFormat',
        'backupSetDownloadTargetType'          => 'BackupSetDownloadTargetType',
        'backupStartTime'                      => 'BackupStartTime',
        'backupStorageType'                    => 'BackupStorageType',
        'beginTimestampForRestore'             => 'BeginTimestampForRestore',
        'crossAliyunId'                        => 'CrossAliyunId',
        'crossRoleName'                        => 'CrossRoleName',
        'duplicationArchivePeriod'             => 'DuplicationArchivePeriod',
        'duplicationInfrequentAccessPeriod'    => 'DuplicationInfrequentAccessPeriod',
        'enableBackupLog'                      => 'EnableBackupLog',
        'endTimestampForRestore'               => 'EndTimestampForRestore',
        'errMessage'                           => 'ErrMessage',
        'instanceClass'                        => 'InstanceClass',
        'OSSBucketName'                        => 'OSSBucketName',
        'OSSBucketRegion'                      => 'OSSBucketRegion',
        'openBackupSetAutoDownload'            => 'OpenBackupSetAutoDownload',
        'resourceGroupId'                      => 'ResourceGroupId',
        'sourceEndpointDatabaseName'           => 'SourceEndpointDatabaseName',
        'sourceEndpointInstanceID'             => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType'           => 'SourceEndpointInstanceType',
        'sourceEndpointIpPort'                 => 'SourceEndpointIpPort',
        'sourceEndpointOracleSID'              => 'SourceEndpointOracleSID',
        'sourceEndpointRegion'                 => 'SourceEndpointRegion',
        'sourceEndpointUserName'               => 'SourceEndpointUserName',
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
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupPlanCreateTime) {
            $res['BackupPlanCreateTime'] = $this->backupPlanCreateTime;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }
        if (null !== $this->backupPlanStatus) {
            $res['BackupPlanStatus'] = $this->backupPlanStatus;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupSetDownloadDir) {
            $res['BackupSetDownloadDir'] = $this->backupSetDownloadDir;
        }
        if (null !== $this->backupSetDownloadFullDataFormat) {
            $res['BackupSetDownloadFullDataFormat'] = $this->backupSetDownloadFullDataFormat;
        }
        if (null !== $this->backupSetDownloadGatewayId) {
            $res['BackupSetDownloadGatewayId'] = $this->backupSetDownloadGatewayId;
        }
        if (null !== $this->backupSetDownloadIncrementDataFormat) {
            $res['BackupSetDownloadIncrementDataFormat'] = $this->backupSetDownloadIncrementDataFormat;
        }
        if (null !== $this->backupSetDownloadTargetType) {
            $res['BackupSetDownloadTargetType'] = $this->backupSetDownloadTargetType;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStorageType) {
            $res['BackupStorageType'] = $this->backupStorageType;
        }
        if (null !== $this->beginTimestampForRestore) {
            $res['BeginTimestampForRestore'] = $this->beginTimestampForRestore;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
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
        if (null !== $this->endTimestampForRestore) {
            $res['EndTimestampForRestore'] = $this->endTimestampForRestore;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->OSSBucketName) {
            $res['OSSBucketName'] = $this->OSSBucketName;
        }
        if (null !== $this->OSSBucketRegion) {
            $res['OSSBucketRegion'] = $this->OSSBucketRegion;
        }
        if (null !== $this->openBackupSetAutoDownload) {
            $res['OpenBackupSetAutoDownload'] = $this->openBackupSetAutoDownload;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointIpPort) {
            $res['SourceEndpointIpPort'] = $this->sourceEndpointIpPort;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPlanDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
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
        if (isset($map['BackupPlanCreateTime'])) {
            $model->backupPlanCreateTime = $map['BackupPlanCreateTime'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }
        if (isset($map['BackupPlanStatus'])) {
            $model->backupPlanStatus = $map['BackupPlanStatus'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupSetDownloadDir'])) {
            $model->backupSetDownloadDir = $map['BackupSetDownloadDir'];
        }
        if (isset($map['BackupSetDownloadFullDataFormat'])) {
            $model->backupSetDownloadFullDataFormat = $map['BackupSetDownloadFullDataFormat'];
        }
        if (isset($map['BackupSetDownloadGatewayId'])) {
            $model->backupSetDownloadGatewayId = $map['BackupSetDownloadGatewayId'];
        }
        if (isset($map['BackupSetDownloadIncrementDataFormat'])) {
            $model->backupSetDownloadIncrementDataFormat = $map['BackupSetDownloadIncrementDataFormat'];
        }
        if (isset($map['BackupSetDownloadTargetType'])) {
            $model->backupSetDownloadTargetType = $map['BackupSetDownloadTargetType'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStorageType'])) {
            $model->backupStorageType = $map['BackupStorageType'];
        }
        if (isset($map['BeginTimestampForRestore'])) {
            $model->beginTimestampForRestore = $map['BeginTimestampForRestore'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
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
        if (isset($map['EndTimestampForRestore'])) {
            $model->endTimestampForRestore = $map['EndTimestampForRestore'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['OSSBucketName'])) {
            $model->OSSBucketName = $map['OSSBucketName'];
        }
        if (isset($map['OSSBucketRegion'])) {
            $model->OSSBucketRegion = $map['OSSBucketRegion'];
        }
        if (isset($map['OpenBackupSetAutoDownload'])) {
            $model->openBackupSetAutoDownload = $map['OpenBackupSetAutoDownload'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointIpPort'])) {
            $model->sourceEndpointIpPort = $map['SourceEndpointIpPort'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }

        return $model;
    }
}
