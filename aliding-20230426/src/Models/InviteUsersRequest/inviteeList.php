<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;

use AlibabaCloud\Tea\Model;

class inviteeList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 测试用户
     *
     * @var string
     */
    public $nick;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'nick'   => 'Nick',
        'userId' => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inviteeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
