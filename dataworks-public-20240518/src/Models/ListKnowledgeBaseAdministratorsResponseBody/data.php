<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseAdministratorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeBaseAdministratorsResponseBody\data\knowledgeBaseAdministrators;

class data extends Model
{
    /**
     * @var knowledgeBaseAdministrators[]
     */
    public $knowledgeBaseAdministrators;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'knowledgeBaseAdministrators' => 'KnowledgeBaseAdministrators',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseAdministrators)) {
            Model::validateArray($this->knowledgeBaseAdministrators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseAdministrators) {
            if (\is_array($this->knowledgeBaseAdministrators)) {
                $res['KnowledgeBaseAdministrators'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseAdministrators as $item1) {
                    $res['KnowledgeBaseAdministrators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KnowledgeBaseAdministrators'])) {
            if (!empty($map['KnowledgeBaseAdministrators'])) {
                $model->knowledgeBaseAdministrators = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseAdministrators'] as $item1) {
                    $model->knowledgeBaseAdministrators[$n1] = knowledgeBaseAdministrators::fromMap($item1);
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
