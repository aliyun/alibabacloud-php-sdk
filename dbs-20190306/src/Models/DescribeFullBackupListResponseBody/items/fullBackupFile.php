<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody\items;

use AlibabaCloud\Dara\Model;

class fullBackupFile extends Model
{
    /**
     * @var string
     */
    public $backupGatewayIdentifier;

    /**
     * @var string
     */
    public $backupObjects;

    /**
     * @var int
     */
    public $backupSetExpiredTime;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var int
     */
    public $createTime;

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
    public $endTime;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $logicalFullBackupProgress;

    /**
     * @var int
     */
    public $logicalStructureBackupProgress;

    /**
     * @var string
     */
    public $sourceEndpointEnableSsl;

    /**
     * @var string
     */
    public $sourceEndpointHost;

    /**
     * @var string
     */
    public $sourceEndpointInstanceId;

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
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageEncryptMethod;

    /**
     * @var string
     */
    public $storageMethod;
    protected $_name = [
        'backupGatewayIdentifier' => 'BackupGatewayIdentifier',
        'backupObjects' => 'BackupObjects',
        'backupSetExpiredTime' => 'BackupSetExpiredTime',
        'backupSetId' => 'BackupSetId',
        'backupSize' => 'BackupSize',
        'backupStatus' => 'BackupStatus',
        'createTime' => 'CreateTime',
        'crossAliyunId' => 'CrossAliyunId',
        'crossRoleName' => 'CrossRoleName',
        'endTime' => 'EndTime',
        'errMessage' => 'ErrMessage',
        'finishTime' => 'FinishTime',
        'logicalFullBackupProgress' => 'LogicalFullBackupProgress',
        'logicalStructureBackupProgress' => 'LogicalStructureBackupProgress',
        'sourceEndpointEnableSsl' => 'SourceEndpointEnableSsl',
        'sourceEndpointHost' => 'SourceEndpointHost',
        'sourceEndpointInstanceId' => 'SourceEndpointInstanceId',
        'sourceEndpointInstanceType' => 'SourceEndpointInstanceType',
        'sourceEndpointIpPort' => 'SourceEndpointIpPort',
        'sourceEndpointPort' => 'SourceEndpointPort',
        'sourceEndpointRegion' => 'SourceEndpointRegion',
        'sourceEndpointUserName' => 'SourceEndpointUserName',
        'startTime' => 'StartTime',
        'storageEncryptMethod' => 'StorageEncryptMethod',
        'storageMethod' => 'StorageMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupGatewayIdentifier) {
            $res['BackupGatewayIdentifier'] = $this->backupGatewayIdentifier;
        }

        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }

        if (null !== $this->backupSetExpiredTime) {
            $res['BackupSetExpiredTime'] = $this->backupSetExpiredTime;
        }

        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }

        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }

        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->logicalFullBackupProgress) {
            $res['LogicalFullBackupProgress'] = $this->logicalFullBackupProgress;
        }

        if (null !== $this->logicalStructureBackupProgress) {
            $res['LogicalStructureBackupProgress'] = $this->logicalStructureBackupProgress;
        }

        if (null !== $this->sourceEndpointEnableSsl) {
            $res['SourceEndpointEnableSsl'] = $this->sourceEndpointEnableSsl;
        }

        if (null !== $this->sourceEndpointHost) {
            $res['SourceEndpointHost'] = $this->sourceEndpointHost;
        }

        if (null !== $this->sourceEndpointInstanceId) {
            $res['SourceEndpointInstanceId'] = $this->sourceEndpointInstanceId;
        }

        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }

        if (null !== $this->sourceEndpointIpPort) {
            $res['SourceEndpointIpPort'] = $this->sourceEndpointIpPort;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->storageEncryptMethod) {
            $res['StorageEncryptMethod'] = $this->storageEncryptMethod;
        }

        if (null !== $this->storageMethod) {
            $res['StorageMethod'] = $this->storageMethod;
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
        if (isset($map['BackupGatewayIdentifier'])) {
            $model->backupGatewayIdentifier = $map['BackupGatewayIdentifier'];
        }

        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }

        if (isset($map['BackupSetExpiredTime'])) {
            $model->backupSetExpiredTime = $map['BackupSetExpiredTime'];
        }

        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }

        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['LogicalFullBackupProgress'])) {
            $model->logicalFullBackupProgress = $map['LogicalFullBackupProgress'];
        }

        if (isset($map['LogicalStructureBackupProgress'])) {
            $model->logicalStructureBackupProgress = $map['LogicalStructureBackupProgress'];
        }

        if (isset($map['SourceEndpointEnableSsl'])) {
            $model->sourceEndpointEnableSsl = $map['SourceEndpointEnableSsl'];
        }

        if (isset($map['SourceEndpointHost'])) {
            $model->sourceEndpointHost = $map['SourceEndpointHost'];
        }

        if (isset($map['SourceEndpointInstanceId'])) {
            $model->sourceEndpointInstanceId = $map['SourceEndpointInstanceId'];
        }

        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }

        if (isset($map['SourceEndpointIpPort'])) {
            $model->sourceEndpointIpPort = $map['SourceEndpointIpPort'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StorageEncryptMethod'])) {
            $model->storageEncryptMethod = $map['StorageEncryptMethod'];
        }

        if (isset($map['StorageMethod'])) {
            $model->storageMethod = $map['StorageMethod'];
        }

        return $model;
    }
}
