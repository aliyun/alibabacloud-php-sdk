<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var int
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupDBNames;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var int
     */
    public $backupSize;

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
    public $backupIntranetDownloadURL;
    protected $_name = [
        'backupId'                  => 'BackupId',
        'backupDBNames'             => 'BackupDBNames',
        'backupStatus'              => 'BackupStatus',
        'backupStartTime'           => 'BackupStartTime',
        'backupEndTime'             => 'BackupEndTime',
        'backupType'                => 'BackupType',
        'backupMode'                => 'BackupMode',
        'backupMethod'              => 'BackupMethod',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupSize'                => 'BackupSize',
        'engineVersion'             => 'EngineVersion',
        'nodeInstanceId'            => 'NodeInstanceId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupDBNames) {
            $res['BackupDBNames'] = $this->backupDBNames;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }

        return $model;
    }
}
