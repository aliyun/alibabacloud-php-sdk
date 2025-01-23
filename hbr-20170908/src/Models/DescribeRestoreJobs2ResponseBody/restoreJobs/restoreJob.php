<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob\otsDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob\report;

class restoreJob extends Model
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
    public $bytesDone;
    /**
     * @var int
     */
    public $bytesTotal;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $completeTime;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $errorFile;
    /**
     * @var string
     */
    public $errorMessage;
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
    public $failbackDetail;
    /**
     * @var string
     */
    public $include;
    /**
     * @var int
     */
    public $itemsDone;
    /**
     * @var int
     */
    public $itemsTotal;
    /**
     * @var int
     */
    public $meteringBytesDone;
    /**
     * @var int
     */
    public $meteringBytesTotal;
    /**
     * @var string
     */
    public $options;
    /**
     * @var otsDetail
     */
    public $otsDetail;
    /**
     * @var string
     */
    public $parentId;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var report
     */
    public $report;
    /**
     * @var string
     */
    public $restoreId;
    /**
     * @var string
     */
    public $restoreType;
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
    public $sourceType;
    /**
     * @var int
     */
    public $speed;
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
    public $targetBucket;
    /**
     * @var string
     */
    public $targetClientId;
    /**
     * @var int
     */
    public $targetCreateTime;
    /**
     * @var string
     */
    public $targetDataSourceId;
    /**
     * @var string
     */
    public $targetFileSystemId;
    /**
     * @var string
     */
    public $targetInstanceId;
    /**
     * @var string
     */
    public $targetInstanceName;
    /**
     * @var string
     */
    public $targetPath;
    /**
     * @var string
     */
    public $targetPrefix;
    /**
     * @var string
     */
    public $targetTableName;
    /**
     * @var int
     */
    public $targetTime;
    /**
     * @var string
     */
    public $udmDetail;
    /**
     * @var int
     */
    public $updatedTime;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes'          => 'ActualBytes',
        'actualItems'          => 'ActualItems',
        'bytesDone'            => 'BytesDone',
        'bytesTotal'           => 'BytesTotal',
        'clusterId'            => 'ClusterId',
        'completeTime'         => 'CompleteTime',
        'createdTime'          => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'errorFile'            => 'ErrorFile',
        'errorMessage'         => 'ErrorMessage',
        'exclude'              => 'Exclude',
        'expireTime'           => 'ExpireTime',
        'failbackDetail'       => 'FailbackDetail',
        'include'              => 'Include',
        'itemsDone'            => 'ItemsDone',
        'itemsTotal'           => 'ItemsTotal',
        'meteringBytesDone'    => 'MeteringBytesDone',
        'meteringBytesTotal'   => 'MeteringBytesTotal',
        'options'              => 'Options',
        'otsDetail'            => 'OtsDetail',
        'parentId'             => 'ParentId',
        'progress'             => 'Progress',
        'report'               => 'Report',
        'restoreId'            => 'RestoreId',
        'restoreType'          => 'RestoreType',
        'snapshotHash'         => 'SnapshotHash',
        'snapshotId'           => 'SnapshotId',
        'sourceType'           => 'SourceType',
        'speed'                => 'Speed',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'storageClass'         => 'StorageClass',
        'targetBucket'         => 'TargetBucket',
        'targetClientId'       => 'TargetClientId',
        'targetCreateTime'     => 'TargetCreateTime',
        'targetDataSourceId'   => 'TargetDataSourceId',
        'targetFileSystemId'   => 'TargetFileSystemId',
        'targetInstanceId'     => 'TargetInstanceId',
        'targetInstanceName'   => 'TargetInstanceName',
        'targetPath'           => 'TargetPath',
        'targetPrefix'         => 'TargetPrefix',
        'targetTableName'      => 'TargetTableName',
        'targetTime'           => 'TargetTime',
        'udmDetail'            => 'UdmDetail',
        'updatedTime'          => 'UpdatedTime',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
        if (null !== $this->otsDetail) {
            $this->otsDetail->validate();
        }
        if (null !== $this->report) {
            $this->report->validate();
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

        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }

        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->failbackDetail) {
            $res['FailbackDetail'] = $this->failbackDetail;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }

        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }

        if (null !== $this->meteringBytesDone) {
            $res['MeteringBytesDone'] = $this->meteringBytesDone;
        }

        if (null !== $this->meteringBytesTotal) {
            $res['MeteringBytesTotal'] = $this->meteringBytesTotal;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toArray($noStream) : $this->otsDetail;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->report) {
            $res['Report'] = null !== $this->report ? $this->report->toArray($noStream) : $this->report;
        }

        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
        }

        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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

        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }

        if (null !== $this->targetClientId) {
            $res['TargetClientId'] = $this->targetClientId;
        }

        if (null !== $this->targetCreateTime) {
            $res['TargetCreateTime'] = $this->targetCreateTime;
        }

        if (null !== $this->targetDataSourceId) {
            $res['TargetDataSourceId'] = $this->targetDataSourceId;
        }

        if (null !== $this->targetFileSystemId) {
            $res['TargetFileSystemId'] = $this->targetFileSystemId;
        }

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }

        if (null !== $this->targetPrefix) {
            $res['TargetPrefix'] = $this->targetPrefix;
        }

        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }

        if (null !== $this->targetTime) {
            $res['TargetTime'] = $this->targetTime;
        }

        if (null !== $this->udmDetail) {
            $res['UdmDetail'] = $this->udmDetail;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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

        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }

        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['FailbackDetail'])) {
            $model->failbackDetail = $map['FailbackDetail'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }

        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }

        if (isset($map['MeteringBytesDone'])) {
            $model->meteringBytesDone = $map['MeteringBytesDone'];
        }

        if (isset($map['MeteringBytesTotal'])) {
            $model->meteringBytesTotal = $map['MeteringBytesTotal'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OtsDetail'])) {
            $model->otsDetail = otsDetail::fromMap($map['OtsDetail']);
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Report'])) {
            $model->report = report::fromMap($map['Report']);
        }

        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
        }

        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
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

        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }

        if (isset($map['TargetClientId'])) {
            $model->targetClientId = $map['TargetClientId'];
        }

        if (isset($map['TargetCreateTime'])) {
            $model->targetCreateTime = $map['TargetCreateTime'];
        }

        if (isset($map['TargetDataSourceId'])) {
            $model->targetDataSourceId = $map['TargetDataSourceId'];
        }

        if (isset($map['TargetFileSystemId'])) {
            $model->targetFileSystemId = $map['TargetFileSystemId'];
        }

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        if (isset($map['TargetPrefix'])) {
            $model->targetPrefix = $map['TargetPrefix'];
        }

        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        if (isset($map['TargetTime'])) {
            $model->targetTime = $map['TargetTime'];
        }

        if (isset($map['UdmDetail'])) {
            $model->udmDetail = $map['UdmDetail'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
