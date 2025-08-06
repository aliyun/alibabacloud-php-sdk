<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotGroupRequest\tag;

class CreateSnapshotGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $diskId;

    /**
     * @var string[]
     */
    public $excludeDiskId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
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
     * @var string
     */
    public $regionId;

    /**
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
     * @var string
     */
    public $storageLocationArn;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'diskId' => 'DiskId',
        'excludeDiskId' => 'ExcludeDiskId',
        'instanceId' => 'InstanceId',
        'instantAccess' => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageLocationArn' => 'StorageLocationArn',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->diskId)) {
            Model::validateArray($this->diskId);
        }
        if (\is_array($this->excludeDiskId)) {
            Model::validateArray($this->excludeDiskId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskId) {
            if (\is_array($this->diskId)) {
                $res['DiskId'] = [];
                $n1 = 0;
                foreach ($this->diskId as $item1) {
                    $res['DiskId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeDiskId) {
            if (\is_array($this->excludeDiskId)) {
                $res['ExcludeDiskId'] = [];
                $n1 = 0;
                foreach ($this->excludeDiskId as $item1) {
                    $res['ExcludeDiskId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }

        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->storageLocationArn) {
            $res['StorageLocationArn'] = $this->storageLocationArn;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = [];
                $n1 = 0;
                foreach ($map['DiskId'] as $item1) {
                    $model->diskId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeDiskId'])) {
            if (!empty($map['ExcludeDiskId'])) {
                $model->excludeDiskId = [];
                $n1 = 0;
                foreach ($map['ExcludeDiskId'] as $item1) {
                    $model->excludeDiskId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }

        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StorageLocationArn'])) {
            $model->storageLocationArn = $map['StorageLocationArn'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
