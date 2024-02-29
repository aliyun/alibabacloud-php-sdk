<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsRequest;

use AlibabaCloud\Tea\Model;

class hotelAdminRoom extends Model
{
    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'roomNo' => 'RoomNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelAdminRoom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
