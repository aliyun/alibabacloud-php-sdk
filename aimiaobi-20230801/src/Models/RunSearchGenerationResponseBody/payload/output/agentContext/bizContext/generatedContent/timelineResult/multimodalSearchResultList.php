<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\multimodalSearchResultList\searchResult;
use AlibabaCloud\Tea\Model;

class multimodalSearchResultList extends Model
{
    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @example 2024-09-11
     *
     * @var string
     */
    public $timelineDateStr;
    protected $_name = [
        'searchResult' => 'SearchResult',
        'timelineDateStr' => 'TimelineDateStr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchResult) {
            $res['SearchResult'] = [];
            if (null !== $this->searchResult && \is_array($this->searchResult)) {
                $n = 0;
                foreach ($this->searchResult as $item) {
                    $res['SearchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timelineDateStr) {
            $res['TimelineDateStr'] = $this->timelineDateStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multimodalSearchResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n = 0;
                foreach ($map['SearchResult'] as $item) {
                    $model->searchResult[$n++] = null !== $item ? searchResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimelineDateStr'])) {
            $model->timelineDateStr = $map['TimelineDateStr'];
        }

        return $model;
    }
}
