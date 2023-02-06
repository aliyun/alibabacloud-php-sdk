<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The type of the snapshot. Valid values:
     *
     *   Standard: normal snapshot
     *   Flash: local snapshot
     *
     * > This parameter will be removed in the future. We recommend that you use the `InstantAccess` parameter to ensure future compatibility. This parameter and the `InstantAccess` parameter cannot be specified at the same time. For more information, see the "Description" section of this topic.
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to enable the instant access feature. Valid values:
     *
     *   true: enables the instant access feature. This feature can be enabled only for enhanced SSDs (ESSDs).
     *
     **
     *
     **Note**After the instant access feature is enabled, an instant access (IA) snapshot is created and can be used to roll back disks or create disks across zones even when the snapshot is being created. This feature ensures that a new snapshot of an ESSD becomes available for use within five seconds regardless of the ESSD size.
     *
     *   false: does not enable the instant access feature. If InstantAccess is set to false, a normal snapshot is created.
     *
     * > This parameter and the `Category` parameter cannot be specified at the same time. For more information, see the "Description" section of this topic.
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The validity period of the instant access feature. When the validity period ends, the feature is disabled and the IA snapshot is automatically released. This parameter takes effect only when `InstantAccess` is set to true. Unit: days. Valid values: 1 to 65535.
     *
     * By default, the value of this parameter is the same as that of `RetentionDays`.
     * @example 1
     *
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which to assign the snapshot.
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
     * @description The retention period of the snapshot. Valid values: 1 to 65536. Unit: days. The snapshot is automatically released when its retention period expires.
     *
     * This parameter is empty by default, which indicates that the snapshot is not automatically released.
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * It cannot start with `auto` because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description > This parameter is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $storageLocationArn;

    /**
     * @description The tags to add to the snapshot.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'category'                   => 'Category',
        'clientToken'                => 'ClientToken',
        'description'                => 'Description',
        'diskId'                     => 'DiskId',
        'instantAccess'              => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceGroupId'            => 'ResourceGroupId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'retentionDays'              => 'RetentionDays',
        'snapshotName'               => 'SnapshotName',
        'storageLocationArn'         => 'StorageLocationArn',
        'tag'                        => 'Tag',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->storageLocationArn) {
            $res['StorageLocationArn'] = $this->storageLocationArn;
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
     * @return CreateSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['StorageLocationArn'])) {
            $model->storageLocationArn = $map['StorageLocationArn'];
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
