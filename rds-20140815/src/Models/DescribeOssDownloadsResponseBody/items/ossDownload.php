<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponseBody\items;

use AlibabaCloud\Tea\Model;

class ossDownload extends Model
{
    /**
     * @description The backup type. Valid values:
     *
     *   **Database**: full backup file
     *   **Differential_Database**: incremental backup file
     *   **Transaction_Log**: log backup file
     *
     * @example Database
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The time when the backup file was created in the download list. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-08-17T12:45:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the backup file.
     *
     * @example App description
     *
     * @var string
     */
    public $description;

    /**
     * @description The end of the time range during which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-08-27T12:45:15Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the backup file stored in the Object Storage Service (OSS) bucket.
     *
     * @example test
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the backup file. Unit: MB
     *
     * @example 2
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description Indicates whether the backup file is available. Valid values: **True and False**.
     *
     * @example True
     *
     * @var string
     */
    public $isAvailable;

    /**
     * @description The state of the backup file. Valid values:
     *
     *   **NoStart**
     *   **Downloading**
     *   **Finished**
     *   **DownloadFailed**
     *   **VerifyFailed**
     *   **Deleted**
     *   **DeleteFailed**
     *   **CheckSuccess**
     *   **CheckFailed**
     *   **Restoring**
     *   **Restored**
     *   **RestoreFailed**
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backupMode'  => 'BackupMode',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'endTime'     => 'EndTime',
        'fileName'    => 'FileName',
        'fileSize'    => 'FileSize',
        'isAvailable' => 'IsAvailable',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDownload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
