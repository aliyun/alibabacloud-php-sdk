<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponseBody\data\categoryList;

class data extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'hasNext' => 'HasNext',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->categoryList)) {
            Model::validateArray($this->categoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryList) {
            if (\is_array($this->categoryList)) {
                $res['CategoryList'] = [];
                $n1 = 0;
                foreach ($this->categoryList as $item1) {
                    $res['CategoryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n1 = 0;
                foreach ($map['CategoryList'] as $item1) {
                    $model->categoryList[$n1++] = categoryList::fromMap($item1);
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
