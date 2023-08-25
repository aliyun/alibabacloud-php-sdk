<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the database account.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description can be up to 256 characters in length.
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
     *   **Normal**: standard account.
     *   **Super**: privileged account.
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountPassword'    => 'AccountPassword',
        'accountType'        => 'AccountType',
        'DBClusterId'        => 'DBClusterId',
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

        return $model;
    }
}
