<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelRoomInfoRequest extends Model
{
    /**
     * @var int[]
     */
    public $roomIds;
    protected $_name = [
        'roomIds' => 'room_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomIds) {
            $res['room_ids'] = $this->roomIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelRoomInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['room_ids'])) {
            if (!empty($map['room_ids'])) {
                $model->roomIds = $map['room_ids'];
            }
        }

        return $model;
    }
}
