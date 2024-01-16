<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult;

use AlibabaCloud\Tea\Model;

class createdUsers extends Model
{
    /**
     * @description The email address of the end user.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the end user.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The mobile number of the end user.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @description The remarks of the end user.
     *
     * @example remark1
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'email'        => 'Email',
        'endUserId'    => 'EndUserId',
        'phone'        => 'Phone',
        'realNickName' => 'RealNickName',
        'remark'       => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->realNickName) {
            $res['RealNickName'] = $this->realNickName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createdUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RealNickName'])) {
            $model->realNickName = $map['RealNickName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
