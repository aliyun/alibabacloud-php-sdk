<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupLog extends Model
{
    /**
     * @description The time when the backup task ended. The time follows the ISO 8601 standard in the `YYYY-MM-DD\\"T\\"HH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-02-12T03:55:31Z
     *
     * @var string
     */
    public $backupLogEndTime;

    /**
     * @description The ID of the backup log.
     *
     * @example 1111111111
     *
     * @var string
     */
    public $backupLogId;

    /**
     * @description The name of the backup log.
     *
     * @example ib_logfile1
     *
     * @var string
     */
    public $backupLogName;

    /**
     * @description The size of the backup log. Unit: bytes.
     *
     * @example 1073741824
     *
     * @var string
     */
    public $backupLogSize;

    /**
     * @description The time when the backup task started. The time follows the ISO 8601 standard in the `YYYY-MM-DD\\"T\\"HH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-02-12T03:54:43Z
     *
     * @var string
     */
    public $backupLogStartTime;

    /**
     * @description The public URL used to download the backup log.
     *
     * @example http://***********.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description The internal URL used to download the backup log.
     *
     * @example http://***********.oss-cn-hangzhou-internal.aliyuncs.com
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @description The time when the download URL expires.
     *
     * @example 2020-02-14T08:40:50Z
     *
     * @var string
     */
    public $linkExpiredTime;
    protected $_name = [
        'backupLogEndTime'     => 'BackupLogEndTime',
        'backupLogId'          => 'BackupLogId',
        'backupLogName'        => 'BackupLogName',
        'backupLogSize'        => 'BackupLogSize',
        'backupLogStartTime'   => 'BackupLogStartTime',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLogEndTime) {
            $res['BackupLogEndTime'] = $this->backupLogEndTime;
        }
        if (null !== $this->backupLogId) {
            $res['BackupLogId'] = $this->backupLogId;
        }
        if (null !== $this->backupLogName) {
            $res['BackupLogName'] = $this->backupLogName;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->backupLogStartTime) {
            $res['BackupLogStartTime'] = $this->backupLogStartTime;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupLogEndTime'])) {
            $model->backupLogEndTime = $map['BackupLogEndTime'];
        }
        if (isset($map['BackupLogId'])) {
            $model->backupLogId = $map['BackupLogId'];
        }
        if (isset($map['BackupLogName'])) {
            $model->backupLogName = $map['BackupLogName'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['BackupLogStartTime'])) {
            $model->backupLogStartTime = $map['BackupLogStartTime'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }

        return $model;
    }
}
