<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsRequest;

use AlibabaCloud\Tea\Model;

class meetingRoomsToRemove extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example U5Kxxxxx
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'roomId' => 'RoomId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meetingRoomsToRemove
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        return $model;
    }
}
