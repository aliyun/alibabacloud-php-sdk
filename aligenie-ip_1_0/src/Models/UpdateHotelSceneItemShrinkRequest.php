<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotelSceneItemShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $updateHotelSceneOperateReqShrink;

    /**
     * @var string
     */
    public $updateHotelSceneReqShrink;
    protected $_name = [
        'hotelId' => 'HotelId',
        'updateHotelSceneOperateReqShrink' => 'UpdateHotelSceneOperateReq',
        'updateHotelSceneReqShrink' => 'UpdateHotelSceneReq',
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

        if (null !== $this->updateHotelSceneOperateReqShrink) {
            $res['UpdateHotelSceneOperateReq'] = $this->updateHotelSceneOperateReqShrink;
        }

        if (null !== $this->updateHotelSceneReqShrink) {
            $res['UpdateHotelSceneReq'] = $this->updateHotelSceneReqShrink;
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

        if (isset($map['UpdateHotelSceneOperateReq'])) {
            $model->updateHotelSceneOperateReqShrink = $map['UpdateHotelSceneOperateReq'];
        }

        if (isset($map['UpdateHotelSceneReq'])) {
            $model->updateHotelSceneReqShrink = $map['UpdateHotelSceneReq'];
        }

        return $model;
    }
}
