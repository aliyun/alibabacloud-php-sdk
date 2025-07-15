<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserResponseBody\result;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description The time when the user joined the message group. The value is a UTC timestamp.
     *
     * @example 12**45
     *
     * @var int
     */
    public $joinTime;

    /**
     * @description The ID of the user.
     *
     * @example de1**a0,hu**9
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'joinTime' => 'JoinTime',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
