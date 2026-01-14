<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseChunksResponseBody\knowledgeBaseChunks;

class ListKnowledgeBaseChunksResponseBody extends Model
{
    /**
     * @var knowledgeBaseChunks[]
     */
    public $knowledgeBaseChunks;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'knowledgeBaseChunks' => 'KnowledgeBaseChunks',
        'maxResults' => 'MaxResults',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseChunks)) {
            Model::validateArray($this->knowledgeBaseChunks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseChunks) {
            if (\is_array($this->knowledgeBaseChunks)) {
                $res['KnowledgeBaseChunks'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseChunks as $item1) {
                    $res['KnowledgeBaseChunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['KnowledgeBaseChunks'])) {
            if (!empty($map['KnowledgeBaseChunks'])) {
                $model->knowledgeBaseChunks = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseChunks'] as $item1) {
                    $model->knowledgeBaseChunks[$n1] = knowledgeBaseChunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
