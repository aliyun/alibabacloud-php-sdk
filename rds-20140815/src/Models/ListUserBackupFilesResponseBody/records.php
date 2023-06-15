<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListUserBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The ID of the full backup file.
     *
     * @example b-kwwvr7v8t7of********
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The information about the binary log file that contains incremental data. If incremental data is generated during the full backup, this parameter is returned.
     *
     * @example {\"binlogPosition\":\"154\",\"binlogFile\":\"0.000002\"}
     *
     * @var string
     */
    public $binlogInfo;

    /**
     * @description The description of the full backup file.
     *
     * @example BackupTest
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the system started to import the full backup file. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1623231084000
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The database engine of the instance.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the full backup file is successfully imported. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1623231750000
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The time when the full backup file is successfully imported. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1623231750000
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The name of the OSS bucket in which the full backup file is stored as an object.
     *
     * @example BackupTest
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The metadata of the full backup file. For more information, see [Manage object metadata](~~31859~~).
     *
     * @example {\"Accept-Ranges\":\"bytes\",\"Connection\":\"keep-alive\",\"Content-Length\":81014337,\"Content-Type\":\"application/octet-stream\",\"Date\":1623309548000,\"ETag\":\"889FE9E5FCEBFE4781829488A352863B-1\",\"Last-Modified\":1622186844000,\"Server\":\"AliyunOSS\",\"x-oss-hash-crc64ecma\":\"5793608435727323129\",\"x-oss-object-type\":\"Multipart\",\"x-oss-request-id\":\"60C1BCEC92572F37318BD499\",\"x-oss-server-time\":\"166\",\"x-oss-storage-class\":\"Standard\"}
     *
     * @var string
     */
    public $ossFileMetaData;

    /**
     * @description The name of the full backup file that is stored as an object in an OSS bucket.
     *
     * @example backup_qp.xb
     *
     * @var string
     */
    public $ossFileName;

    /**
     * @description The path of the full backup file that is stored as an object in an OSS bucket.
     *
     * @example test/backup_qp.xb
     *
     * @var string
     */
    public $ossFilePath;

    /**
     * @description The size of the full backup file that is stored as an object in an OSS bucket. Unit: KB.
     *
     * @example 79115
     *
     * @var int
     */
    public $ossFileSize;

    /**
     * @description The URL to download the full backup file from the OSS bucket.
     *
     * @example https://******.oss-ap-********.aliyuncs.com/backup_qp.xb
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @description The reason why the full backup file failed to be imported.
     *
     * @example success
     *
     * @var string
     */
    public $reason;

    /**
     * @description The amount of storage that is required to restore the data of the full backup file. Unit: GB.
     *
     * @example 20
     *
     * @var string
     */
    public $restoreSize;

    /**
     * @description The retention period of the full backup file. Unit: days.
     *
     * @example 3
     *
     * @var int
     */
    public $retention;

    /**
     * @description The status of the full backup file. Valid values:
     *
     *   **Importing**: The full backup file is being imported.
     *   **Failed**: The full backup file fails to be imported.
     *   **CheckSucccess**: The full backup file passes the check.
     *   **BackupSuccess**: The full backup file is imported.
     *   **Deleted**: The full backup file is deleted.
     *
     * @example BackupSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The zone ID of the full backup file.
     *
     * @example cn-hangzhou-b
     *
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
