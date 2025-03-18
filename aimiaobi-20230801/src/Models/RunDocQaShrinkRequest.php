<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocQaShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @var string
     */
    public $conversationContextsShrink;

    /**
     * @var string
     */
    public $docIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $referenceContent;

    /**
     * @description This parameter is required.
     *
     * @example fromWeb
     *
     * @var string
     */
    public $searchSource;

    /**
     * @description This parameter is required.
     *
     * @example f486c4e2-b773-4d65-88f8-2ba540610456
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-dswd4003ny4gh9rw
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryIdsShrink' => 'CategoryIds',
        'conversationContextsShrink' => 'ConversationContexts',
        'docIdsShrink' => 'DocIds',
        'query' => 'Query',
        'referenceContent' => 'ReferenceContent',
        'searchSource' => 'SearchSource',
        'sessionId' => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIdsShrink) {
            $res['CategoryIds'] = $this->categoryIdsShrink;
        }
        if (null !== $this->conversationContextsShrink) {
            $res['ConversationContexts'] = $this->conversationContextsShrink;
        }
        if (null !== $this->docIdsShrink) {
            $res['DocIds'] = $this->docIdsShrink;
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

    /**
     * @param array $map
     *
     * @return RunDocQaShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryIds'])) {
            $model->categoryIdsShrink = $map['CategoryIds'];
        }
        if (isset($map['ConversationContexts'])) {
            $model->conversationContextsShrink = $map['ConversationContexts'];
        }
        if (isset($map['DocIds'])) {
            $model->docIdsShrink = $map['DocIds'];
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
