<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchAccountInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
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
    public $username;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
