<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageAttributeRequest extends Model
{
    /**
     * @description The IDs of the Alibaba Cloud accounts that are authorized to share images. You can specify up to 10 Alibaba Cloud accounts.
     *
     * @example 123456******
     *
     * @var string[]
     */
    public $addAccount;

    /**
     * @description The description of the custom image. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`. By default, this parameter is empty, which indicates that the original description is retained.
     *
     * @example newDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The image ID.
     *
     * @example cpm-xxxxxxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It cannot start with `http://` or `https://`. By default, this parameter is empty, which indicates that the original name is retained.
     *
     * @example newImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the Alibaba Cloud accounts from which you want to revoke image sharing permissions. You can specify up to 10 Alibaba Cloud accounts.
     *
     * @example 987654******
     *
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
        'addAccount'           => 'AddAccount',
        'description'          => 'Description',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'removeAccount'        => 'RemoveAccount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
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
            $res['RemoveAccount'] = $this->removeAccount;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
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
                $model->removeAccount = $map['RemoveAccount'];
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
