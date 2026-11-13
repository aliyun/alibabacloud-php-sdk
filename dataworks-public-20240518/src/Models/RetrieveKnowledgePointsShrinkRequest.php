<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RetrieveKnowledgePointsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $focusObjectsShrink;

    /**
     * @var string
     */
    public $knowledgeBaseIdsShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'focusObjectsShrink' => 'FocusObjects',
        'knowledgeBaseIdsShrink' => 'KnowledgeBaseIds',
        'maxResults' => 'MaxResults',
        'query' => 'Query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->focusObjectsShrink) {
            $res['FocusObjects'] = $this->focusObjectsShrink;
        }

        if (null !== $this->knowledgeBaseIdsShrink) {
            $res['KnowledgeBaseIds'] = $this->knowledgeBaseIdsShrink;
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
            $model->focusObjectsShrink = $map['FocusObjects'];
        }

        if (isset($map['KnowledgeBaseIds'])) {
            $model->knowledgeBaseIdsShrink = $map['KnowledgeBaseIds'];
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
