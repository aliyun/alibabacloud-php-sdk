<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The creation time. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-08-20T14:52:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the snapshot.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing-15
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The capacity of the disk. Unit: MiB.
     *
     * @example 40
     *
     * @var string
     */
    public $size;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot. This parameter is returned only if a snapshot name was specified when the snapshot was created.
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of the disk. Valid value:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: all-flash disk
     *   local_hdd: local HDD
     *   local_ssd: local SSD
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $sourceDiskCategory;

    /**
     * @description The ID of the source disk. This parameter is retained even after the source disk for which the snapshot was created is released.
     *
     * @example d-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The type of the disk. Valid value:
     *
     *   1: system disk
     *   2: data disk
     *
     * @example 1
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The ID of the source edge node.
     *
     * @example cn-hangzhou-27
     *
     * @var string
     */
    public $sourceEnsRegionId;

    /**
     * @description The ID of the source snapshot.
     *
     * @example s-bpdfer893jfkdqe****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description The status of the snapshot. Valid value:
     *
     *   creating: The snapshot is being created.
     *   Available: The snapshot is available.
     *   deleting: The snapshot is being deleted.
     *   error: An error occurred on the snapshot.
     *
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'ensRegionId'        => 'EnsRegionId',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
        'snapshotName'       => 'SnapshotName',
        'sourceDiskCategory' => 'SourceDiskCategory',
        'sourceDiskId'       => 'SourceDiskId',
        'sourceDiskType'     => 'SourceDiskType',
        'sourceEnsRegionId'  => 'SourceEnsRegionId',
        'sourceSnapshotId'   => 'SourceSnapshotId',
        'status'             => 'Status',
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
