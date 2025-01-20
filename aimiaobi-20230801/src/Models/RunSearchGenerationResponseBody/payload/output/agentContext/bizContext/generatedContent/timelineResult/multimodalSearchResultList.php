<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\multimodalSearchResultList\searchResult;

class multimodalSearchResultList extends Model
{
    /**
     * @var searchResult[]
     */
    public $searchResult;
    /**
     * @var string
     */
    public $timelineDateStr;
    protected $_name = [
        'searchResult'    => 'SearchResult',
        'timelineDateStr' => 'TimelineDateStr',
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
        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['SearchResult'] = [];
                $n1                  = 0;
                foreach ($this->searchResult as $item1) {
                    $res['SearchResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timelineDateStr) {
            $res['TimelineDateStr'] = $this->timelineDateStr;
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
        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n1                  = 0;
                foreach ($map['SearchResult'] as $item1) {
                    $model->searchResult[$n1++] = searchResult::fromMap($item1);
                }
            }
        }

        if (isset($map['TimelineDateStr'])) {
            $model->timelineDateStr = $map['TimelineDateStr'];
        }

        return $model;
    }
}
