<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the account. The value must be 2 to 256 characters in length. The value can contain letters, digits, underscores (\_), and hyphens (-), and must start with a letter.
     *
     * > : The name cannot start with http:// or https://.
     * @example Test Account A
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The username of the account.
     *
     * >
     *
     *   The value must be unique.
     *
     *   The value must start with a lowercase letter, and end with a lowercase letter or a digit.
     *
     *   The value can contain lowercase letters, digits, and underscores (\_).
     *
     *   The length of the value must meet the following requirements:
     *
     *   If the instance runs MySQL 5.7 or MySQL 8.0, the value must be 2 to 32 characters in length.
     *   If the instance runs MySQL 5.6, the value must be 2 to 16 characters in length.
     *   If the instance runs SQL Server, the value must be 2 to 64 characters in length.
     *   If the instance runs PostgreSQL with cloud disks, the value must be 2 to 63 characters in length.
     *   If the instance runs PostgreSQL with local disks, the value must be 2 to 16 characters in length.
     *   If the instance runs MariaDB, the value must be 2 to 16 characters in length.
     *
     *   For more information about invalid characters, see [Forbidden keywords table](~~26317~~).
     *
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the account.
     *
     * >
     *
     *   The value must be 8 to 32 characters in length.
     *
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * @example Test123456
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The type of the account. Valid values:
     *
     *   **Normal**: standard account
     *   **Super**: privileged account
     *
     * Default value: **Normal**.
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountDescription'   => 'AccountDescription',
        'accountName'          => 'AccountName',
        'accountPassword'      => 'AccountPassword',
        'accountType'          => 'AccountType',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return CreateAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
