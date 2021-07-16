<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description ramId
     *
     * @var string
     */
    public $ramId;

    /**
     * @description 是否当前用户
     *
     * @var bool
     */
    public $isEditableUser;

    /**
     * @description CUSTOMER:主账号，SUB:子账号
     *
     * @var string
     */
    public $accountType;

    /**
     * @description email
     *
     * @var string
     */
    public $email;

    /**
     * @description 用户昵称
     *
     * @var string
     */
    public $username;

    /**
     * @description 用户手机号
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'userId'         => 'userId',
        'ramId'          => 'ramId',
        'isEditableUser' => 'isEditableUser',
        'accountType'    => 'accountType',
        'email'          => 'email',
        'username'       => 'username',
        'phone'          => 'phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->isEditableUser) {
            $res['isEditableUser'] = $this->isEditableUser;
        }
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['isEditableUser'])) {
            $model->isEditableUser = $map['isEditableUser'];
        }
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
