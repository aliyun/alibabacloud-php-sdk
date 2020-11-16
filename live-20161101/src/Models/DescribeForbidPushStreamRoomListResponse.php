<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponse\roomList;
use AlibabaCloud\Tea\Model;

class DescribeForbidPushStreamRoomListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var roomList[]
     */
    public $roomList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
        'roomList'  => 'RoomList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('totalPage', $this->totalPage, true);
        Model::validateRequired('roomList', $this->roomList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeForbidPushStreamRoomListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
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

        return $model;
    }
}
