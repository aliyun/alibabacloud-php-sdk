<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemRequest\updateHotelSceneBookReq;
use AlibabaCloud\Tea\Model;

class UpdateHotelSceneBookItemRequest extends Model
{
    /**
     * @description hotelID
     *
     * @example 80d84ea8ed9e422fbad52715c8fc56f1
     *
     * @var string
     */
    public $hotelId;

    /**
     * @description updateHotelSceneBookReq
     *
     * @var updateHotelSceneBookReq
     */
    public $updateHotelSceneBookReq;
    protected $_name = [
        'hotelId'                 => 'HotelId',
        'updateHotelSceneBookReq' => 'UpdateHotelSceneBookReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->updateHotelSceneBookReq) {
            $res['UpdateHotelSceneBookReq'] = null !== $this->updateHotelSceneBookReq ? $this->updateHotelSceneBookReq->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelSceneBookItemRequest
     */
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
