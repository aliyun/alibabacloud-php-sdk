<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\BatchGetOnlineUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class onlineUsers extends Model
{
    /**
     * @description The time when the user joined the group. The value is a UTC timestamp. Unit: milliseconds.
     *
     * @example 12**45
     *
     * @var int
     */
    public $joinTime;

    /**
     * @description Indicates whether the user is online. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The ID of the user.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'joinTime' => 'JoinTime',
        'online' => 'Online',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
