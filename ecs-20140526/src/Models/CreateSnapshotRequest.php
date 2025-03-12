<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The category of the snapshot. Valid values:
     *
     *   Standard: standard snapshot
     *   Flash: local snapshot
     *
     * >  This parameter is no longer used. By default, new standard snapshots of ESSDs are upgraded to instant access snapshots free of charge without the need for additional configurations. For more information, see [Use the instant access feature](https://help.aliyun.com/document_detail/193667.html).
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
     * This parameter is required.
     * @example d-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to enable the instant access feature. Valid values:
     *
     *   true: enables the instant access feature. This feature can be enabled only for ESSDs.
     *   false: does not enable the instant access feature. If InstantAccess is set to false, a standard snapshot is created.
     *
     * >  This parameter is no longer used. By default, new standard snapshots of ESSDs are upgraded to instant access snapshots free of charge without the need for additional configurations. For more information, see [Use the instant access feature](https://help.aliyun.com/document_detail/193667.html).
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description The validity period of the instant access feature. When the validity period ends, the feature is disabled and the instant access snapshot is automatically released. This parameter takes effect only when `InstantAccess` is set to true. Unit: days. Valid values: 1 to 65535.
     *
     * >  This parameter is no longer used. By default, new standard snapshots of ESSDs are upgraded to instant access snapshots free of charge without the need for additional configurations. For more information, see [Use the instant access feature](https://help.aliyun.com/document_detail/193667.html).
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
     *   Standard: standard snapshot
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
     * @description The retention period of the snapshot. Unit: days. Valid values: 1 to 65536. After the retention period ends, the snapshot is automatically released.
     *
     * This parameter is left empty by default, which indicates that the snapshot is not automatically released.
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length and start with a letter. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * >  The name cannot start with http:// or https://. The name cannot start with `auto` because the names of automatic snapshots start with auto.
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
