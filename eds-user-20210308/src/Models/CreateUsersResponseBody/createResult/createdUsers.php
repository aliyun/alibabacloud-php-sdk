<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult;

use AlibabaCloud\Tea\Model;

class createdUsers extends Model
{
    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @example remark1
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'email'     => 'Email',
        'endUserId' => 'EndUserId',
        'phone'     => 'Phone',
        'remark'    => 'Remark',
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
