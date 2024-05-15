<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 166***980757310
     *
     * @var string
     */
    public $accountNo;

    /**
     * @description This parameter is required.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $accountType;

    /**
     * @description This parameter is required.
     *
     * @example ADMIN
     *
     * @var string
     */
    public $role;

    /**
     * @example user1
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountNo'   => 'AccountNo',
        'accountType' => 'AccountType',
        'role'        => 'Role',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
