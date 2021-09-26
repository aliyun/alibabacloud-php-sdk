<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponseBody\result\liveList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播总数。
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 直播总页数。
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 是否还有下一页。
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 直播列表信息。
     *
     * @var liveList[]
     */
    public $liveList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageTotal'  => 'PageTotal',
        'hasMore'    => 'HasMore',
        'liveList'   => 'LiveList',
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
        if (null !== $this->liveList) {
            $res['LiveList'] = [];
            if (null !== $this->liveList && \is_array($this->liveList)) {
                $n = 0;
                foreach ($this->liveList as $item) {
                    $res['LiveList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LiveList'])) {
            if (!empty($map['LiveList'])) {
                $model->liveList = [];
                $n               = 0;
                foreach ($map['LiveList'] as $item) {
                    $model->liveList[$n++] = null !== $item ? liveList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
