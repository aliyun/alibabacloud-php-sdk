<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponseBody\snapshots\detail;
use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The size of the backup snapshot. Unit: bytes.
     *
     * @example 600
     *
     * @var string
     */
    public $actualBytes;

    /**
     * @description The special retention type, which is valid only for special backups. Valid values:
     *
     *   **WEEKLY**: weekly backups
     *   **MONTHLY**: monthly backups
     *   **YEARLY**: yearly backups
     *
     * @example WEEKLY
     *
     * @var string
     */
    public $advancedRetentionType;

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
     * @example 1000
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description The time when the backup snapshot was completed. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1646895666
     *
     * @var int
     */
    public $completeTime;

    /**
     * @description The time when the backup snapshot was created.
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
     * @description The snapshot details.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The ID of the cloud disk or local disk.
     *
     * @example d-2ze86h5fga5rfwxxa8ef
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The expiration time of the backup.
     *
     * @example 1640334062
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp1f0pe78dxizrsdcgxd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the backup job.
     *
     * @example job-00030j3chkt******2
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the backup snapshot.
     *
     * @example s-00047mg17p26x*****b
     *
     * @var string
     */
    public $nativeSnapshotId;

    /**
     * @description The snapshot information.
     *
     * @example {
     * }
     * @var string
     */
    public $nativeSnapshotInfo;

    /**
     * @description The hash value of the parent backup snapshot.
     *
     * @example f2fe..
     *
     * @var string
     */
    public $parentSnapshotHash;

    /**
     * @description The prefix of the backup snapshot.
     *
     * @example example/
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The timestamp of the backup snapshot. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496679
     *
     * @var int
     */
    public $realSnapshotTime;

    /**
     * @description The retention period of the backup snapshot. Unit: days.
     *
     * @example 7
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
     *   **UDM_ECS**: ECS instance backup
     *   **UDM_ECS_DISK**: disk backup subtask of ECS instance backup
     *   **UDM_DISK**: disk backup
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The time when the backup snapshot was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
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
     * @description The time when the backup snapshot was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496679
     *
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
    }

    public function toMap()
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
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
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
