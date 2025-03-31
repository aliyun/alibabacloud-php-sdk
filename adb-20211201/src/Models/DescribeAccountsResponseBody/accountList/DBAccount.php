<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList;

use AlibabaCloud\Dara\Model;

class DBAccount extends Model
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

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $ramUsers;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'engine' => 'Engine',
        'ramUsers' => 'RamUsers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->ramUsers) {
            $res['RamUsers'] = $this->ramUsers;
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

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['RamUsers'])) {
            $model->ramUsers = $map['RamUsers'];
        }

        return $model;
    }
}
