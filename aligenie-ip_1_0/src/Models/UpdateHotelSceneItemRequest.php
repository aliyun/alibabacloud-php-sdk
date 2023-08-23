<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneOperateReq;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq;
use AlibabaCloud\Tea\Model;

class UpdateHotelSceneItemRequest extends Model
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
     * @var updateHotelSceneOperateReq
     */
    public $updateHotelSceneOperateReq;

    /**
     * @description UpdateHotelSceneReq
     *
     * @var updateHotelSceneReq
     */
    public $updateHotelSceneReq;
    protected $_name = [
        'hotelId'                    => 'HotelId',
        'updateHotelSceneOperateReq' => 'UpdateHotelSceneOperateReq',
        'updateHotelSceneReq'        => 'UpdateHotelSceneReq',
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
        if (null !== $this->updateHotelSceneOperateReq) {
            $res['UpdateHotelSceneOperateReq'] = null !== $this->updateHotelSceneOperateReq ? $this->updateHotelSceneOperateReq->toMap() : null;
        }
        if (null !== $this->updateHotelSceneReq) {
            $res['UpdateHotelSceneReq'] = null !== $this->updateHotelSceneReq ? $this->updateHotelSceneReq->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelSceneItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['UpdateHotelSceneOperateReq'])) {
            $model->updateHotelSceneOperateReq = updateHotelSceneOperateReq::fromMap($map['UpdateHotelSceneOperateReq']);
        }
        if (isset($map['UpdateHotelSceneReq'])) {
            $model->updateHotelSceneReq = updateHotelSceneReq::fromMap($map['UpdateHotelSceneReq']);
        }

        return $model;
    }
}
