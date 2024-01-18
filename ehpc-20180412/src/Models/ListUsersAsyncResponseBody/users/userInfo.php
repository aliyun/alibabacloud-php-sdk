<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersAsyncResponseBody\users;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description The time when the user was created.
     *
     * @example 2022-09-28T09:05:26.000Z
     *
     * @var string
     */
    public $addTime;

    /**
     * @description The user groups.
     *
     * @example wheel
     *
     * @var string
     */
    public $group;

    /**
     * @description The user group ID.
     *
     * @example 10
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The username of the account.
     *
     * @example testuser
     *
     * @var string
     */
    public $name;

    /**
     * @description The user ID.
     *
     * @example 1000
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'addTime' => 'AddTime',
        'group'   => 'Group',
        'groupId' => 'GroupId',
        'name'    => 'Name',
        'userId'  => 'UserId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
