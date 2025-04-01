<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupSetDownloadLinkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $backupRestorableTime;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $downloadTaskCreateTime;

    /**
     * @var int
     */
    public $downloadTaskId;

    /**
     * @var string
     */
    public $downloadTaskStatus;

    /**
     * @var string
     */
    public $internalUrl;

    /**
     * @var int
     */
    public $urlAliveTime;

    /**
     * @var string
     */
    public $urlExpiredTime;
    protected $_name = [
        'backupRestorableTime' => 'BackupRestorableTime',
        'backupSetId' => 'BackupSetId',
        'downloadTaskCreateTime' => 'DownloadTaskCreateTime',
        'downloadTaskId' => 'DownloadTaskId',
        'downloadTaskStatus' => 'DownloadTaskStatus',
        'internalUrl' => 'InternalUrl',
        'urlAliveTime' => 'UrlAliveTime',
        'urlExpiredTime' => 'UrlExpiredTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRestorableTime) {
            $res['BackupRestorableTime'] = $this->backupRestorableTime;
        }

        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->downloadTaskCreateTime) {
            $res['DownloadTaskCreateTime'] = $this->downloadTaskCreateTime;
        }

        if (null !== $this->downloadTaskId) {
            $res['DownloadTaskId'] = $this->downloadTaskId;
        }

        if (null !== $this->downloadTaskStatus) {
            $res['DownloadTaskStatus'] = $this->downloadTaskStatus;
        }

        if (null !== $this->internalUrl) {
            $res['InternalUrl'] = $this->internalUrl;
        }

        if (null !== $this->urlAliveTime) {
            $res['UrlAliveTime'] = $this->urlAliveTime;
        }

        if (null !== $this->urlExpiredTime) {
            $res['UrlExpiredTime'] = $this->urlExpiredTime;
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
        if (isset($map['BackupRestorableTime'])) {
            $model->backupRestorableTime = $map['BackupRestorableTime'];
        }

        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['DownloadTaskCreateTime'])) {
            $model->downloadTaskCreateTime = $map['DownloadTaskCreateTime'];
        }

        if (isset($map['DownloadTaskId'])) {
            $model->downloadTaskId = $map['DownloadTaskId'];
        }

        if (isset($map['DownloadTaskStatus'])) {
            $model->downloadTaskStatus = $map['DownloadTaskStatus'];
        }

        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }

        if (isset($map['UrlAliveTime'])) {
            $model->urlAliveTime = $map['UrlAliveTime'];
        }

        if (isset($map['UrlExpiredTime'])) {
            $model->urlExpiredTime = $map['UrlExpiredTime'];
        }

        return $model;
    }
}
