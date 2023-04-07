<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelRoomInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $roomIdsShrink;
    protected $_name = [
        'roomIdsShrink' => 'room_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomIdsShrink) {
            $res['room_ids'] = $this->roomIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelRoomInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['room_ids'])) {
            $model->roomIdsShrink = $map['room_ids'];
        }

        return $model;
    }
}
