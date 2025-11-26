<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsResponseBody;

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
    public $ensRegionId;

    /**
     * @var string
     */
    public $size;

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
    public $sourceDiskCategory;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var string
     */
    public $sourceEnsRegionId;

    /**
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
        'sourceDiskCategory' => 'SourceDiskCategory',
        'sourceDiskId' => 'SourceDiskId',
        'sourceDiskType' => 'SourceDiskType',
        'sourceEnsRegionId' => 'SourceEnsRegionId',
        'sourceSnapshotId' => 'SourceSnapshotId',
        'status' => 'Status',
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

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        if (null !== $this->sourceDiskCategory) {
            $res['SourceDiskCategory'] = $this->sourceDiskCategory;
        }

        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }

        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }

        if (null !== $this->sourceEnsRegionId) {
            $res['SourceEnsRegionId'] = $this->sourceEnsRegionId;
        }

        if (null !== $this->sourceSnapshotId) {
            $res['SourceSnapshotId'] = $this->sourceSnapshotId;
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

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        if (isset($map['SourceDiskCategory'])) {
            $model->sourceDiskCategory = $map['SourceDiskCategory'];
        }

        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }

        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }

        if (isset($map['SourceEnsRegionId'])) {
            $model->sourceEnsRegionId = $map['SourceEnsRegionId'];
        }

        if (isset($map['SourceSnapshotId'])) {
            $model->sourceSnapshotId = $map['SourceSnapshotId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
