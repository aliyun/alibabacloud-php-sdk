<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponseBody\knowledgeBaseSearchResults;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponseBody\webSearchResults;

class SearchInfoResponseBody extends Model
{
    /**
     * @var knowledgeBaseSearchResults[]
     */
    public $knowledgeBaseSearchResults;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webSearchResults[]
     */
    public $webSearchResults;
    protected $_name = [
        'knowledgeBaseSearchResults' => 'KnowledgeBaseSearchResults',
        'requestId' => 'RequestId',
        'webSearchResults' => 'WebSearchResults',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseSearchResults)) {
            Model::validateArray($this->knowledgeBaseSearchResults);
        }
        if (\is_array($this->webSearchResults)) {
            Model::validateArray($this->webSearchResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseSearchResults) {
            if (\is_array($this->knowledgeBaseSearchResults)) {
                $res['KnowledgeBaseSearchResults'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseSearchResults as $item1) {
                    $res['KnowledgeBaseSearchResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webSearchResults) {
            if (\is_array($this->webSearchResults)) {
                $res['WebSearchResults'] = [];
                $n1 = 0;
                foreach ($this->webSearchResults as $item1) {
                    $res['WebSearchResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['KnowledgeBaseSearchResults'])) {
            if (!empty($map['KnowledgeBaseSearchResults'])) {
                $model->knowledgeBaseSearchResults = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseSearchResults'] as $item1) {
                    $model->knowledgeBaseSearchResults[$n1] = knowledgeBaseSearchResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WebSearchResults'])) {
            if (!empty($map['WebSearchResults'])) {
                $model->webSearchResults = [];
                $n1 = 0;
                foreach ($map['WebSearchResults'] as $item1) {
                    $model->webSearchResults[$n1] = webSearchResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
