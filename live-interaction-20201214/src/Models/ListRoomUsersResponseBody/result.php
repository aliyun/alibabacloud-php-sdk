<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersResponseBody\result\roomUserVOList;
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
     * @var roomUserVOList[]
     */
    public $roomUserVOList;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore'        => 'HasMore',
        'roomUserVOList' => 'RoomUserVOList',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->roomUserVOList) {
            $res['RoomUserVOList'] = [];
            if (null !== $this->roomUserVOList && \is_array($this->roomUserVOList)) {
                $n = 0;
                foreach ($this->roomUserVOList as $item) {
                    $res['RoomUserVOList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RoomUserVOList'])) {
            if (!empty($map['RoomUserVOList'])) {
                $model->roomUserVOList = [];
                $n                     = 0;
                foreach ($map['RoomUserVOList'] as $item) {
                    $model->roomUserVOList[$n++] = null !== $item ? roomUserVOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
