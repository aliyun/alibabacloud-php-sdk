<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneOperateReq;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq;

class UpdateHotelSceneItemRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var updateHotelSceneOperateReq
     */
    public $updateHotelSceneOperateReq;

    /**
     * @var updateHotelSceneReq
     */
    public $updateHotelSceneReq;
    protected $_name = [
        'hotelId' => 'HotelId',
        'updateHotelSceneOperateReq' => 'UpdateHotelSceneOperateReq',
        'updateHotelSceneReq' => 'UpdateHotelSceneReq',
    ];

    public function validate()
    {
        if (null !== $this->updateHotelSceneOperateReq) {
            $this->updateHotelSceneOperateReq->validate();
        }
        if (null !== $this->updateHotelSceneReq) {
            $this->updateHotelSceneReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->updateHotelSceneOperateReq) {
            $res['UpdateHotelSceneOperateReq'] = null !== $this->updateHotelSceneOperateReq ? $this->updateHotelSceneOperateReq->toArray($noStream) : $this->updateHotelSceneOperateReq;
        }

        if (null !== $this->updateHotelSceneReq) {
            $res['UpdateHotelSceneReq'] = null !== $this->updateHotelSceneReq ? $this->updateHotelSceneReq->toArray($noStream) : $this->updateHotelSceneReq;
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
            $model->updateHotelSceneOperateReq = updateHotelSceneOperateReq::fromMap($map['UpdateHotelSceneOperateReq']);
        }

        if (isset($map['UpdateHotelSceneReq'])) {
            $model->updateHotelSceneReq = updateHotelSceneReq::fromMap($map['UpdateHotelSceneReq']);
        }

        return $model;
    }
}
