<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody\result\roomUserVOList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 房间的历史观看成员总数。
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 返回的观众列表。
     *
     * @var roomUserVOList[]
     */
    public $roomUserVOList;

    /**
     * @description 是否还有下一页查询的数据。
     *
     * @var bool
     */
    public $hasMore;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'roomUserVOList' => 'RoomUserVOList',
        'hasMore'        => 'HasMore',
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
        if (null !== $this->roomUserVOList) {
            $res['RoomUserVOList'] = [];
            if (null !== $this->roomUserVOList && \is_array($this->roomUserVOList)) {
                $n = 0;
                foreach ($this->roomUserVOList as $item) {
                    $res['RoomUserVOList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RoomUserVOList'])) {
            if (!empty($map['RoomUserVOList'])) {
                $model->roomUserVOList = [];
                $n                     = 0;
                foreach ($map['RoomUserVOList'] as $item) {
                    $model->roomUserVOList[$n++] = null !== $item ? roomUserVOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        return $model;
    }
}
