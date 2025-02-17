<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ModifyImageShareGroupPermissionRequest extends Model
{
    /**
     * @var string[]
     */
    public $addGroup;
    /**
     * @var string[]
     */
    public $removeGroup;
    /**
     * @var string
     */
    public $imageId;
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
        'addGroup'             => 'AddGroup',
        'removeGroup'          => 'RemoveGroup',
        'imageId'              => 'ImageId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->addGroup)) {
            Model::validateArray($this->addGroup);
        }
        if (\is_array($this->removeGroup)) {
            Model::validateArray($this->removeGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addGroup) {
            if (\is_array($this->addGroup)) {
                $res['AddGroup'] = [];
                $n1              = 0;
                foreach ($this->addGroup as $item1) {
                    $res['AddGroup'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->removeGroup) {
            if (\is_array($this->removeGroup)) {
                $res['RemoveGroup'] = [];
                $n1                 = 0;
                foreach ($this->removeGroup as $item1) {
                    $res['RemoveGroup'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (isset($map['AddGroup'])) {
            if (!empty($map['AddGroup'])) {
                $model->addGroup = [];
                $n1              = 0;
                foreach ($map['AddGroup'] as $item1) {
                    $model->addGroup[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RemoveGroup'])) {
            if (!empty($map['RemoveGroup'])) {
                $model->removeGroup = [];
                $n1                 = 0;
                foreach ($map['RemoveGroup'] as $item1) {
                    $model->removeGroup[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
