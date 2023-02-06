<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @description Indicates whether the instant access feature is enabled. Valid values:
     *
     * - false: The instant access feature is disabled. The snapshot is a normal snapshot for which the instant access feature is disabled.
     * @example true
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The retention period of the instant access feature. After the retention period ends, the snapshot is automatically released.
     *
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
     * - data: data disk
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The tags of the snapshots in the snapshot-consistent group. The default value contains the details of the instance to which the snapshot-consistent group belongs.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
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
