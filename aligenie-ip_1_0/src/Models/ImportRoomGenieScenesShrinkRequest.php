<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ImportRoomGenieScenesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var string
     */
    public $sceneListShrink;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomNo' => 'RoomNo',
        'sceneListShrink' => 'SceneList',
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

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->sceneListShrink) {
            $res['SceneList'] = $this->sceneListShrink;
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

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['SceneList'])) {
            $model->sceneListShrink = $map['SceneList'];
        }

        return $model;
    }
}
