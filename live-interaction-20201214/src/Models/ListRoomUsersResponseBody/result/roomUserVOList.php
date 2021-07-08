<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomUserVOList extends Model
{
    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户的昵称。
     *
     * @var string
     */
    public $nick;
    protected $_name = [
        'roomId' => 'RoomId',
        'userId' => 'UserId',
        'nick'   => 'Nick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }

        return $model;
    }
}
