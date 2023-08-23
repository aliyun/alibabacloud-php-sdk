<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ImportRoomGenieScenesShrinkRequest extends Model
{
    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @var string
     */
    public $sceneListShrink;
    protected $_name = [
        'hotelId'         => 'HotelId',
        'roomNo'          => 'RoomNo',
        'sceneListShrink' => 'SceneList',
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
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->sceneListShrink) {
            $res['SceneList'] = $this->sceneListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportRoomGenieScenesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['SceneList'])) {
            $model->sceneListShrink = $map['SceneList'];
        }

        return $model;
    }
}
