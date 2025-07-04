<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\lawResult;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\sortKeyAndDirection;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var lawResult[]
     */
    public $lawResult;

    /**
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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'currentPage',
        'lawResult' => 'lawResult',
        'pageSize' => 'pageSize',
        'query' => 'query',
        'queryKeywords' => 'queryKeywords',
        'sortKeyAndDirection' => 'sortKeyAndDirection',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lawResult)) {
            Model::validateArray($this->lawResult);
        }
        if (\is_array($this->queryKeywords)) {
            Model::validateArray($this->queryKeywords);
        }
        if (null !== $this->sortKeyAndDirection) {
            $this->sortKeyAndDirection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->lawResult) {
            if (\is_array($this->lawResult)) {
                $res['lawResult'] = [];
                $n1 = 0;
                foreach ($this->lawResult as $item1) {
                    $res['lawResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->queryKeywords)) {
                $res['queryKeywords'] = [];
                $n1 = 0;
                foreach ($this->queryKeywords as $item1) {
                    $res['queryKeywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortKeyAndDirection) {
            $res['sortKeyAndDirection'] = null !== $this->sortKeyAndDirection ? $this->sortKeyAndDirection->toArray($noStream) : $this->sortKeyAndDirection;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['lawResult'])) {
            if (!empty($map['lawResult'])) {
                $model->lawResult = [];
                $n1 = 0;
                foreach ($map['lawResult'] as $item1) {
                    $model->lawResult[$n1] = lawResult::fromMap($item1);
                    ++$n1;
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
                $model->queryKeywords = [];
                $n1 = 0;
                foreach ($map['queryKeywords'] as $item1) {
                    $model->queryKeywords[$n1] = $item1;
                    ++$n1;
                }
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
