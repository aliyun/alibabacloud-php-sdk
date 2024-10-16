<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the account. The value must be 2 to 256 characters in length. The value can contain letters, digits, underscores (_), and hyphens (-), and must start with a letter.
     *
     * > : The name cannot start with http:// or https://.
     * @example Test Account A
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the database account.
     *
     *
     *   The name must be unique.
     *
     *   The name can contain lowercase letters, digits, and underscores (_). For MySQL databases, the name can contain uppercase letters.
     *
     *   The name must start with a letter and end with a letter or digit.
     *
     *   For MySQL databases, the name of the privileged account cannot be the same as that of the standard account. For example, if the name of the privileged account is `Test1`, the name of the standard account cannot be `test1`.
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
     *   For more information about invalid characters, see [Forbidden keywords](https://help.aliyun.com/document_detail/26317.html).
     *
     * This parameter is required.
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the account.
     *
     *
     *   The value must be 8 to 32 characters in length.
     *
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * This parameter is required.
     * @example Test123456
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The account type. Valid values:
     *
     *   **Normal** (default): standard account.
     *   **Super**: privileged account.
     *   **Sysadmin**: system admin account. The account type is available only for ApsaraDB RDS for SQL Server instances.
     *
     * Before you create a system admin account, check whether the instance meets all prerequisites. For more information, see [Create a system admin account](https://help.aliyun.com/document_detail/170736.html).
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description Specifies whether to use a password policy.
     *
     * >
     *
     *   This parameter is available only for ApsaraDB RDS for SQL Server instances that do not belong to the shared instance family and do not run SQL Server 2008 R2.
     *
     *   Before you call this operation, you must configure a password policy for the account of your instance. For more information, see [Configure a password policy for the account of an ApsaraDB RDS for SQL Server instance](https://help.aliyun.com/document_detail/2848317.html).
     *
     * @example true
     *
     * @var bool
     */
    public $checkPolicy;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
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
        'checkPolicy'          => 'CheckPolicy',
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
        if (null !== $this->checkPolicy) {
            $res['CheckPolicy'] = $this->checkPolicy;
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
        if (isset($map['CheckPolicy'])) {
            $model->checkPolicy = $map['CheckPolicy'];
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
