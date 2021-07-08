<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponseBody\result\roomInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 该应用的房间总数。
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 该应用的房间总页数。
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 是否还有下一页房间列表。
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 房间列表信息。
     *
     * @var roomInfoList[]
     */
    public $roomInfoList;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'pageTotal'    => 'PageTotal',
        'hasMore'      => 'HasMore',
        'roomInfoList' => 'RoomInfoList',
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
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
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
