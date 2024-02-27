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
     * @description The Internet download URL of the backup set. If the download URL is unavailable, this parameter is an empty string.
     *
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/custins5559****\/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARf****&Signature=lkFPjOY%2F8adB18vnOCbtmT7****&Region=cn-hangzhou
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end of the backup time range. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
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
     * @var int
     */
    public $backupId;

    /**
     * @description The internal download URL of the backup set.
     *
     * > You can use this URL to download the backup set from on the Elastic Compute Service (ECS) instance which is on the same network as the ApsaraDB for MongoDB instance.
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/custins5559*****\/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARfi****&Signature=lkFPjOY%2F8adB18vnOCbtmT7ii****&Region=cn-hangzhou
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var int
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
     *   **Automated**:
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The size of the backup set. Unit: bytes.
     *
     * @example 6168576
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The beginning of the backup time range. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-01-14T03:56:17Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the backup task. Valid values:
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
    protected $_name = [
        'backupDBNames'             => 'BackupDBNames',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupJobId'               => 'BackupJobId',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
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

        return $model;
    }
}
