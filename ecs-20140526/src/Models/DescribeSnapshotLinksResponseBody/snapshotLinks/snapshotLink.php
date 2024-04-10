<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponseBody\snapshotLinks;

use AlibabaCloud\Tea\Model;

class snapshotLink extends Model
{
    /**
     * @description The category of the snapshot.
     *
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1h6jmbefj2cyqs****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the instant access feature is enabled. Valid values:
     *
     *   true: The instant access feature is enabled. This feature can be enabled only for enhanced SSDs (ESSDs).
     *   false: The instant access feature is disabled. The snapshot is a normal snapshot for which the instant access feature is disabled.
     *
     * >  This parameter is no longer used. By default, new normal snapshots of ESSDs are upgraded to instant access snapshots free of charge without the need for additional configurations. For more information, see [Use the instant access feature](~~193667~~).
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The region ID of the source disk.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot chain.
     *
     * @example sl-2ze0y1jwzpb1geqx****
     *
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @description The ID of the source disk. This parameter is retained even if the source disk is deleted.
     *
     * @example d-bp1d6tsvznfghy7y****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The name of the source disk.
     *
     * @example testSourceDiskName
     *
     * @var string
     */
    public $sourceDiskName;

    /**
     * @description The capacity of the source disk. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $sourceDiskSize;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example data
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The total number of snapshots.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The total size of all snapshots in the snapshot chain. Unit: byte.
     *
     * @example 2097152
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'category'       => 'Category',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'instantAccess'  => 'InstantAccess',
        'regionId'       => 'RegionId',
        'snapshotLinkId' => 'SnapshotLinkId',
        'sourceDiskId'   => 'SourceDiskId',
        'sourceDiskName' => 'SourceDiskName',
        'sourceDiskSize' => 'SourceDiskSize',
        'sourceDiskType' => 'SourceDiskType',
        'totalCount'     => 'TotalCount',
        'totalSize'      => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotLinkId) {
            $res['SnapshotLinkId'] = $this->snapshotLinkId;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotLinkId'])) {
            $model->snapshotLinkId = $map['SnapshotLinkId'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
