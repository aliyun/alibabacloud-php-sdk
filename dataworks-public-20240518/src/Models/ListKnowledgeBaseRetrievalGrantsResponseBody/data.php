<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseRetrievalGrantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseRetrievalGrantsResponseBody\data\knowledgeBaseRetrievalGrants;

class data extends Model
{
    /**
     * @var knowledgeBaseRetrievalGrants[]
     */
    public $knowledgeBaseRetrievalGrants;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'knowledgeBaseRetrievalGrants' => 'KnowledgeBaseRetrievalGrants',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseRetrievalGrants)) {
            Model::validateArray($this->knowledgeBaseRetrievalGrants);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseRetrievalGrants) {
            if (\is_array($this->knowledgeBaseRetrievalGrants)) {
                $res['KnowledgeBaseRetrievalGrants'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseRetrievalGrants as $item1) {
                    $res['KnowledgeBaseRetrievalGrants'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['KnowledgeBaseRetrievalGrants'])) {
            if (!empty($map['KnowledgeBaseRetrievalGrants'])) {
                $model->knowledgeBaseRetrievalGrants = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseRetrievalGrants'] as $item1) {
                    $model->knowledgeBaseRetrievalGrants[$n1] = knowledgeBaseRetrievalGrants::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
