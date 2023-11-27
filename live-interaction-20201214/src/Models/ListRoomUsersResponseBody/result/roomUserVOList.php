<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomUserVOList extends Model
{
    /**
     * @example Tom
     *
     * @var string
     */
    public $nick;

    /**
     * @example 9645**c180a1
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 62**59
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'nick'   => 'Nick',
        'roomId' => 'RoomId',
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomUserVOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
