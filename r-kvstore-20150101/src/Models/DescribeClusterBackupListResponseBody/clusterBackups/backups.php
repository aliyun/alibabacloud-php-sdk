<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups\extraInfo;

class backups extends Model
{
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
    public $backupName;

    /**
     * @var string
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
    public $engine;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isAvail;

    /**
     * @var string
     */
    public $recoverConfigMode;
    protected $_name = [
        'backupDownloadURL' => 'BackupDownloadURL',
        'backupEndTime' => 'BackupEndTime',
        'backupId' => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupName' => 'BackupName',
        'backupSize' => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus' => 'BackupStatus',
        'engine' => 'Engine',
        'extraInfo' => 'ExtraInfo',
        'instanceName' => 'InstanceName',
        'isAvail' => 'IsAvail',
        'recoverConfigMode' => 'RecoverConfigMode',
    ];

    public function validate()
    {
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->backupName) {
            $res['BackupName'] = $this->backupName;
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

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
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

        if (isset($map['BackupName'])) {
            $model->backupName = $map['BackupName'];
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

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        if (isset($map['RecoverConfigMode'])) {
            $model->recoverConfigMode = $map['RecoverConfigMode'];
        }

        return $model;
    }
}
