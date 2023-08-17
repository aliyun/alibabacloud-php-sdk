<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the database account.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description can be up to 256 characters in length.
     *
     * @example Test account
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the database account.
     *
     *   The name must start with a lowercase letter and end with a lowercase letter or a digit.
     *   The name can contain lowercase letters, digits, and underscores (\_).
     *   The name must be 2 to 16 characters in length.
     *   Reserved account names such as root, admin, and opsadmin cannot be used.
     *
     * @example test_accout
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the database account.
     *
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *   The password must be 8 to 32 characters in length.
     *
     * @example Test_accout1
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The type of the database account. Valid values:
     *
     *   **Normal**: standard account. Up to 256 standard accounts can be created for a cluster.
     *   **Super** (default): privileged account. Only a single privileged account can be created for a cluster.
     *
     * >  If a cluster does not have accounts, you can specify this parameter to create a privileged account or standard account. If a cluster has a privileged account, you must set this parameter to Normal to create a standard account. Otherwise, the operation fails. After an account is created, the privileged account has permissions on all databases of the cluster. The standard account does not have permissions and must be granted permissions on specific databases by the privileged account. For more information, see GRANT.
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to view cluster IDs.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

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
        'DBClusterId'          => 'DBClusterId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
