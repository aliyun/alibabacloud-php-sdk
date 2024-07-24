<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateCommerceSettingRequest extends Model
{
    /**
     * @description Specifies whether to display the shopping cart button.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $cartEnable;

    /**
     * @description Specifies whether to display the catalog button.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $catalogVisible;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The phone number.
     *
     * This parameter is required.
     * @example 1380000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cartEnable'           => 'CartEnable',
        'catalogVisible'       => 'CatalogVisible',
        'custSpaceId'          => 'CustSpaceId',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cartEnable) {
            $res['CartEnable'] = $this->cartEnable;
        }
        if (null !== $this->catalogVisible) {
            $res['CatalogVisible'] = $this->catalogVisible;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
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
     * @return UpdateCommerceSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CartEnable'])) {
            $model->cartEnable = $map['CartEnable'];
        }
        if (isset($map['CatalogVisible'])) {
            $model->catalogVisible = $map['CatalogVisible'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
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
