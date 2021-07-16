<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description 用户ramId
     *
     * @var int
     */
    public $ramId;

    /**
     * @description 手机号
     *
     * @var string
     */
    public $phone;

    /**
     * @description 用户名
     *
     * @var string
     */
    public $username;

    /**
     * @description 邮件
     *
     * @var string
     */
    public $email;

    /**
     * @description 用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ramId'       => 'ramId',
        'phone'       => 'phone',
        'username'    => 'username',
        'email'       => 'email',
        'userId'      => 'userId',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
