<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the initial account.
     *
     * @example testacc02
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the initial account.
     *
     *   The name can contain lowercase letters, digits, and underscores (_).
     *   The name must start with a lowercase letter and end with a lowercase letter or a digit.
     *   The name cannot start with gp.
     *   The name must be 2 to 16 characters in length.
     *
     * This parameter is required.
     *
     * @example testacc02
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the initial account.
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *   The password must be 8 to 32 characters in length.
     *
     * This parameter is required.
     *
     * @example Pw123456
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The type of the initial account. Default value: Super, which specifies a privileged account. To create a standard account, set the value to Normal.
     *
     * @example Super
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     *
     * This parameter is required.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example test01
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'accountType' => 'AccountType',
        'DBInstanceId' => 'DBInstanceId',
        'databaseName' => 'DatabaseName',
        'ownerId' => 'OwnerId',
    ];

    public function validate() {}

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
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
