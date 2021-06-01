<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListResponseBody;

use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListResponseBody\result\roomInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 租户下的房间列表总数
     *
     * @var int
     */
    public $total;

    /**
     * @description 是否还有下一页房间列表
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 租户下的房间列表基础信息
     *
     * @var roomInfoList[]
     */
    public $roomInfoList;
    protected $_name = [
        'total'        => 'Total',
        'hasMore'      => 'HasMore',
        'roomInfoList' => 'RoomInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->roomInfoList) {
            $res['RoomInfoList'] = [];
            if (null !== $this->roomInfoList && \is_array($this->roomInfoList)) {
                $n = 0;
                foreach ($this->roomInfoList as $item) {
                    $res['RoomInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['RoomInfoList'])) {
            if (!empty($map['RoomInfoList'])) {
                $model->roomInfoList = [];
                $n                   = 0;
                foreach ($map['RoomInfoList'] as $item) {
                    $model->roomInfoList[$n++] = null !== $item ? roomInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
