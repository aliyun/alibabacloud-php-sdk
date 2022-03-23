<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class KickRoomUserRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $blockTime;

    /**
     * @description 被踢出房间的用户ID。
     *
     * @var string
     */
    public $kickUser;

    /**
     * @description 房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 操作人的用户ID，用于表示谁执行了踢人操作。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'     => 'AppId',
        'blockTime' => 'BlockTime',
        'kickUser'  => 'KickUser',
        'roomId'    => 'RoomId',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->blockTime) {
            $res['BlockTime'] = $this->blockTime;
        }
        if (null !== $this->kickUser) {
            $res['KickUser'] = $this->kickUser;
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
     * @return KickRoomUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BlockTime'])) {
            $model->blockTime = $map['BlockTime'];
        }
        if (isset($map['KickUser'])) {
            $model->kickUser = $map['KickUser'];
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
