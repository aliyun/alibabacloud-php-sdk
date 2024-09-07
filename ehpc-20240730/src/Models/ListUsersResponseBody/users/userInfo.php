<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description The time when the user was first added.
     *
     * @example 2014-08-22T17:46:47
     *
     * @var string
     */
    public $addTime;

    /**
     * @description The name of the permission group. Valid values:
     *
     * wheel: sudo permissions, which are suitable for administrators who need to manage clusters. In addition to submitting and debugging jobs, you can also run sudo commands to install software and restart nodes.
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @description The permission group ID.
     *
     * @example 100
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The user ID.
     *
     * @example 1001
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username.
     *
     * @example testuser
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'addTime'  => 'AddTime',
        'group'    => 'Group',
        'groupId'  => 'GroupId',
        'userId'   => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
