<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupSetDownloadLinkResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $backupRestorableTime;

    /**
     * @example bak-4n****gacpa8
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $downloadTaskCreateTime;

    /**
     * @example 1000002
     *
     * @var int
     */
    public $downloadTaskId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $downloadTaskStatus;

    /**
     * @example http://bucket.oss-region-internal.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $internalUrl;

    /**
     * @example 3600
     *
     * @var int
     */
    public $urlAliveTime;

    /**
     * @example 2024-01-04 17:39:49
     *
     * @var string
     */
    public $urlExpiredTime;
    protected $_name = [
        'backupRestorableTime'   => 'BackupRestorableTime',
        'backupSetId'            => 'BackupSetId',
        'downloadTaskCreateTime' => 'DownloadTaskCreateTime',
        'downloadTaskId'         => 'DownloadTaskId',
        'downloadTaskStatus'     => 'DownloadTaskStatus',
        'internalUrl'            => 'InternalUrl',
        'urlAliveTime'           => 'UrlAliveTime',
        'urlExpiredTime'         => 'UrlExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
