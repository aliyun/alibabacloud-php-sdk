<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupLog extends Model
{
    /**
     * @var string
     */
    public $backupLogId;

    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $backupLogStartTime;

    /**
     * @var string
     */
    public $backupLogEndTime;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $backupLogSize;

    /**
     * @var string
     */
    public $backupLogName;
    protected $_name = [
        'backupLogId'          => 'BackupLogId',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'backupLogStartTime'   => 'BackupLogStartTime',
        'backupLogEndTime'     => 'BackupLogEndTime',
        'downloadLink'         => 'DownloadLink',
        'backupLogSize'        => 'BackupLogSize',
        'backupLogName'        => 'BackupLogName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLogId) {
            $res['BackupLogId'] = $this->backupLogId;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->backupLogStartTime) {
            $res['BackupLogStartTime'] = $this->backupLogStartTime;
        }
        if (null !== $this->backupLogEndTime) {
            $res['BackupLogEndTime'] = $this->backupLogEndTime;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->backupLogName) {
            $res['BackupLogName'] = $this->backupLogName;
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
        if (isset($map['BackupLogId'])) {
            $model->backupLogId = $map['BackupLogId'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['BackupLogStartTime'])) {
            $model->backupLogStartTime = $map['BackupLogStartTime'];
        }
        if (isset($map['BackupLogEndTime'])) {
            $model->backupLogEndTime = $map['BackupLogEndTime'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['BackupLogName'])) {
            $model->backupLogName = $map['BackupLogName'];
        }

        return $model;
    }
}
