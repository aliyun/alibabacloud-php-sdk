<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description The name of the database that has been backed up.
     *
     * @example database
     *
     * @var string
     */
    public $backupDBNames;

    /**
     * @description The URL that is used to download the backup set over the Internet. If the backup set cannot be downloaded, an empty string is returned.
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end time of the backup. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-01-14T03:57:34Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup set.
     *
     * @example 32102****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The internal download URL of the backup set.
     *
     * >  You can use the URL to download the specified backup set on an Elastic Compute Service (ECS) instance that is in the same virtual private cloud (VPC) as the ApsaraDB for MongoDB instance.
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The ID of the backup task.
     *
     * @example 1123xxxx
     *
     * @var string
     */
    public $backupJobId;

    /**
     * @description The method that is used to generate the backup set. Valid values:
     *
     *   **Snapshot**
     *   **Physical**
     *   **Logical**
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode of the backup set. Valid values:
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
     * @description The name of the backup set (invalid now).
     *
     * @example 12345678.tar.gz
     *
     * @var string
     */
    public $backupName;

    /**
     * @description The scale of the backup set (invalid now).
     *
     * @example DBInstance
     *
     * @var string
     */
    public $backupScale;

    /**
     * @description The size of the backup set. Unit: bytes.
     *
     * @example 6168576
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The start time of the backup. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-01-14T03:56:17Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the backup task. Valid values:
     *
     *   **Success**: The backup task is successful.
     *   **Failed**: The backup task failed.
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
     * @var string
     */
    public $engineVersion;

    /**
     * @description Availability of the backup set.
     * - 1: available
     * @example 1
     *
     * @var bool
     */
    public $isAvail;
    protected $_name = [
        'backupDBNames'             => 'BackupDBNames',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupJobId'               => 'BackupJobId',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupName'                => 'BackupName',
        'backupScale'               => 'BackupScale',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'engineVersion'             => 'EngineVersion',
        'isAvail'                   => 'IsAvail',
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
