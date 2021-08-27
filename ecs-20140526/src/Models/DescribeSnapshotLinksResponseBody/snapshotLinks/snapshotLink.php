<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponseBody\snapshotLinks;

use AlibabaCloud\Tea\Model;

class snapshotLink extends Model
{
    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $sourceDiskName;

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
    public $instanceId;

    /**
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'instantAccess'  => 'InstantAccess',
        'totalSize'      => 'TotalSize',
        'sourceDiskName' => 'SourceDiskName',
        'sourceDiskSize' => 'SourceDiskSize',
        'sourceDiskType' => 'SourceDiskType',
        'instanceId'     => 'InstanceId',
        'snapshotLinkId' => 'SnapshotLinkId',
        'totalCount'     => 'TotalCount',
        'regionId'       => 'RegionId',
        'sourceDiskId'   => 'SourceDiskId',
        'instanceName'   => 'InstanceName',
        'category'       => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->sourceDiskName) {
            $res['SourceDiskName'] = $this->sourceDiskName;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->snapshotLinkId) {
            $res['SnapshotLinkId'] = $this->snapshotLinkId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['SourceDiskName'])) {
            $model->sourceDiskName = $map['SourceDiskName'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SnapshotLinkId'])) {
            $model->snapshotLinkId = $map['SnapshotLinkId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
