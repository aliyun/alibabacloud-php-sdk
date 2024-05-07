<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class JoinRoomRequest extends Model
{
    /**
     * @example 4a29b426-742f-4078-8386-79b440b***
     *
     * @var string
     */
    public $appId;

    /**
     * @example 66194***681868
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 006f4***b269
     *
     * @var string
     */
    public $roomToken;

    /**
     * @example 12312***2412
     *
     * @var string
     */
    public $streamId;
    protected $_name = [
        'appId'     => 'AppId',
        'roomId'    => 'RoomId',
        'roomToken' => 'RoomToken',
        'streamId'  => 'StreamId',
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomToken) {
            $res['RoomToken'] = $this->roomToken;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RoomToken'])) {
            $model->roomToken = $map['RoomToken'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
