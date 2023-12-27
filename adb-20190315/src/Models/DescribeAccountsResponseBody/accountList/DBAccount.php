<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponseBody\accountList;

use AlibabaCloud\Tea\Model;

class DBAccount extends Model
{
    /**
     * @description The description of the database account.
     *
     * @example C@test
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the database account.
     *
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The state of the database account. Valid values:
     *
     *   **Creating**
     *   **Available**
     *   **Deleting**
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

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
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
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
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBAccount
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        return $model;
    }
}
