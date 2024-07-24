<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountPasswordRequest extends Model
{
    /**
     * @description The username of the account.
     *
     * This parameter is required.
     * @example testacc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The new password of the account. The new password must meet the following requirements:
     *
     *   It must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   It must be 8 to 32 characters in length.
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * This parameter is required.
     * @example Pw123456
     *
     * @var string
     */
    public $newAccountPassword;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password type.
     *
     * @example Tair
     *
     * @var string
     */
    public $passwordType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'DBClusterId'          => 'DBClusterId',
        'newAccountPassword'   => 'NewAccountPassword',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'passwordType'         => 'PasswordType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->newAccountPassword) {
            $res['NewAccountPassword'] = $this->newAccountPassword;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->passwordType) {
            $res['PasswordType'] = $this->passwordType;
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
     * @return ModifyAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['NewAccountPassword'])) {
            $model->newAccountPassword = $map['NewAccountPassword'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PasswordType'])) {
            $model->passwordType = $map['PasswordType'];
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
