<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody\result\roomMessageList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example testRoomId
     *
     * @var roomMessageList[]
     */
    public $roomMessageList;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore'         => 'HasMore',
        'roomMessageList' => 'RoomMessageList',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
