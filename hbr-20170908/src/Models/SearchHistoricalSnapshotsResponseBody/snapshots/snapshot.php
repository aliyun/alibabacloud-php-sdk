<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsResponseBody\snapshots;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsResponseBody\snapshots\snapshot\paths;

class snapshot extends Model
{
    /**
     * @var int
     */
    public $actualBytes;
    /**
     * @var int
     */
    public $actualItems;
    /**
     * @var int
     */
    public $archiveTime;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var int
     */
    public $bytesDone;
    /**
     * @var int
     */
    public $bytesTotal;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var int
     */
    public $completeTime;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $errorFile;
    /**
     * @var string
     */
    public $exclude;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $include;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $itemsDone;
    /**
     * @var int
     */
    public $itemsTotal;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $parentSnapshotHash;
    /**
     * @var string
     */
    public $path;
    /**
     * @var paths
     */
    public $paths;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var int
     */
    public $rangeEnd;
    /**
     * @var int
     */
    public $rangeStart;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var string
     */
    public $snapshotHash;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var string
     */
    public $sourceParentSnapshotHash;
    /**
     * @var string
     */
    public $sourceSnapshotHash;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $storageClass;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $updatedTime;
    /**
     * @var bool
     */
    public $useCommonNas;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes'              => 'ActualBytes',
        'actualItems'              => 'ActualItems',
        'archiveTime'              => 'ArchiveTime',
        'backupType'               => 'BackupType',
        'bucket'                   => 'Bucket',
        'bytesDone'                => 'BytesDone',
        'bytesTotal'               => 'BytesTotal',
        'clientId'                 => 'ClientId',
        'completeTime'             => 'CompleteTime',
        'createTime'               => 'CreateTime',
        'createdTime'              => 'CreatedTime',
        'errorFile'                => 'ErrorFile',
        'exclude'                  => 'Exclude',
        'expireTime'               => 'ExpireTime',
        'fileSystemId'             => 'FileSystemId',
        'include'                  => 'Include',
        'instanceId'               => 'InstanceId',
        'instanceName'             => 'InstanceName',
        'itemsDone'                => 'ItemsDone',
        'itemsTotal'               => 'ItemsTotal',
        'jobId'                    => 'JobId',
        'parentSnapshotHash'       => 'ParentSnapshotHash',
        'path'                     => 'Path',
        'paths'                    => 'Paths',
        'prefix'                   => 'Prefix',
        'rangeEnd'                 => 'RangeEnd',
        'rangeStart'               => 'RangeStart',
        'retention'                => 'Retention',
        'snapshotHash'             => 'SnapshotHash',
        'snapshotId'               => 'SnapshotId',
        'sourceParentSnapshotHash' => 'SourceParentSnapshotHash',
        'sourceSnapshotHash'       => 'SourceSnapshotHash',
        'sourceType'               => 'SourceType',
        'startTime'                => 'StartTime',
        'status'                   => 'Status',
        'storageClass'             => 'StorageClass',
        'tableName'                => 'TableName',
        'updatedTime'              => 'UpdatedTime',
        'useCommonNas'             => 'UseCommonNas',
        'vaultId'                  => 'VaultId',
    ];

    public function validate()
    {
        if (null !== $this->paths) {
            $this->paths->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }

        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
        }

        if (null !== $this->archiveTime) {
            $res['ArchiveTime'] = $this->archiveTime;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }

        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }

        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->paths) {
            $res['Paths'] = null !== $this->paths ? $this->paths->toArray($noStream) : $this->paths;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->rangeEnd) {
            $res['RangeEnd'] = $this->rangeEnd;
        }

        if (null !== $this->rangeStart) {
            $res['RangeStart'] = $this->rangeStart;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->sourceParentSnapshotHash) {
            $res['SourceParentSnapshotHash'] = $this->sourceParentSnapshotHash;
        }

        if (null !== $this->sourceSnapshotHash) {
            $res['SourceSnapshotHash'] = $this->sourceSnapshotHash;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->useCommonNas) {
            $res['UseCommonNas'] = $this->useCommonNas;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }

        if (isset($map['ActualItems'])) {
            $model->actualItems = $map['ActualItems'];
        }

        if (isset($map['ArchiveTime'])) {
            $model->archiveTime = $map['ArchiveTime'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }

        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }

        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Paths'])) {
            $model->paths = paths::fromMap($map['Paths']);
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['RangeEnd'])) {
            $model->rangeEnd = $map['RangeEnd'];
        }

        if (isset($map['RangeStart'])) {
            $model->rangeStart = $map['RangeStart'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['SourceParentSnapshotHash'])) {
            $model->sourceParentSnapshotHash = $map['SourceParentSnapshotHash'];
        }

        if (isset($map['SourceSnapshotHash'])) {
            $model->sourceSnapshotHash = $map['SourceSnapshotHash'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['UseCommonNas'])) {
            $model->useCommonNas = $map['UseCommonNas'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
