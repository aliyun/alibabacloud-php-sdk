<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest\tag;
use AlibabaCloud\Tea\Model;

class CopySnapshotRequest extends Model
{
    /**
     * @description >This parameter is currently in invitational preview and unavailable for public use.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description The ID of the destination region to which to copy the source snapshot.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The description of the new snapshot. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * This parameter is empty by default.
     * @example CopySnapshotDemo
     *
     * @var string
     */
    public $destinationSnapshotDescription;

    /**
     * @description The name of the new snapshot. The name must be 2 to 128 characters in length. It must start with a letter and cannot start http:// or https://. The name can contain digits, letters, colons (:), underscores (\_), and hyphens (-).
     *
     * This parameter is empty by default.
     * @example CopySnapshotDemo
     *
     * @var string
     */
    public $destinationSnapshotName;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $destinationStorageLocationArn;

    /**
     * @description Specifies whether to encrypt the new snapshot. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the customer master key (CMK) in Key Management Service (KMS) in the destination region.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the source snapshot. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is not publicly available.
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
     * @description The retention period of the new snapshot. Unit: days. The new snapshot is automatically released when its retention period ends. Valid values: 1 to 65536.
     *
     * This parameter is empty by default, which indicates that the snapshot is not automatically released.
     * @example 60
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The ID of the source snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The tag key and value of the new snapshot.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'arn'                            => 'Arn',
        'destinationRegionId'            => 'DestinationRegionId',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'destinationSnapshotName'        => 'DestinationSnapshotName',
        'destinationStorageLocationArn'  => 'DestinationStorageLocationArn',
        'encrypted'                      => 'Encrypted',
        'KMSKeyId'                       => 'KMSKeyId',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'retentionDays'                  => 'RetentionDays',
        'snapshotId'                     => 'SnapshotId',
        'tag'                            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->destinationSnapshotDescription) {
            $res['DestinationSnapshotDescription'] = $this->destinationSnapshotDescription;
        }
        if (null !== $this->destinationSnapshotName) {
            $res['DestinationSnapshotName'] = $this->destinationSnapshotName;
        }
        if (null !== $this->destinationStorageLocationArn) {
            $res['DestinationStorageLocationArn'] = $this->destinationStorageLocationArn;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
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
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
     * @return CopySnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['DestinationSnapshotDescription'])) {
            $model->destinationSnapshotDescription = $map['DestinationSnapshotDescription'];
        }
        if (isset($map['DestinationSnapshotName'])) {
            $model->destinationSnapshotName = $map['DestinationSnapshotName'];
        }
        if (isset($map['DestinationStorageLocationArn'])) {
            $model->destinationStorageLocationArn = $map['DestinationStorageLocationArn'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
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
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
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
