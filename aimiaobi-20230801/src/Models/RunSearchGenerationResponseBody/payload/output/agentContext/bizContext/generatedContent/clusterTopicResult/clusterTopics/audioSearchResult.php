<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\audioSearchResult\searchResult;

class audioSearchResult extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var searchResult
     */
    public $searchResult;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'current' => 'Current',
        'searchResult' => 'SearchResult',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->searchResult) {
            $this->searchResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->searchResult) {
            $res['SearchResult'] = null !== $this->searchResult ? $this->searchResult->toArray($noStream) : $this->searchResult;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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

        if (isset($map['SearchResult'])) {
            $model->searchResult = searchResult::fromMap($map['SearchResult']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
