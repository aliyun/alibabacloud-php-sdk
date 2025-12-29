<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemRequest\addHotelSceneItemReq;

class InsertHotelSceneBookItemRequest extends Model
{
    /**
     * @var addHotelSceneItemReq
     */
    public $addHotelSceneItemReq;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'addHotelSceneItemReq' => 'AddHotelSceneItemReq',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        if (null !== $this->addHotelSceneItemReq) {
            $this->addHotelSceneItemReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addHotelSceneItemReq) {
            $res['AddHotelSceneItemReq'] = null !== $this->addHotelSceneItemReq ? $this->addHotelSceneItemReq->toArray($noStream) : $this->addHotelSceneItemReq;
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
            $model->addHotelSceneItemReq = addHotelSceneItemReq::fromMap($map['AddHotelSceneItemReq']);
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
