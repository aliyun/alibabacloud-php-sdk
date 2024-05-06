<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description The names of the databases that are backed up. The default value is **all**, which indicates that all databases are backed up.
     *
     * @example all
     *
     * @var string
     */
    public $backupDBNames;

    /**
     * @description The public download URL of the backup file.
     *
     * @example https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end time of the backup.
     *
     * @example 2019-03-14T05:31:13Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup file.
     *
     * @example 165*****50
     *
     * @var int
     */
    public $backupId;

    /**
     * @description The internal download URL of the backup file.
     *
     * >  You can use this URL to download the backup file from an Elastic Compute Service (ECS) instance that is connected to the ApsaraDB for Redis instance. The ECS instance must belong to the same classic network or reside in the same virtual private cloud (VPC) as the ApsaraDB for Redis instance.
     * @example https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The ID of the backup task.
     *
     * @example 24340
     *
     * @var int
     */
    public $backupJobID;

    /**
     * @description The backup method. Valid values:
     *
     *   **Logical**
     *   **Physical**
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The size of the backup file.
     *
     * @example 1024
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The start time of the backup.
     *
     * @example 2019-03-14T05:28:50Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the backup. Valid values:
     *
     *   **Success**
     *   **Failed**
     *
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The backup type. Valid values:
     *
     *   **FullBackup**
     *   **IncrementalBackup**
     *
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The engine version (major version) of the instance.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The node ID.
     *
     * >  If the instance uses the standard architecture, this parameter returns the instance ID.
     * @example r-bp10noxlhcoim2****-db-1
     *
     * @var string
     */
    public $nodeInstanceId;
    protected $_name = [
        'backupDBNames'             => 'BackupDBNames',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupJobID'               => 'BackupJobID',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'engineVersion'             => 'EngineVersion',
        'nodeInstanceId'            => 'NodeInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $model;
    }
}
