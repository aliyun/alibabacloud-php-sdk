<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class InsertHotelSceneBookItemShrinkRequest extends Model
{
    /**
     * @description addHotelSceneItemReq
     *
     * @var string
     */
    public $addHotelSceneItemReqShrink;

    /**
     * @description hotelID
     *
     * @example 80d84ea8ed9e422fbad52715c8fc56f1
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'addHotelSceneItemReqShrink' => 'AddHotelSceneItemReq',
        'hotelId'                    => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addHotelSceneItemReqShrink) {
            $res['AddHotelSceneItemReq'] = $this->addHotelSceneItemReqShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertHotelSceneBookItemShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddHotelSceneItemReq'])) {
            $model->addHotelSceneItemReqShrink = $map['AddHotelSceneItemReq'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
