<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsResponseBody;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $actualBytes;
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
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $parentSnapshotHash;
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
    public $tableName;
    /**
     * @var int
     */
    public $updatedTime;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes'        => 'ActualBytes',
        'backupType'         => 'BackupType',
        'bytesTotal'         => 'BytesTotal',
        'completeTime'       => 'CompleteTime',
        'createTime'         => 'CreateTime',
        'createdTime'        => 'CreatedTime',
        'instanceName'       => 'InstanceName',
        'jobId'              => 'JobId',
        'parentSnapshotHash' => 'ParentSnapshotHash',
        'rangeEnd'           => 'RangeEnd',
        'rangeStart'         => 'RangeStart',
        'retention'          => 'Retention',
        'snapshotHash'       => 'SnapshotHash',
        'snapshotId'         => 'SnapshotId',
        'sourceType'         => 'SourceType',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'tableName'          => 'TableName',
        'updatedTime'        => 'UpdatedTime',
        'vaultId'            => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
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

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
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

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
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

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
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
