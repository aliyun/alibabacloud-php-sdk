<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description The URL that is used to download the data backup file over the Internet. If the data backup file cannot be downloaded, an empty string is returned.
     *
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end time of the backup.
     *
     * The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     * @example 2019-02-13T12:20:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the data backup file.
     *
     * @example 321020562
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The URL that is used to download the data backup file over an internal network. If the data backup file cannot be downloaded, an empty string is returned.
     *
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The method that is used to generate the data backup file. Valid values:
     *
     *   **Logical**: logical backup
     *   **Physical**: physical backup
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode of the data backup file. Valid values:
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
     * @description The size of the data backup file. Unit: bytes.
     *
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The start time of the backup.
     *
     * The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     * @example 2019-02-03T12:20:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the data backup file. Valid values:
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
     * @description The point in time at which the data in the data backup file is consistent. The return value of this parameter is a timestamp.
     *
     * >  If the instance runs MySQL 5.6, a timestamp is returned. Otherwise, the value 0 is returned.
     * @example 1576506856
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceComment;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The No. of the instance that generates the data backup file. This parameter is used to indicate whether the instance that generates the data backup file is a primary instance or a secondary instance.
     *
     * @example 5882781
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @description Indicates whether the data backup file is available. Valid values:
     *
     *   **0**: The data backup file is unavailable.
     *   **1**: The data backup file is available.
     *
     * @example 1
     *
     * @var int
     */
    public $isAvail;

    /**
     * @description The status of the data backup file that is used to restore individual databases or tables. Valid values:
     *
     *   **OK**: The data backup file is normal.
     *   **LARGE**: The data backup file contains an abnormally large number of tables. It cannot be used to restore individual databases or tables.
     *   **EMPTY**: The data backup file is generated from a failed backup task.
     *
     * @example OK
     *
     * @var string
     */
    public $metaStatus;

    /**
     * @description Indicates whether the data backup file can be deleted. Valid values:
     *
     *   **Enabled**: The data backup file can be deleted.
     *   **Disabled**: The data backup file cannot be deleted.
     *
     * @example Disabled
     *
     * @var string
     */
    public $storeStatus;
    protected $_name = [
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'consistentTime'            => 'ConsistentTime',
        'DBInstanceComment'         => 'DBInstanceComment',
        'DBInstanceId'              => 'DBInstanceId',
        'hostInstanceID'            => 'HostInstanceID',
        'isAvail'                   => 'IsAvail',
        'metaStatus'                => 'MetaStatus',
        'storeStatus'               => 'StoreStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->DBInstanceComment) {
            $res['DBInstanceComment'] = $this->DBInstanceComment;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
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
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['DBInstanceComment'])) {
            $model->DBInstanceComment = $map['DBInstanceComment'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }

        return $model;
    }
}
