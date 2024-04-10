<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @description Indicates whether the snapshot can be used to create or roll back disks. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $available;

    /**
     * @description Indicates whether the instant access feature is enabled. Valid values:
     *
     *   true: The instant access feature is enabled. By default, the instant access feature is enabled for ESSDs.
     *   false: The instant access feature is disabled. The snapshot is a normal snapshot for which the instant access feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The retention period of the instant access feature. After the retention period ends, the snapshot is automatically released.
     *
     * >  This parameter is deprecated. The normal snapshots of enhanced SSDs (ESSDs) are upgraded to support the instant access feature by default. No additional configurations are required to enable the feature and you are not charged for the feature. For more information, see [Use the instant access feature](~~193667~~).
     * @example 3
     *
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @description The progress of the snapshot creation task. Unit: percent (%).
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-j6cbzmrlbf09w72q****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The ID of the source disk. This parameter is retained even after the source disk of the snapshot is released.
     *
     * @example d-j6c3ogynmvpi6wy7****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The tags of the snapshot. The default values contain snapshot source information.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'available'                  => 'Available',
        'instantAccess'              => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'progress'                   => 'Progress',
        'snapshotId'                 => 'SnapshotId',
        'sourceDiskId'               => 'SourceDiskId',
        'sourceDiskType'             => 'SourceDiskType',
        'tags'                       => 'Tags',
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
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
