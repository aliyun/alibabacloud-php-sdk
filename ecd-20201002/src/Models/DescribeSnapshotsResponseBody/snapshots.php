<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $desktopId;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var int
     */
    public $remainTime;
    /**
     * @var string
     */
    public $restorePointId;
    /**
     * @var string
     */
    public $restorePointName;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var string
     */
    public $snapshotName;
    /**
     * @var string
     */
    public $snapshotType;
    /**
     * @var string
     */
    public $sourceDiskSize;
    /**
     * @var string
     */
    public $sourceDiskType;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'desktopId'        => 'DesktopId',
        'progress'         => 'Progress',
        'remainTime'       => 'RemainTime',
        'restorePointId'   => 'RestorePointId',
        'restorePointName' => 'RestorePointName',
        'snapshotId'       => 'SnapshotId',
        'snapshotName'     => 'SnapshotName',
        'snapshotType'     => 'SnapshotType',
        'sourceDiskSize'   => 'SourceDiskSize',
        'sourceDiskType'   => 'SourceDiskType',
        'status'           => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->restorePointId) {
            $res['RestorePointId'] = $this->restorePointId;
        }

        if (null !== $this->restorePointName) {
            $res['RestorePointName'] = $this->restorePointName;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RestorePointId'])) {
            $model->restorePointId = $map['RestorePointId'];
        }

        if (isset($map['RestorePointName'])) {
            $model->restorePointName = $map['RestorePointName'];
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
