<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifySnapshotGroupRequest extends Model
{
    /**
     * @description The new name of the snapshot-consistent group. The name must be 2 to 128 characters in length. It can contain letters, digits, periods (.), underscores (\_), hyphens (-), and colons (:). It must start with a letter or a digit and cannot start with `http://` or `https://`.
     *
     * @example This is new description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the snapshot-consistent group. You can call the [DescribeSnapshotGroups](~~210940~~) operation to query the IDs of one or more snapshot-consistent groups.
     *
     * @example testName02
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The operation that you want to perform. Set the value to **ModifySnapshotGroup**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The region ID of the snapshot-consistent group. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example ssg-j6ciyh3k52qp7ovm****
     *
     * @var string
     */
    public $snapshotGroupId;
    protected $_name = [
        'description'          => 'Description',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snapshotGroupId'      => 'SnapshotGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotGroupId) {
            $res['SnapshotGroupId'] = $this->snapshotGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySnapshotGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotGroupId'])) {
            $model->snapshotGroupId = $map['SnapshotGroupId'];
        }

        return $model;
    }
}
