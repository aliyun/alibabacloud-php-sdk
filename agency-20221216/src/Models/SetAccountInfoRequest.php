<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class SetAccountInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @var string
     */
    public $customerBd;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'customerBd' => 'CustomerBd',
        'remark' => 'Remark',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNickname) {
            $res['AccountNickname'] = $this->accountNickname;
        }

        if (null !== $this->customerBd) {
            $res['CustomerBd'] = $this->customerBd;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AccountNickname'])) {
            $model->accountNickname = $map['AccountNickname'];
        }

        if (isset($map['CustomerBd'])) {
            $model->customerBd = $map['CustomerBd'];
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
