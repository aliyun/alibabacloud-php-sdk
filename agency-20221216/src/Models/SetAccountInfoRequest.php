<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetAccountInfoRequest extends Model
{
    /**
     * @description Sub Account Nickname.
     * Use the official name of Company, if Sub Account is an enterprise.
     * Use the official name of Partner, if Sub Account is a T2 reseller.
     *
     * @example my account
     *
     * @var string
     */
    public $accountNickname;

    /**
     * @description Description of Sub Account.
     *
     * @example test account
     *
     * @var string
     */
    public $remark;

    /**
     * @description The UID of Sub Account.
     *
     * @example 1133166938931507
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'remark'          => 'Remark',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNickname) {
            $res['AccountNickname'] = $this->accountNickname;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAccountInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNickname'])) {
            $model->accountNickname = $map['AccountNickname'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
