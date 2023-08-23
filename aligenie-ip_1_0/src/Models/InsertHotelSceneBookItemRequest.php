<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemRequest\addHotelSceneItemReq;
use AlibabaCloud\Tea\Model;

class InsertHotelSceneBookItemRequest extends Model
{
    /**
     * @description addHotelSceneItemReq
     *
     * @var addHotelSceneItemReq
     */
    public $addHotelSceneItemReq;

    /**
     * @description hotelID
     *
     * @example 80d84ea8ed9e422fbad52715c8fc56f1
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'addHotelSceneItemReq' => 'AddHotelSceneItemReq',
        'hotelId'              => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addHotelSceneItemReq) {
            $res['AddHotelSceneItemReq'] = null !== $this->addHotelSceneItemReq ? $this->addHotelSceneItemReq->toMap() : null;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertHotelSceneBookItemRequest
     */
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
