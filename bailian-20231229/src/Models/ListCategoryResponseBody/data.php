<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponseBody\data\categoryList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAALHWGpGoYCcYMxiFfmlhvh7Z4G8jiXR6IjHYd+M9WQVJ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'hasNext'      => 'HasNext',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryList) {
            $res['CategoryList'] = [];
            if (null !== $this->categoryList && \is_array($this->categoryList)) {
                $n = 0;
                foreach ($this->categoryList as $item) {
                    $res['CategoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n                   = 0;
                foreach ($map['CategoryList'] as $item) {
                    $model->categoryList[$n++] = null !== $item ? categoryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
