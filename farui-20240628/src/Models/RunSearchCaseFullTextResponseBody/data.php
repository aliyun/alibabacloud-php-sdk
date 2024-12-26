<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var caseResult[]
     */
    public $caseResult;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10
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
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'caseResult'    => 'caseResult',
        'currentPage'   => 'currentPage',
        'pageSize'      => 'pageSize',
        'query'         => 'query',
        'queryKeywords' => 'queryKeywords',
        'totalCount'    => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseResult) {
            $res['caseResult'] = [];
            if (null !== $this->caseResult && \is_array($this->caseResult)) {
                $n = 0;
                foreach ($this->caseResult as $item) {
                    $res['caseResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
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
        if (isset($map['caseResult'])) {
            if (!empty($map['caseResult'])) {
                $model->caseResult = [];
                $n                 = 0;
                foreach ($map['caseResult'] as $item) {
                    $model->caseResult[$n++] = null !== $item ? caseResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
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
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
