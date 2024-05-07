<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinRoomResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 641981583353***
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 12312***412
     *
     * @var string
     */
    public $streamId;
    protected $_name = [
        'roomId'   => 'RoomId',
        'streamId' => 'StreamId',
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
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
