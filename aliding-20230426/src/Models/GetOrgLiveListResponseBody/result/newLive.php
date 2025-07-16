<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\newLive\liveList;
use AlibabaCloud\Tea\Model;

class newLive extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example []
     *
     * @var liveList[]
     */
    public $liveList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore' => 'HasMore',
        'liveList' => 'LiveList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newLive
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
                $n = 0;
                foreach ($map['LiveList'] as $item) {
                    $model->liveList[$n++] = null !== $item ? liveList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
