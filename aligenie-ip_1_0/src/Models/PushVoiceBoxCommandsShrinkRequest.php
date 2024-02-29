<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushVoiceBoxCommandsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commandsShrink;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'commandsShrink' => 'Commands',
        'hotelId'        => 'HotelId',
        'roomNo'         => 'RoomNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandsShrink) {
            $res['Commands'] = $this->commandsShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushVoiceBoxCommandsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            $model->commandsShrink = $map['Commands'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
