<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * By default, this parameter is left empty.
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The retention period of the snapshot. Valid values: 1 to 65536. Unit: days. The snapshot is automatically released when its retention period expires.
     *
     * This parameter is empty by default, which indicates that the snapshot is not automatically released.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The cloud disk ID.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Creates a snapshot for a disk.
     *
     * @example d-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique across requests. **The token can contain only ASCII characters and cannot exceed 64 characters in length.** For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The ID of the resource group to which to assign the snapshot.
     *
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
     * @description The snapshot type. Valid values:
     *
     *   Standard: normal snapshot
     *   Flash: local snapshot
     *
     * > This parameter will be removed in the future. We recommend that you use the `InstantAccess` parameter to ensure future compatibility. This parameter and the `InstantAccess` parameter cannot be specified at the same time. For more information, see the "Description" section of this topic.
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
     * @description The snapshot name. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * The name cannot start with `auto` because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The local snapshot feature is replaced by the instant access feature. Parameter description:
     *
     *   If you used the local snapshot feature before December 14, 2020, you can use the `Category` or `InstantAccess` parameter as expected and must take note of the following items:
     *
     *   The `Category` and `InstantAccess` parameters cannot be specified at the same time.
     *   If neither the `Category` nor `InstantAccess` parameters is specified, normal snapshots are created.
     *
     *   If you did not use the local snapshot feature before December 14, 2020, you can use the `InstantAccess` parameter but cannot use the `Category` parameter.
     *
     * You cannot create snapshots for a disk in the following scenarios:
     *
     *   The number of manual snapshots of the disk has reached 256.
     *   A snapshot is being created for the disk.
     *   The instance to which the disk is attached has never been started.
     *   The ECS instance to which the disk is attached is not in the **Stopped** or **Running** state.````
     *   If the response contains `{"OperationLocks": {"LockReason" : "security"}}`, the instance is locked for security reasons. No operations are allowed on the instance.
     *
     * When you create a snapshot, take note of the following items:
     *
     *   If a snapshot is being created, you cannot use this snapshot to create a custom image by calling the [CreateImage](~~25535~~) operation.
     *   When a snapshot is being created for a disk that is attached to an instance, do not change the instance state.
     *   You can create snapshots for a disk that is in the **Expired** state.`` If the release time scheduled for a disk arrives while a snapshot is being created for the disk, the snapshot is in the **Creating** state and is deleted when the disk is released.``
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The value of tag N that you want to add to the snapshot. Valid values of N: 1 to 20. The tag value can be an empty string. It can be up to 128 characters in length and cannot start with acs: or contain [http:// or https://.](http://https://。)
     *
     * @example null
     *
     * @var string
     */
    public $storageLocationArn;

    /**
     * @description Specifies whether to enable the instant access feature. Valid values:
     *
     *   true: enables the instant access feature. This feature can be enabled only for enhanced SSDs (ESSDs).
     *
     **
     *
     **Note**After the instant access feature is enabled, an instant access (IA) snapshot is created and can be used to roll back disks or create disks across zones even when the snapshot is being created. This feature ensures that a new ESSD snapshot is available for use as soon as possible regardless of its size.
     *
     *   false: does not enable the instant access feature. If InstantAccess is set to false, a normal snapshot is created.
     *
     * > This parameter and the `Category` parameter cannot be specified at the same time. For more information, see the "Description" section of this topic.
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
