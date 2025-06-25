<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabaseAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class databaseAccounts extends Model
{
    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $databaseAccountId;

    /**
     * @var string
     */
    public $databaseAccountName;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $hasPassword;

    /**
     * @var string
     */
    public $loginAttribute;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
