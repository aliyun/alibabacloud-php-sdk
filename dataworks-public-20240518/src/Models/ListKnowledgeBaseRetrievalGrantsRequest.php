<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListKnowledgeBaseRetrievalGrantsRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
