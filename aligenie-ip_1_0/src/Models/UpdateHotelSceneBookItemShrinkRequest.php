<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateHotelSceneBookItemShrinkRequest extends Model
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
     * @var string
     */
    public $updateHotelSceneBookReqShrink;
    protected $_name = [
        'hotelId'                       => 'HotelId',
        'updateHotelSceneBookReqShrink' => 'UpdateHotelSceneBookReq',
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
        if (null !== $this->updateHotelSceneBookReqShrink) {
            $res['UpdateHotelSceneBookReq'] = $this->updateHotelSceneBookReqShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelSceneBookItemShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['UpdateHotelSceneBookReq'])) {
            $model->updateHotelSceneBookReqShrink = $map['UpdateHotelSceneBookReq'];
        }

        return $model;
    }
}
