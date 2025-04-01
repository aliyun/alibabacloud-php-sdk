<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Dara\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $backupDBNames;

    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var int
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var int
     */
    public $backupJobID;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @var string
     */
    public $recoverConfigMode;
    protected $_name = [
        'backupDBNames' => 'BackupDBNames',
        'backupDownloadURL' => 'BackupDownloadURL',
        'backupEndTime' => 'BackupEndTime',
        'backupId' => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupJobID' => 'BackupJobID',
        'backupMethod' => 'BackupMethod',
        'backupMode' => 'BackupMode',
        'backupSize' => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus' => 'BackupStatus',
        'backupType' => 'BackupType',
        'engineVersion' => 'EngineVersion',
        'nodeInstanceId' => 'NodeInstanceId',
        'recoverConfigMode' => 'RecoverConfigMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDBNames) {
            $res['BackupDBNames'] = $this->backupDBNames;
        }

        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }

        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }

        if (null !== $this->backupJobID) {
            $res['BackupJobID'] = $this->backupJobID;
        }

        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }

        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }

        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }

        if (null !== $this->recoverConfigMode) {
            $res['RecoverConfigMode'] = $this->recoverConfigMode;
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
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }

        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }

        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }

        if (isset($map['BackupJobID'])) {
            $model->backupJobID = $map['BackupJobID'];
        }

        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }

        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }

        if (isset($map['RecoverConfigMode'])) {
            $model->recoverConfigMode = $map['RecoverConfigMode'];
        }

        return $model;
    }
}
