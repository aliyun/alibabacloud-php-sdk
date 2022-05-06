<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListUserBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $binlogInfo;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossFileMetaData;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var int
     */
    public $ossFileSize;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $restoreSize;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupId'         => 'BackupId',
        'binlogInfo'       => 'BinlogInfo',
        'comment'          => 'Comment',
        'creationTime'     => 'CreationTime',
        'engine'           => 'Engine',
        'engineVersion'    => 'EngineVersion',
        'finishTime'       => 'FinishTime',
        'modificationTime' => 'ModificationTime',
        'ossBucket'        => 'OssBucket',
        'ossFileMetaData'  => 'OssFileMetaData',
        'ossFileName'      => 'OssFileName',
        'ossFilePath'      => 'OssFilePath',
        'ossFileSize'      => 'OssFileSize',
        'ossUrl'           => 'OssUrl',
        'reason'           => 'Reason',
        'restoreSize'      => 'RestoreSize',
        'retention'        => 'Retention',
        'status'           => 'Status',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->binlogInfo) {
            $res['BinlogInfo'] = $this->binlogInfo;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossFileMetaData) {
            $res['OssFileMetaData'] = $this->ossFileMetaData;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->ossFileSize) {
            $res['OssFileSize'] = $this->ossFileSize;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->restoreSize) {
            $res['RestoreSize'] = $this->restoreSize;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BinlogInfo'])) {
            $model->binlogInfo = $map['BinlogInfo'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssFileMetaData'])) {
            $model->ossFileMetaData = $map['OssFileMetaData'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['OssFileSize'])) {
            $model->ossFileSize = $map['OssFileSize'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RestoreSize'])) {
            $model->restoreSize = $map['RestoreSize'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
