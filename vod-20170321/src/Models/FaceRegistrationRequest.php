<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class FaceRegistrationRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $imageIds;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personLibrary;

    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceOwnerId;
    protected $_name = [
        'category' => 'Category',
        'imageIds' => 'ImageIds',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'personId' => 'PersonId',
        'personLibrary' => 'PersonLibrary',
        'personName' => 'PersonName',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        if (null !== $this->personLibrary) {
            $res['PersonLibrary'] = $this->personLibrary;
        }

        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        if (isset($map['PersonLibrary'])) {
            $model->personLibrary = $map['PersonLibrary'];
        }

        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
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
