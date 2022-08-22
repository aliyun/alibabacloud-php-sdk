<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponseBody\result\liveList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var liveList[]
     */
    public $liveList;

    /**
     * @var int
     */
    public $pageTotal;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore'    => 'HasMore',
        'liveList'   => 'LiveList',
        'pageTotal'  => 'PageTotal',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->liveList) {
            $res['LiveList'] = [];
            if (null !== $this->liveList && \is_array($this->liveList)) {
                $n = 0;
                foreach ($this->liveList as $item) {
                    $res['LiveList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
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
        if (isset($map['LiveList'])) {
            if (!empty($map['LiveList'])) {
                $model->liveList = [];
                $n               = 0;
                foreach ($map['LiveList'] as $item) {
                    $model->liveList[$n++] = null !== $item ? liveList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
