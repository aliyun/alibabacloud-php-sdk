<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The database account ID.
     *
     * @example 6
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The name of the database account.
     *
     * @example test
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The ID of the database to which the database account belongs.
     *
     * @example 70
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description Indicates whether the user is authorized to manage the database account. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isAuthorized;

    /**
     * @description The protocol used by the database account. Valid values:
     *
     *   **MySQL**
     *   **Oracle**
     *   **PostgreSQL**
     *   **SQLServer**
     *
     * @example MySQL
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'databaseAccountId'   => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId'          => 'DatabaseId',
        'isAuthorized'        => 'IsAuthorized',
        'protocolName'        => 'ProtocolName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return databaseAccounts
     */
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
