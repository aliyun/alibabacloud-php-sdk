<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListHotelSceneItemsShrinkRequest extends Model
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
     * @var string
     */
    public $listHotelSceneReqShrink;
    protected $_name = [
        'hotelId'                 => 'HotelId',
        'listHotelSceneReqShrink' => 'ListHotelSceneReq',
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
        if (null !== $this->listHotelSceneReqShrink) {
            $res['ListHotelSceneReq'] = $this->listHotelSceneReqShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelSceneItemsShrinkRequest
     */
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
