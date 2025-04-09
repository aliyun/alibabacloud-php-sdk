<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsResponseBody\backups;

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
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var string
     */
    public $backupJobId;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupName;

    /**
     * @var string
     */
    public $backupScale;

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
     * @var bool
     */
    public $isAvail;
    protected $_name = [
        'backupDBNames' => 'BackupDBNames',
        'backupDownloadURL' => 'BackupDownloadURL',
        'backupEndTime' => 'BackupEndTime',
        'backupId' => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupJobId' => 'BackupJobId',
        'backupMethod' => 'BackupMethod',
        'backupMode' => 'BackupMode',
        'backupName' => 'BackupName',
        'backupScale' => 'BackupScale',
        'backupSize' => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus' => 'BackupStatus',
        'backupType' => 'BackupType',
        'engineVersion' => 'EngineVersion',
        'isAvail' => 'IsAvail',
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

        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }

        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->backupName) {
            $res['BackupName'] = $this->backupName;
        }

        if (null !== $this->backupScale) {
            $res['BackupScale'] = $this->backupScale;
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

        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
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

        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }

        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['BackupName'])) {
            $model->backupName = $map['BackupName'];
        }

        if (isset($map['BackupScale'])) {
            $model->backupScale = $map['BackupScale'];
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

        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        return $model;
    }
}
