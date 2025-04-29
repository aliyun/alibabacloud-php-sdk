<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ModifyImageSharePermissionRequest extends Model
{
    /**
     * @var string[]
     */
    public $addAccount;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isPublic;

    /**
     * @var string
     */
    public $launchPermission;

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
     * @var string[]
     */
    public $removeAccount;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addAccount' => 'AddAccount',
        'dryRun' => 'DryRun',
        'imageId' => 'ImageId',
        'isPublic' => 'IsPublic',
        'launchPermission' => 'LaunchPermission',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeAccount' => 'RemoveAccount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->addAccount)) {
            Model::validateArray($this->addAccount);
        }
        if (\is_array($this->removeAccount)) {
            Model::validateArray($this->removeAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAccount) {
            if (\is_array($this->addAccount)) {
                $res['AddAccount'] = [];
                $n1 = 0;
                foreach ($this->addAccount as $item1) {
                    $res['AddAccount'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }

        if (null !== $this->launchPermission) {
            $res['LaunchPermission'] = $this->launchPermission;
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

        if (null !== $this->removeAccount) {
            if (\is_array($this->removeAccount)) {
                $res['RemoveAccount'] = [];
                $n1 = 0;
                foreach ($this->removeAccount as $item1) {
                    $res['RemoveAccount'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = [];
                $n1 = 0;
                foreach ($map['AddAccount'] as $item1) {
                    $model->addAccount[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }

        if (isset($map['LaunchPermission'])) {
            $model->launchPermission = $map['LaunchPermission'];
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

        if (isset($map['RemoveAccount'])) {
            if (!empty($map['RemoveAccount'])) {
                $model->removeAccount = [];
                $n1 = 0;
                foreach ($map['RemoveAccount'] as $item1) {
                    $model->removeAccount[$n1++] = $item1;
                }
            }
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
