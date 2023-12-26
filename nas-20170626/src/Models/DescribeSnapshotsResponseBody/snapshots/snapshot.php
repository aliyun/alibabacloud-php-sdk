<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponseBody\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @description The time when the snapshot was created.
     *
     * The time follows the [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) standard in UTC. The time is displayed in the `yyyy-MM-ddThh:mmZ` format.
     * @example 2014-07-24T13:00:52Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the snapshot.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the snapshot is encrypted.
     *
     * Valid values:
     *
     *   0: The snapshot is not encrypted.
     *   1: The snapshot is encrypted.
     *
     * @example 1
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description The progress of the snapshot creation. The value of this parameter is expressed as a percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The remaining time that is required to create the snapshot.
     *
     * Unit: seconds.
     * @example 38
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The retention period of the auto snapshot.
     *
     * Valid values:
     *
     *   \-1: Auto snapshots are permanently retained. After the number of auto snapshots exceeds the upper limit, the earliest auto snapshot is automatically deleted.
     *   1 to 65536: Auto snapshots are retained for the specified days. After the retention period of auto snapshots expires, the auto snapshots are automatically deleted.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The snapshot ID.
     *
     * @example s-extreme-snapsho****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The snapshot name.
     *
     * If you specify a name to create a snapshot, the name of the snapshot is returned. Otherwise, no value is returned for this parameter.
     * @example FinanceJoshua
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The ID of the source file system.
     *
     * This parameter is retained even if the source file system of the snapshot is deleted.
     * @example extreme-012****
     *
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @description The capacity of the source file system.
     *
     * Unit: GiB.
     * @example 2000
     *
     * @var int
     */
    public $sourceFileSystemSize;

    /**
     * @description The version of the source file system.
     *
     * @example 1
     *
     * @var string
     */
    public $sourceFileSystemVersion;

    /**
     * @description The status of the snapshot.
     *
     * Valid values:
     *
     *   progressing: The snapshot is being created.
     *   accomplished: The snapshot is created.
     *   failed: The snapshot fails to be created.
     *
     * @example accomplished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'encryptType'             => 'EncryptType',
        'progress'                => 'Progress',
        'remainTime'              => 'RemainTime',
        'retentionDays'           => 'RetentionDays',
        'snapshotId'              => 'SnapshotId',
        'snapshotName'            => 'SnapshotName',
        'sourceFileSystemId'      => 'SourceFileSystemId',
        'sourceFileSystemSize'    => 'SourceFileSystemSize',
        'sourceFileSystemVersion' => 'SourceFileSystemVersion',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        }
        if (null !== $this->sourceFileSystemSize) {
            $res['SourceFileSystemSize'] = $this->sourceFileSystemSize;
        }
        if (null !== $this->sourceFileSystemVersion) {
            $res['SourceFileSystemVersion'] = $this->sourceFileSystemVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if (isset($map['SourceFileSystemSize'])) {
            $model->sourceFileSystemSize = $map['SourceFileSystemSize'];
        }
        if (isset($map['SourceFileSystemVersion'])) {
            $model->sourceFileSystemVersion = $map['SourceFileSystemVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
