<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\tags;
use AlibabaCloud\Tea\Model;

class snapshotGroup extends Model
{
    /**
     * @description The time when the snapshot-consistent group was created.
     *
     * @example 2021-03-23T10:58:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the snapshot-consistent group.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance to which the snapshot-consistent group belongs. This parameter has a value only when all snapshots in the snapshot-consistent group belong to the same instance. If snapshots in the snapshot-consistent group belong to different instances, you can check the response parameters that start with `Snapshots.Snapshot.Tags.` for the ID of the instance to which each snapshot in the snapshot-consistent group belongs.
     *
     * @example i-j6ca469urv8ei629****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the snapshot-consistent group.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $progressStatus;

    /**
     * @description The ID of the resource group to which the snapshot-consistent group belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the snapshot-consistent group.
     *
     * @example ssg-j6ciyh3k52qp7ovm****
     *
     * @var string
     */
    public $snapshotGroupId;

    /**
     * @description The snapshots in the snapshot-consistent group.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The state of the snapshot-consistent group. Valid values:
     *
     *   progressing: The snapshot-consistent group was being created.
     *   accomplished: The snapshot-consistent group was created.
     *   failed: The snapshot-consistent group failed to be created.
     *
     * @example accomplished
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the snapshot-consistent group.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'progressStatus'  => 'ProgressStatus',
        'resourceGroupId' => 'ResourceGroupId',
        'snapshotGroupId' => 'SnapshotGroupId',
        'snapshots'       => 'Snapshots',
        'status'          => 'Status',
        'tags'            => 'Tags',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progressStatus) {
            $res['ProgressStatus'] = $this->progressStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->snapshotGroupId) {
            $res['SnapshotGroupId'] = $this->snapshotGroupId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotGroup
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProgressStatus'])) {
            $model->progressStatus = $map['ProgressStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SnapshotGroupId'])) {
            $model->snapshotGroupId = $map['SnapshotGroupId'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
