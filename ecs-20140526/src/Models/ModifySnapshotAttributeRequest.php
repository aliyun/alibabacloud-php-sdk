<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifySnapshotAttributeRequest extends Model
{
    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length and cannot start with [http:// or https://](http://https://。).
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to disable the instant access feature. Valid values:
     *
     *   true: disables the instant access feature.
     *   false: does not disable the instant access feature.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $disableInstantAccess;

    /**
     * @example Hide
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @example 111
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example Hide
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @example 111
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp199lyny9bb47pa****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with [http:// or https://. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).](http://https://。、（:）、（\_）（-）。)
     *
     * The name cannot start with auto because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'description'          => 'Description',
        'disableInstantAccess' => 'DisableInstantAccess',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snapshotId'           => 'SnapshotId',
        'snapshotName'         => 'SnapshotName',
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
        if (null !== $this->disableInstantAccess) {
            $res['DisableInstantAccess'] = $this->disableInstantAccess;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySnapshotAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableInstantAccess'])) {
            $model->disableInstantAccess = $map['DisableInstantAccess'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
