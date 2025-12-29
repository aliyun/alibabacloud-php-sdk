<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsRequest\listHotelSceneReq;

class ListHotelSceneItemsRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var listHotelSceneReq
     */
    public $listHotelSceneReq;
    protected $_name = [
        'hotelId' => 'HotelId',
        'listHotelSceneReq' => 'ListHotelSceneReq',
    ];

    public function validate()
    {
        if (null !== $this->listHotelSceneReq) {
            $this->listHotelSceneReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->listHotelSceneReq) {
            $res['ListHotelSceneReq'] = null !== $this->listHotelSceneReq ? $this->listHotelSceneReq->toArray($noStream) : $this->listHotelSceneReq;
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

        if (isset($map['ListHotelSceneReq'])) {
            $model->listHotelSceneReq = listHotelSceneReq::fromMap($map['ListHotelSceneReq']);
        }

        return $model;
    }
}
