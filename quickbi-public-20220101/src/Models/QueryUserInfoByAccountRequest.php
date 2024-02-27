<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryUserInfoByAccountRequest extends Model
{
    /**
     * @description Enter the name or ID of the Alibaba Cloud account that you want to query.
     *
     *   When you enter an account name:
     *
     *   If the organization user is a master account, such as main_account, the query account format is master account. That is, the main account main_account to be entered.
     *   If the organization user is a RAM user, such as a <zhangsan@test.onaliyun.com>, the query account format is the head of the RAM user, that is, the RAM user to be entered is zhangsan.
     *
     *   ID：
     *
     *   Enter the UID of the account to query the account information.
     *
     * @example 1386587****@163.com
     *
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $parentAccountName;
    protected $_name = [
        'account'           => 'Account',
        'parentAccountName' => 'ParentAccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->parentAccountName) {
            $res['ParentAccountName'] = $this->parentAccountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserInfoByAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['ParentAccountName'])) {
            $model->parentAccountName = $map['ParentAccountName'];
        }

        return $model;
    }
}
