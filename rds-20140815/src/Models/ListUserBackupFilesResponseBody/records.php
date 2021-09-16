<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListUserBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var int
     */
    public $ossFileSize;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $restoreSize;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $ossFileMetaData;

    /**
     * @var string
     */
    public $binlogInfo;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'finishTime'       => 'FinishTime',
        'comment'          => 'Comment',
        'ossFilePath'      => 'OssFilePath',
        'ossBucket'        => 'OssBucket',
        'modificationTime' => 'ModificationTime',
        'ossFileSize'      => 'OssFileSize',
        'ossFileName'      => 'OssFileName',
        'engineVersion'    => 'EngineVersion',
        'backupId'         => 'BackupId',
        'restoreSize'      => 'RestoreSize',
        'zoneId'           => 'ZoneId',
        'retention'        => 'Retention',
        'engine'           => 'Engine',
        'ossUrl'           => 'OssUrl',
        'ossFileMetaData'  => 'OssFileMetaData',
        'binlogInfo'       => 'BinlogInfo',
        'reason'           => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->ossFileSize) {
            $res['OssFileSize'] = $this->ossFileSize;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->restoreSize) {
            $res['RestoreSize'] = $this->restoreSize;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->ossFileMetaData) {
            $res['OssFileMetaData'] = $this->ossFileMetaData;
        }
        if (null !== $this->binlogInfo) {
            $res['BinlogInfo'] = $this->binlogInfo;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['OssFileSize'])) {
            $model->ossFileSize = $map['OssFileSize'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RestoreSize'])) {
            $model->restoreSize = $map['RestoreSize'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['OssFileMetaData'])) {
            $model->ossFileMetaData = $map['OssFileMetaData'];
        }
        if (isset($map['BinlogInfo'])) {
            $model->binlogInfo = $map['BinlogInfo'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
