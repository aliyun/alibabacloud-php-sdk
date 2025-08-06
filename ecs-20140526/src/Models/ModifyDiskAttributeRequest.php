<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ModifyDiskAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var bool
     */
    public $enableAutoSnapshot;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'burstingEnabled' => 'BurstingEnabled',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'diskId' => 'DiskId',
        'diskIds' => 'DiskIds',
        'diskName' => 'DiskName',
        'enableAutoSnapshot' => 'EnableAutoSnapshot',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->diskIds)) {
            Model::validateArray($this->diskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }

        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->diskIds) {
            if (\is_array($this->diskIds)) {
                $res['DiskIds'] = [];
                $n1 = 0;
                foreach ($this->diskIds as $item1) {
                    $res['DiskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }

        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }

        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = [];
                $n1 = 0;
                foreach ($map['DiskIds'] as $item1) {
                    $model->diskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }

        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
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

        return $model;
    }
}
