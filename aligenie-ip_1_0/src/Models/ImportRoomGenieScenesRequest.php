<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList;
use AlibabaCloud\Tea\Model;

class ImportRoomGenieScenesRequest extends Model
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
     * @var sceneList[]
     */
    public $sceneList;
    protected $_name = [
        'hotelId'   => 'HotelId',
        'roomNo'    => 'RoomNo',
        'sceneList' => 'SceneList',
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
        if (null !== $this->sceneList) {
            $res['SceneList'] = [];
            if (null !== $this->sceneList && \is_array($this->sceneList)) {
                $n = 0;
                foreach ($this->sceneList as $item) {
                    $res['SceneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportRoomGenieScenesRequest
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
            if (!empty($map['SceneList'])) {
                $model->sceneList = [];
                $n                = 0;
                foreach ($map['SceneList'] as $item) {
                    $model->sceneList[$n++] = null !== $item ? sceneList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
