<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult;

class data extends Model
{
    /**
     * @var string
     */
    public $caseLevel;

    /**
     * @var caseResult[]
     */
    public $caseResult;

    /**
     * @var int
     */
    public $currentPage;

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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'caseLevel' => 'caseLevel',
        'caseResult' => 'caseResult',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'query' => 'query',
        'queryKeywords' => 'queryKeywords',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->caseResult)) {
            Model::validateArray($this->caseResult);
        }
        if (\is_array($this->queryKeywords)) {
            Model::validateArray($this->queryKeywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caseLevel) {
            $res['caseLevel'] = $this->caseLevel;
        }

        if (null !== $this->caseResult) {
            if (\is_array($this->caseResult)) {
                $res['caseResult'] = [];
                $n1 = 0;
                foreach ($this->caseResult as $item1) {
                    $res['caseResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->queryKeywords)) {
                $res['queryKeywords'] = [];
                $n1 = 0;
                foreach ($this->queryKeywords as $item1) {
                    $res['queryKeywords'][$n1++] = $item1;
                }
            }
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
        if (isset($map['caseLevel'])) {
            $model->caseLevel = $map['caseLevel'];
        }

        if (isset($map['caseResult'])) {
            if (!empty($map['caseResult'])) {
                $model->caseResult = [];
                $n1 = 0;
                foreach ($map['caseResult'] as $item1) {
                    $model->caseResult[$n1++] = caseResult::fromMap($item1);
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
                $model->queryKeywords = [];
                $n1 = 0;
                foreach ($map['queryKeywords'] as $item1) {
                    $model->queryKeywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
