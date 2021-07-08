<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody\result\roomMessageList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 互动消息的总数。
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 房间的互动消息列表，按照发送时间戳由大到小排序。
     *
     * @var roomMessageList[]
     */
    public $roomMessageList;

    /**
     * @description 是否还有下一页查询的数据。
     *
     * @var bool
     */
    public $hasMore;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'roomMessageList' => 'RoomMessageList',
        'hasMore'         => 'HasMore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->roomMessageList) {
            $res['RoomMessageList'] = [];
            if (null !== $this->roomMessageList && \is_array($this->roomMessageList)) {
                $n = 0;
                foreach ($this->roomMessageList as $item) {
                    $res['RoomMessageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RoomMessageList'])) {
            if (!empty($map['RoomMessageList'])) {
                $model->roomMessageList = [];
                $n                      = 0;
                foreach ($map['RoomMessageList'] as $item) {
                    $model->roomMessageList[$n++] = null !== $item ? roomMessageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        return $model;
    }
}
