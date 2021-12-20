<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponse;

use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('remainTime', $this->remainTime, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('snapshotName', $this->snapshotName, true);
        Model::validateRequired('snapshotType', $this->snapshotType, true);
        Model::validateRequired('sourceDiskSize', $this->sourceDiskSize, true);
        Model::validateRequired('sourceDiskType', $this->sourceDiskType, true);
        Model::validateRequired('status', $this->status, true);
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
