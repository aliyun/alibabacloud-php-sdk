<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetAccountInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @var string
     */
    public $remark;

    /**
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
