<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The actual data amount of backup snapshots after duplicates are removed. Unit: bytes.
     *
     * @example 0
     *
     * @var string
     */
    public $actualBytes;

    /**
     * @description The backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The total amount of data. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description The time when the backup snapshot was completed. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496679
     *
     * @var int
     */
    public $completeTime;

    /**
     * @description The time when the Tablestore instance was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1607436917
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the backup snapshot was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496679
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the Tablestore instance.
     *
     * @example instancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the backup job.
     *
     * @example job-00030j3chkt******2
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The hash value of the parent backup snapshot.
     *
     * @example f2fe..
     *
     * @var string
     */
    public $parentSnapshotHash;

    /**
     * @description The time when the backup job ended. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1642521709966
     *
     * @var int
     */
    public $rangeEnd;

    /**
     * @description The time when the backup job started. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1642492553038
     *
     * @var int
     */
    public $rangeStart;

    /**
     * @description The retention period of the backup snapshot. Unit: days.
     *
     * @example 730
     *
     * @var int
     */
    public $retention;

    /**
     * @description The hash value of the backup snapshot.
     *
     * @example f2fe...
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The ID of the backup snapshot.
     *
     * @example s-00047mxg17p26*****b
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: backup snapshots for Elastic Compute Service (ECS) files
     *   **OSS**: backup snapshots for Object Storage Service (OSS) buckets
     *   **NAS**: backup snapshots for Apsara File Storage NAS file systems
     *   **OTS_TABLE**: backup snapshots for Tablestore instances
     *
     * @example OTS_TABLE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The time when the backup snapshot started. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496543
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the backup job. Valid values:
     *
     *   **COMPLETE**: The backup job is completed.
     *   **PARTIAL_COMPLETE**: The backup job is partially completed.
     *   **FAILED**: The backup job has failed.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the table in the Tablestore instance.
     *
     * @example table2
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The time when the backup snapshot was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496679
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the backup vault that stores the backup snapshot.
     *
     * @example v-00030j*******sn
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return snapshots
     */
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
