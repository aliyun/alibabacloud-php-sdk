<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @example c26f36de-1ec8-496a-a828-880676c5ef81
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 5678@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 188898989892
     *
     * @var string
     */
    public $phone;

    /**
     * @example 4787654378343
     *
     * @var int
     */
    public $ramId;

    /**
     * @var int[]
     */
    public $roleIdList;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'clientToken' => 'clientToken',
        'email'       => 'email',
        'phone'       => 'phone',
        'ramId'       => 'ramId',
        'roleIdList'  => 'roleIdList',
        'username'    => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->roleIdList) {
            $res['roleIdList'] = $this->roleIdList;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['roleIdList'])) {
            if (!empty($map['roleIdList'])) {
                $model->roleIdList = $map['roleIdList'];
            }
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
