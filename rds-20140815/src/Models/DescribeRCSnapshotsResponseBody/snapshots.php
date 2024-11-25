<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description Indicates whether the snapshot can be shared and used to create or roll back a cloud disk. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $available;

    /**
     * @description The snapshot type. Valid values:
     *
     *   Standard: standard snapshot
     *   Flash: local snapshot This value will be deprecated. The local snapshot feature is replaced with the instant access feature.
     *   archive: archived snapshot
     *
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The creation time. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-10-18T09:37:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The snapshot description.
     *
     * @example zd_test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the snapshot was encrypted. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description This parameter is deprecated.
     *
     * @example none
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The progress of the snapshot creation task in percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The snapshot ID.
     *
     * @example rcds-hc1zg51xobdg4****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The snapshot name.
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The snapshot type. Valid values:
     *
     *   auto or timer: automatically created snapshot
     *   user: manually created snapshot
     *   all: all snapshot types
     *
     * @example auto
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The ID of the original disk. This parameter is retained even after the original disk for which the snapshot was created is released.
     *
     * @example rcd-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The storage capacity of the original disk. Unit: GiB.
     *
     * @example 60
     *
     * @var int
     */
    public $sourceDiskSize;

    /**
     * @description The type of the original disk. Valid values:
     *
     *   SYSTEM: system disk
     *   DATA: data disk
     *
     * @example data
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The type of the original disk.
     *
     * >  This parameter will be removed in the future. To ensure future compatibility, we recommend that you use other parameters.
     * @example disk
     *
     * @var string
     */
    public $sourceStorageType;

    /**
     * @description The snapshot status. Valid values:
     *
     *   progressing: The snapshot is being created.
     *   accomplished: The snapshot is created.
     *   failed: The snapshot fails to be created.
     *
     * @example progressing
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the snapshot is used to create custom images or disks. Valid values:
     *
     *   image: The snapshot is used to create custom images.
     *   disk: The snapshot is used to create disks.
     *   image_disk: The snapshot is used to create custom images and data disks.
     *   none: The snapshot is not used to create custom images or disks.
     *
     * @example none
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return snapshots
     */
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
