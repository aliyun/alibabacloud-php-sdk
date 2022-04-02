<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 权限类型
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @description 头像地址
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;

    /**
     * @description 云效用户ID
     *
     * @var string
     */
    public $externUserId;

    /**
     * @description Codeup用户Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 状态
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accessLevel'  => 'AccessLevel',
        'avatarUrl'    => 'AvatarUrl',
        'email'        => 'Email',
        'externUserId' => 'ExternUserId',
        'id'           => 'Id',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->externUserId) {
            $res['ExternUserId'] = $this->externUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExternUserId'])) {
            $model->externUserId = $map['ExternUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
