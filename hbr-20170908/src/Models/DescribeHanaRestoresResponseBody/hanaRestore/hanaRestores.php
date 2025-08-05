<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody\hanaRestore;

use AlibabaCloud\Dara\Model;

class hanaRestores extends Model
{
    /**
     * @var int
     */
    public $backupID;

    /**
     * @var string
     */
    public $backupPrefix;

    /**
     * @var bool
     */
    public $checkAccess;

    /**
     * @var bool
     */
    public $clearLog;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentPhase;

    /**
     * @var int
     */
    public $currentProgress;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $databaseRestoreId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $logPosition;

    /**
     * @var int
     */
    public $maxPhase;

    /**
     * @var int
     */
    public $maxProgress;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $reachedTime;

    /**
     * @var int
     */
    public $recoveryPointInTime;

    /**
     * @var string
     */
    public $restoreId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceClusterId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $systemCopy;

    /**
     * @var bool
     */
    public $useCatalog;

    /**
     * @var bool
     */
    public $useDelta;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'backupID' => 'BackupID',
        'backupPrefix' => 'BackupPrefix',
        'checkAccess' => 'CheckAccess',
        'clearLog' => 'ClearLog',
        'clusterId' => 'ClusterId',
        'currentPhase' => 'CurrentPhase',
        'currentProgress' => 'CurrentProgress',
        'databaseName' => 'DatabaseName',
        'databaseRestoreId' => 'DatabaseRestoreId',
        'endTime' => 'EndTime',
        'logPosition' => 'LogPosition',
        'maxPhase' => 'MaxPhase',
        'maxProgress' => 'MaxProgress',
        'message' => 'Message',
        'mode' => 'Mode',
        'phase' => 'Phase',
        'reachedTime' => 'ReachedTime',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'restoreId' => 'RestoreId',
        'source' => 'Source',
        'sourceClusterId' => 'SourceClusterId',
        'startTime' => 'StartTime',
        'state' => 'State',
        'status' => 'Status',
        'systemCopy' => 'SystemCopy',
        'useCatalog' => 'UseCatalog',
        'useDelta' => 'UseDelta',
        'vaultId' => 'VaultId',
        'volumeId' => 'VolumeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupID) {
            $res['BackupID'] = $this->backupID;
        }

        if (null !== $this->backupPrefix) {
            $res['BackupPrefix'] = $this->backupPrefix;
        }

        if (null !== $this->checkAccess) {
            $res['CheckAccess'] = $this->checkAccess;
        }

        if (null !== $this->clearLog) {
            $res['ClearLog'] = $this->clearLog;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentPhase) {
            $res['CurrentPhase'] = $this->currentPhase;
        }

        if (null !== $this->currentProgress) {
            $res['CurrentProgress'] = $this->currentProgress;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->databaseRestoreId) {
            $res['DatabaseRestoreId'] = $this->databaseRestoreId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }

        if (null !== $this->maxPhase) {
            $res['MaxPhase'] = $this->maxPhase;
        }

        if (null !== $this->maxProgress) {
            $res['MaxProgress'] = $this->maxProgress;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->reachedTime) {
            $res['ReachedTime'] = $this->reachedTime;
        }

        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }

        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemCopy) {
            $res['SystemCopy'] = $this->systemCopy;
        }

        if (null !== $this->useCatalog) {
            $res['UseCatalog'] = $this->useCatalog;
        }

        if (null !== $this->useDelta) {
            $res['UseDelta'] = $this->useDelta;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
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
        if (isset($map['BackupID'])) {
            $model->backupID = $map['BackupID'];
        }

        if (isset($map['BackupPrefix'])) {
            $model->backupPrefix = $map['BackupPrefix'];
        }

        if (isset($map['CheckAccess'])) {
            $model->checkAccess = $map['CheckAccess'];
        }

        if (isset($map['ClearLog'])) {
            $model->clearLog = $map['ClearLog'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentPhase'])) {
            $model->currentPhase = $map['CurrentPhase'];
        }

        if (isset($map['CurrentProgress'])) {
            $model->currentProgress = $map['CurrentProgress'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DatabaseRestoreId'])) {
            $model->databaseRestoreId = $map['DatabaseRestoreId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }

        if (isset($map['MaxPhase'])) {
            $model->maxPhase = $map['MaxPhase'];
        }

        if (isset($map['MaxProgress'])) {
            $model->maxProgress = $map['MaxProgress'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['ReachedTime'])) {
            $model->reachedTime = $map['ReachedTime'];
        }

        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }

        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemCopy'])) {
            $model->systemCopy = $map['SystemCopy'];
        }

        if (isset($map['UseCatalog'])) {
            $model->useCatalog = $map['UseCatalog'];
        }

        if (isset($map['UseDelta'])) {
            $model->useDelta = $map['UseDelta'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
