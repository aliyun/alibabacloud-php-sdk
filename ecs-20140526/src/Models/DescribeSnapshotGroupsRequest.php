<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotGroupsRequest extends Model
{
    /**
     * @description This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string[]
     */
    public $additionalAttributes;

    /**
     * @description The ID of the instance.
     *
     * @example i-j6ca469urv8ei629****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the snapshot-consistent group.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The token that determines the start point of the next query. Set the value to the NextToken value that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the snapshot-consistent group. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the snapshot-consistent group belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of snapshot-consistent group N. Valid values of N: 1 to 10.
     *
     * @example ssg-j6ciyh3k52qp7ovm****
     *
     * @var string[]
     */
    public $snapshotGroupId;

    /**
     * @description The state of snapshot-consistent group N. Valid values of the second N: 1, 2, and 3. Valid values:
     *
     *   progressing: The snapshot-consistent group is being created.
     *   accomplished: The snapshot-consistent group is created.
     *   failed: The snapshot-consistent group fails to be created.
     *
     * @example accomplished
     *
     * @var string[]
     */
    public $status;

    /**
     * @description The tags of the snapshot-consistent group.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'additionalAttributes' => 'AdditionalAttributes',
        'instanceId'           => 'InstanceId',
        'maxResults'           => 'MaxResults',
        'name'                 => 'Name',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snapshotGroupId'      => 'SnapshotGroupId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalAttributes) {
            $res['AdditionalAttributes'] = $this->additionalAttributes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotGroupId) {
            $res['SnapshotGroupId'] = $this->snapshotGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalAttributes'])) {
            if (!empty($map['AdditionalAttributes'])) {
                $model->additionalAttributes = $map['AdditionalAttributes'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotGroupId'])) {
            if (!empty($map['SnapshotGroupId'])) {
                $model->snapshotGroupId = $map['SnapshotGroupId'];
            }
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
