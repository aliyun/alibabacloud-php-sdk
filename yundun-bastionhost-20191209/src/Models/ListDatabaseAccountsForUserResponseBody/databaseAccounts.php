<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserResponseBody;

use AlibabaCloud\Dara\Model;

class databaseAccounts extends Model
{
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
     * @var bool
     */
    public $isAuthorized;

    /**
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'databaseAccountId' => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId' => 'DatabaseId',
        'isAuthorized' => 'IsAuthorized',
        'protocolName' => 'ProtocolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }

        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->isAuthorized) {
            $res['IsAuthorized'] = $this->isAuthorized;
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
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }

        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        if (isset($map['IsAuthorized'])) {
            $model->isAuthorized = $map['IsAuthorized'];
        }

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
