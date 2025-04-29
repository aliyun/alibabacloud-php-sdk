<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roomIdsShrink) {
            $res['room_ids'] = $this->roomIdsShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['room_ids'])) {
            $model->roomIdsShrink = $map['room_ids'];
        }

        return $model;
    }
}
