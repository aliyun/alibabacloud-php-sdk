<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabaseAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The name of the PostgreSQL or Oracle database.
     *
     * @example xe
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The database account ID.
     *
     * @example 3
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The name of the database account.
     *
     * @example system
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The database ID.
     *
     * @example 2
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description Indicates whether a password is configured for the database host account.
     *
     * @example true
     *
     * @var string
     */
    public $hasPassword;

    /**
     * @description The logon attribute. One of the following values is returned if the database engine is Oracle:
     *
     *   **SERVICENAME**
     *   **SID**
     *
     * @example SID
     *
     * @var string
     */
    public $loginAttribute;

    /**
     * @description The protocol that is used by the database account.
     *
     * @example MySQL
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'DBName' => 'DBName',
        'databaseAccountId' => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId' => 'DatabaseId',
        'hasPassword' => 'HasPassword',
        'loginAttribute' => 'LoginAttribute',
        'protocolName' => 'ProtocolName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }
        if (null !== $this->loginAttribute) {
            $res['LoginAttribute'] = $this->loginAttribute;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }
        if (isset($map['LoginAttribute'])) {
            $model->loginAttribute = $map['LoginAttribute'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
