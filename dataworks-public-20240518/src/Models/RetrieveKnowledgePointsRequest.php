<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsRequest\focusObjects;

class RetrieveKnowledgePointsRequest extends Model
{
    /**
     * @var focusObjects[]
     */
    public $focusObjects;

    /**
     * @var string[]
     */
    public $knowledgeBaseIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'focusObjects' => 'FocusObjects',
        'knowledgeBaseIds' => 'KnowledgeBaseIds',
        'maxResults' => 'MaxResults',
        'query' => 'Query',
    ];

    public function validate()
    {
        if (\is_array($this->focusObjects)) {
            Model::validateArray($this->focusObjects);
        }
        if (\is_array($this->knowledgeBaseIds)) {
            Model::validateArray($this->knowledgeBaseIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->focusObjects) {
            if (\is_array($this->focusObjects)) {
                $res['FocusObjects'] = [];
                $n1 = 0;
                foreach ($this->focusObjects as $item1) {
                    $res['FocusObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeBaseIds) {
            if (\is_array($this->knowledgeBaseIds)) {
                $res['KnowledgeBaseIds'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseIds as $item1) {
                    $res['KnowledgeBaseIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
        if (isset($map['FocusObjects'])) {
            if (!empty($map['FocusObjects'])) {
                $model->focusObjects = [];
                $n1 = 0;
                foreach ($map['FocusObjects'] as $item1) {
                    $model->focusObjects[$n1] = focusObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeBaseIds'])) {
            if (!empty($map['KnowledgeBaseIds'])) {
                $model->knowledgeBaseIds = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseIds'] as $item1) {
                    $model->knowledgeBaseIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
