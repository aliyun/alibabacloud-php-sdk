<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsRequest\listHotelSceneReq;
use AlibabaCloud\Tea\Model;

class ListHotelSceneItemsRequest extends Model
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
     * @description ListHotelSceneReq
     *
     * @var listHotelSceneReq
     */
    public $listHotelSceneReq;
    protected $_name = [
        'hotelId'           => 'HotelId',
        'listHotelSceneReq' => 'ListHotelSceneReq',
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
        if (null !== $this->listHotelSceneReq) {
            $res['ListHotelSceneReq'] = null !== $this->listHotelSceneReq ? $this->listHotelSceneReq->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelSceneItemsRequest
     */
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
