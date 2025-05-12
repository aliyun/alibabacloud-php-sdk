<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class TagCustomPersonRequest extends Model
{
    /**
     * @var string
     */
    public $categoryDescription;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

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
    public $personDescription;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'categoryDescription' => 'CategoryDescription',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'personDescription' => 'PersonDescription',
        'personId' => 'PersonId',
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
        if (null !== $this->categoryDescription) {
            $res['CategoryDescription'] = $this->categoryDescription;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->personDescription) {
            $res['PersonDescription'] = $this->personDescription;
        }

        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['CategoryDescription'])) {
            $model->categoryDescription = $map['CategoryDescription'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PersonDescription'])) {
            $model->personDescription = $map['PersonDescription'];
        }

        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
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
