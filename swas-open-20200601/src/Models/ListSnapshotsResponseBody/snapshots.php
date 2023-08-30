<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The time when the snapshot was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-03-09T07:12:49Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the simple application server.
     *
     * Note: This parameter has a value for system disk snapshots. This parameter is left empty for data disk snapshots.
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The progress of snapshot creation.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The region ID of the snapshots.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks of the snapshot.
     *
     * @example test-Remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The time when the last disk rollback was performed.
     *
     * @example 2021-03-09T07:12:49Z
     *
     * @var string
     */
    public $rollbackTime;

    /**
     * @description The snapshot ID.
     *
     * @example s-bp16oazlsold4dks****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot.
     *
     * @example test-SnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The ID of the source disk based on which the snapshot is created. This parameter has a value even if the source disk is released.
     *
     * @example d-bp14wq0149cpp2xy****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system: system disk.
     *   data: data disk.
     *
     * @example System
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The status of the snapshot. Valid values:
     *
     *   Progressing: The snapshot is being created.
     *   Accomplished: The snapshot is created.
     *   Failed: The snapshot failed to be created.
     *
     * @example Accomplished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'instanceId'     => 'InstanceId',
        'progress'       => 'Progress',
        'regionId'       => 'RegionId',
        'remark'         => 'Remark',
        'rollbackTime'   => 'RollbackTime',
        'snapshotId'     => 'SnapshotId',
        'snapshotName'   => 'SnapshotName',
        'sourceDiskId'   => 'SourceDiskId',
        'sourceDiskType' => 'SourceDiskType',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->rollbackTime) {
            $res['RollbackTime'] = $this->rollbackTime;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RollbackTime'])) {
            $model->rollbackTime = $map['RollbackTime'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
