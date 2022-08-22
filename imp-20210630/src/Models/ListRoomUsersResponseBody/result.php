<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomUsersResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomUsersResponseBody\result\roomUserList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $pageTotal;

    /**
     * @var roomUserList[]
     */
    public $roomUserList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore'      => 'HasMore',
        'pageTotal'    => 'PageTotal',
        'roomUserList' => 'RoomUserList',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->roomUserList) {
            $res['RoomUserList'] = [];
            if (null !== $this->roomUserList && \is_array($this->roomUserList)) {
                $n = 0;
                foreach ($this->roomUserList as $item) {
                    $res['RoomUserList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['RoomUserList'])) {
            if (!empty($map['RoomUserList'])) {
                $model->roomUserList = [];
                $n                   = 0;
                foreach ($map['RoomUserList'] as $item) {
                    $model->roomUserList[$n++] = null !== $item ? roomUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
