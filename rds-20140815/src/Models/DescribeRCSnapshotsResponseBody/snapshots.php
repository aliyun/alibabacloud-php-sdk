<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCSnapshotsResponseBody;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var bool
     */
    public $available;
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $encrypted;
    /**
     * @var bool
     */
    public $instantAccess;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $regionId;
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
    public $sourceDiskId;
    /**
     * @var int
     */
    public $sourceDiskSize;
    /**
     * @var string
     */
    public $sourceDiskType;
    /**
     * @var string
     */
    public $sourceStorageType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'available'         => 'Available',
        'category'          => 'Category',
        'creationTime'      => 'CreationTime',
        'description'       => 'Description',
        'encrypted'         => 'Encrypted',
        'instantAccess'     => 'InstantAccess',
        'progress'          => 'Progress',
        'regionId'          => 'RegionId',
        'snapshotId'        => 'SnapshotId',
        'snapshotName'      => 'SnapshotName',
        'snapshotType'      => 'SnapshotType',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceDiskSize'    => 'SourceDiskSize',
        'sourceDiskType'    => 'SourceDiskType',
        'sourceStorageType' => 'SourceStorageType',
        'status'            => 'Status',
        'usage'             => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }

        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }

        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }

        if (null !== $this->sourceStorageType) {
            $res['SourceStorageType'] = $this->sourceStorageType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }

        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }

        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }

        if (isset($map['SourceStorageType'])) {
            $model->sourceStorageType = $map['SourceStorageType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
