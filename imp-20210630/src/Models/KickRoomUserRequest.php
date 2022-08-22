<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class KickRoomUserRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $blockTime;

    /**
     * @var string
     */
    public $kickUser;

    /**
     * @var string
     */
    public $roomId;

    /**
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
