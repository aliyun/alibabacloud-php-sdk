<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListHotelSceneItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $listHotelSceneReqShrink;
    protected $_name = [
        'hotelId' => 'HotelId',
        'listHotelSceneReqShrink' => 'ListHotelSceneReq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->listHotelSceneReqShrink) {
            $res['ListHotelSceneReq'] = $this->listHotelSceneReqShrink;
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
            $model->listHotelSceneReqShrink = $map['ListHotelSceneReq'];
        }

        return $model;
    }
}
