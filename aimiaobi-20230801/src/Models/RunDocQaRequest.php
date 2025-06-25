<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaRequest\conversationContexts;

class RunDocQaRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @var conversationContexts[]
     */
    public $conversationContexts;

    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $referenceContent;

    /**
     * @var string
     */
    public $searchSource;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'conversationContexts' => 'ConversationContexts',
        'docIds' => 'DocIds',
        'modelName' => 'ModelName',
        'query' => 'Query',
        'referenceContent' => 'ReferenceContent',
        'searchSource' => 'SearchSource',
        'sessionId' => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        if (\is_array($this->conversationContexts)) {
            Model::validateArray($this->conversationContexts);
        }
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIds) {
            if (\is_array($this->categoryIds)) {
                $res['CategoryIds'] = [];
                $n1 = 0;
                foreach ($this->categoryIds as $item1) {
                    $res['CategoryIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conversationContexts) {
            if (\is_array($this->conversationContexts)) {
                $res['ConversationContexts'] = [];
                $n1 = 0;
                foreach ($this->conversationContexts as $item1) {
                    $res['ConversationContexts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['DocIds'] = [];
                $n1 = 0;
                foreach ($this->docIds as $item1) {
                    $res['DocIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->referenceContent) {
            $res['ReferenceContent'] = $this->referenceContent;
        }

        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = [];
                $n1 = 0;
                foreach ($map['CategoryIds'] as $item1) {
                    $model->categoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ConversationContexts'])) {
            if (!empty($map['ConversationContexts'])) {
                $model->conversationContexts = [];
                $n1 = 0;
                foreach ($map['ConversationContexts'] as $item1) {
                    $model->conversationContexts[$n1] = conversationContexts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = [];
                $n1 = 0;
                foreach ($map['DocIds'] as $item1) {
                    $model->docIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ReferenceContent'])) {
            $model->referenceContent = $map['ReferenceContent'];
        }

        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
