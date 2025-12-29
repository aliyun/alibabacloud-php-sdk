<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemRequest\updateHotelSceneBookReq;

class UpdateHotelSceneBookItemRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var updateHotelSceneBookReq
     */
    public $updateHotelSceneBookReq;
    protected $_name = [
        'hotelId' => 'HotelId',
        'updateHotelSceneBookReq' => 'UpdateHotelSceneBookReq',
    ];

    public function validate()
    {
        if (null !== $this->updateHotelSceneBookReq) {
            $this->updateHotelSceneBookReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->updateHotelSceneBookReq) {
            $res['UpdateHotelSceneBookReq'] = null !== $this->updateHotelSceneBookReq ? $this->updateHotelSceneBookReq->toArray($noStream) : $this->updateHotelSceneBookReq;
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['UpdateHotelSceneBookReq'])) {
            $model->updateHotelSceneBookReq = updateHotelSceneBookReq::fromMap($map['UpdateHotelSceneBookReq']);
        }

        return $model;
    }
}
