<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups;

use AlibabaCloud\Tea\Model;

class backups extends Model
{
    /**
     * @description The URL that is used to download the backup set over the Internet. If the backup set cannot be downloaded, an empty string is returned.
     *
     * @example http://oss.com/xxx
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end of the backup time range. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-10-16T19:33:20Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup set.
     *
     * @example 738025367
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The URL that is used to download the backup set over an internal network. If the backup set cannot be downloaded, null is returned.
     *
     * @example http://oss.com/xxx
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The backup name.
     *
     * @example 12345678.tar.gz
     *
     * @var string
     */
    public $backupName;

    /**
     * @description The size of the backup file. Unit: bytes.
     *
     * @example 77544597650
     *
     * @var string
     */
    public $backupSize;

    /**
     * @description The beginning of the backup time range. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-10-16T19:33:20Z
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
     * @description The name of the shard.
     *
     * @example d-bp16cb162771****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the backup set is available. Valid values:
     *
     *   **0**: unavailable
     *   **1**: available
     *
     * @example 1
     *
     * @var string
     */
    public $isAvail;
    protected $_name = [
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupName'                => 'BackupName',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'instanceName'              => 'InstanceName',
        'isAvail'                   => 'IsAvail',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backups
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        return $model;
    }
}
