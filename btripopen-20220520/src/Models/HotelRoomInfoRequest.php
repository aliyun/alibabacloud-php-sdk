<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->roomIds)) {
            Model::validateArray($this->roomIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roomIds) {
            if (\is_array($this->roomIds)) {
                $res['room_ids'] = [];
                $n1 = 0;
                foreach ($this->roomIds as $item1) {
                    $res['room_ids'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['room_ids'])) {
                $model->roomIds = [];
                $n1 = 0;
                foreach ($map['room_ids'] as $item1) {
                    $model->roomIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
