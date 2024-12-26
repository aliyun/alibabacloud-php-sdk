<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\lawResult;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\sortKeyAndDirection;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var lawResult[]
     */
    public $lawResult;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $queryKeywords;

    /**
     * @var sortKeyAndDirection
     */
    public $sortKeyAndDirection;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'         => 'currentPage',
        'lawResult'           => 'lawResult',
        'pageSize'            => 'pageSize',
        'query'               => 'query',
        'queryKeywords'       => 'queryKeywords',
        'sortKeyAndDirection' => 'sortKeyAndDirection',
        'totalCount'          => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->lawResult) {
            $res['lawResult'] = [];
            if (null !== $this->lawResult && \is_array($this->lawResult)) {
                $n = 0;
                foreach ($this->lawResult as $item) {
                    $res['lawResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->queryKeywords) {
            $res['queryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->sortKeyAndDirection) {
            $res['sortKeyAndDirection'] = null !== $this->sortKeyAndDirection ? $this->sortKeyAndDirection->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['lawResult'])) {
            if (!empty($map['lawResult'])) {
                $model->lawResult = [];
                $n                = 0;
                foreach ($map['lawResult'] as $item) {
                    $model->lawResult[$n++] = null !== $item ? lawResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['queryKeywords'])) {
            if (!empty($map['queryKeywords'])) {
                $model->queryKeywords = $map['queryKeywords'];
            }
        }
        if (isset($map['sortKeyAndDirection'])) {
            $model->sortKeyAndDirection = sortKeyAndDirection::fromMap($map['sortKeyAndDirection']);
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
