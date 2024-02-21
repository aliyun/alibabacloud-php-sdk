<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountStatus;

    /**
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
     * @return accounts
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
