<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\multimodalSearchResultList\searchResult;

class multimodalSearchResultList extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $timelineDateStr;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'current' => 'Current',
        'searchQuery' => 'SearchQuery',
        'searchResult' => 'SearchResult',
        'searchType' => 'SearchType',
        'size' => 'Size',
        'timelineDateStr' => 'TimelineDateStr',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->searchResult)) {
            Model::validateArray($this->searchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }

        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['SearchResult'] = [];
                $n1 = 0;
                foreach ($this->searchResult as $item1) {
                    $res['SearchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->timelineDateStr) {
            $res['TimelineDateStr'] = $this->timelineDateStr;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }

        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n1 = 0;
                foreach ($map['SearchResult'] as $item1) {
                    $model->searchResult[$n1] = searchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TimelineDateStr'])) {
            $model->timelineDateStr = $map['TimelineDateStr'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
