<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponseBody\result\commentVOList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commentVOList[]
     */
    public $commentVOList;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $pageTotal;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commentVOList' => 'CommentVOList',
        'hasMore'       => 'HasMore',
        'pageTotal'     => 'PageTotal',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentVOList) {
            $res['CommentVOList'] = [];
            if (null !== $this->commentVOList && \is_array($this->commentVOList)) {
                $n = 0;
                foreach ($this->commentVOList as $item) {
                    $res['CommentVOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
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
        if (isset($map['CommentVOList'])) {
            if (!empty($map['CommentVOList'])) {
                $model->commentVOList = [];
                $n                    = 0;
                foreach ($map['CommentVOList'] as $item) {
                    $model->commentVOList[$n++] = null !== $item ? commentVOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
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
