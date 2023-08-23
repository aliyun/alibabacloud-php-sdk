<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateHotelSceneItemShrinkRequest extends Model
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
     * @description updateHotelSceneReq
     *
     * @var string
     */
    public $updateHotelSceneOperateReqShrink;

    /**
     * @description UpdateHotelSceneReq
     *
     * @var string
     */
    public $updateHotelSceneReqShrink;
    protected $_name = [
        'hotelId'                          => 'HotelId',
        'updateHotelSceneOperateReqShrink' => 'UpdateHotelSceneOperateReq',
        'updateHotelSceneReqShrink'        => 'UpdateHotelSceneReq',
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
        if (null !== $this->updateHotelSceneOperateReqShrink) {
            $res['UpdateHotelSceneOperateReq'] = $this->updateHotelSceneOperateReqShrink;
        }
        if (null !== $this->updateHotelSceneReqShrink) {
            $res['UpdateHotelSceneReq'] = $this->updateHotelSceneReqShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelSceneItemShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['UpdateHotelSceneOperateReq'])) {
            $model->updateHotelSceneOperateReqShrink = $map['UpdateHotelSceneOperateReq'];
        }
        if (isset($map['UpdateHotelSceneReq'])) {
            $model->updateHotelSceneReqShrink = $map['UpdateHotelSceneReq'];
        }

        return $model;
    }
}
