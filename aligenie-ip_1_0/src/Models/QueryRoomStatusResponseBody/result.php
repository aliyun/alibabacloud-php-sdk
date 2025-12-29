<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomStatusResponseBody\result\sceneList;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomStatusResponseBody\result\statusList;

class result extends Model
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
     * @var sceneList[]
     */
    public $sceneList;

    /**
     * @var statusList[]
     */
    public $statusList;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomNo' => 'RoomNo',
        'sceneList' => 'SceneList',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (\is_array($this->sceneList)) {
            Model::validateArray($this->sceneList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
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

        if (null !== $this->sceneList) {
            if (\is_array($this->sceneList)) {
                $res['SceneList'] = [];
                $n1 = 0;
                foreach ($this->sceneList as $item1) {
                    $res['SceneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['SceneList'])) {
                $model->sceneList = [];
                $n1 = 0;
                foreach ($map['SceneList'] as $item1) {
                    $model->sceneList[$n1] = sceneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = statusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
