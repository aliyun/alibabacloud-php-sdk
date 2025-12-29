<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class InsertHotelSceneBookItemShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addHotelSceneItemReqShrink;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'addHotelSceneItemReqShrink' => 'AddHotelSceneItemReq',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addHotelSceneItemReqShrink) {
            $res['AddHotelSceneItemReq'] = $this->addHotelSceneItemReqShrink;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
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
        if (isset($map['AddHotelSceneItemReq'])) {
            $model->addHotelSceneItemReqShrink = $map['AddHotelSceneItemReq'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
