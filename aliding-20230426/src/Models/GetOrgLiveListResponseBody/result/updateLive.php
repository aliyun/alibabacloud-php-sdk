<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\updateLive\liveList;

class updateLive extends Model
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
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
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

    public function validate()
    {
        if (\is_array($this->liveList)) {
            Model::validateArray($this->liveList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->liveList) {
            if (\is_array($this->liveList)) {
                $res['LiveList'] = [];
                $n1 = 0;
                foreach ($this->liveList as $item1) {
                    $res['LiveList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['LiveList'])) {
            if (!empty($map['LiveList'])) {
                $model->liveList = [];
                $n1 = 0;
                foreach ($map['LiveList'] as $item1) {
                    $model->liveList[$n1] = liveList::fromMap($item1);
                    ++$n1;
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
