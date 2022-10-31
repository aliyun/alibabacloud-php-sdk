<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponseBody\roomList;
use AlibabaCloud\Tea\Model;

class DescribeForbidPushStreamRoomListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roomList[]
     */
    public $roomList;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'requestId' => 'RequestId',
        'roomList'  => 'RoomList',
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roomList) {
            $res['RoomList'] = [];
            if (null !== $this->roomList && \is_array($this->roomList)) {
                $n = 0;
                foreach ($this->roomList as $item) {
                    $res['RoomList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeForbidPushStreamRoomListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoomList'])) {
            if (!empty($map['RoomList'])) {
                $model->roomList = [];
                $n               = 0;
                foreach ($map['RoomList'] as $item) {
                    $model->roomList[$n++] = null !== $item ? roomList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
