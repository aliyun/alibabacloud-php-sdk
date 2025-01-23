<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody\snapshots\detail;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $actualBytes;
    /**
     * @var string
     */
    public $advancedRetentionType;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var int
     */
    public $bytesTotal;
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
     * @var detail
     */
    public $detail;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $nativeSnapshotId;
    /**
     * @var string
     */
    public $nativeSnapshotInfo;
    /**
     * @var string
     */
    public $parentSnapshotHash;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var int
     */
    public $realSnapshotTime;
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
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'actualBytes'           => 'ActualBytes',
        'advancedRetentionType' => 'AdvancedRetentionType',
        'backupType'            => 'BackupType',
        'bytesTotal'            => 'BytesTotal',
        'completeTime'          => 'CompleteTime',
        'createTime'            => 'CreateTime',
        'createdTime'           => 'CreatedTime',
        'detail'                => 'Detail',
        'diskId'                => 'DiskId',
        'expireTime'            => 'ExpireTime',
        'instanceId'            => 'InstanceId',
        'jobId'                 => 'JobId',
        'nativeSnapshotId'      => 'NativeSnapshotId',
        'nativeSnapshotInfo'    => 'NativeSnapshotInfo',
        'parentSnapshotHash'    => 'ParentSnapshotHash',
        'prefix'                => 'Prefix',
        'realSnapshotTime'      => 'RealSnapshotTime',
        'retention'             => 'Retention',
        'snapshotHash'          => 'SnapshotHash',
        'snapshotId'            => 'SnapshotId',
        'sourceType'            => 'SourceType',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'updatedTime'           => 'UpdatedTime',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }

        if (null !== $this->advancedRetentionType) {
            $res['AdvancedRetentionType'] = $this->advancedRetentionType;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
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

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->nativeSnapshotId) {
            $res['NativeSnapshotId'] = $this->nativeSnapshotId;
        }

        if (null !== $this->nativeSnapshotInfo) {
            $res['NativeSnapshotInfo'] = $this->nativeSnapshotInfo;
        }

        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->realSnapshotTime) {
            $res['RealSnapshotTime'] = $this->realSnapshotTime;
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

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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

        if (isset($map['AdvancedRetentionType'])) {
            $model->advancedRetentionType = $map['AdvancedRetentionType'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
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

        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['NativeSnapshotId'])) {
            $model->nativeSnapshotId = $map['NativeSnapshotId'];
        }

        if (isset($map['NativeSnapshotInfo'])) {
            $model->nativeSnapshotInfo = $map['NativeSnapshotInfo'];
        }

        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['RealSnapshotTime'])) {
            $model->realSnapshotTime = $map['RealSnapshotTime'];
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

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
