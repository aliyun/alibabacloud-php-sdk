<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @example 2020-12-20T14:52:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example ecd-g03l3tlm8djoj****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @example 30
     *
     * @var int
     */
    public $remainTime;

    /**
     * @example s-2zeipxmnhej803x7****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @example USER
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @example 150
     *
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @example ACCOMPLISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'description'    => 'Description',
        'desktopId'      => 'DesktopId',
        'progress'       => 'Progress',
        'remainTime'     => 'RemainTime',
        'snapshotId'     => 'SnapshotId',
        'snapshotName'   => 'SnapshotName',
        'snapshotType'   => 'SnapshotType',
        'sourceDiskSize' => 'SourceDiskSize',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
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
