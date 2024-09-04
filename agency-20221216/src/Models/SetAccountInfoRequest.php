<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetAccountInfoRequest extends Model
{
    /**
     * @description Result Code:
     *   200 OK
     *   1109 System error
     *   3030 Sub Account Nickname exceeds maximum length,  maximum length 150 bytes.
     *   3031 Remark exceeds maximum length,  maximum length 3000 bytes.
     *
     * @example Message information
     *
     * @var string
     */
    public $accountNickname;

    /**
     * @description Customer manager（limited 50 character）
     *
     * @example abc
     *
     * @var string
     */
    public $customerBd;

    /**
     * @description success
     *
     * @example Candidate Value: True/False, which indicates whether the current API call itself is successful. It does not guarantee the success of subsequent business operations.
     *
     * @var string
     */
    public $remark;

    /**
     * @description Request ID, Alibaba Cloud will track errors with this.
     *
     * This parameter is required.
     * @example 1133166938931507
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'customerBd'      => 'CustomerBd',
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
