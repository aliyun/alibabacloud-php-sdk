<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocSummaryRequest extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $recommendContent;

    /**
     * @description This parameter is required.
     *
     * @example 0f56f98a-f2d8-47ec-98e9-1cbdcffa9539
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId'            => 'DocId',
        'query'            => 'Query',
        'recommendContent' => 'RecommendContent',
        'sessionId'        => 'SessionId',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->recommendContent) {
            $res['RecommendContent'] = $this->recommendContent;
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
     * @return RunDocSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RecommendContent'])) {
            $model->recommendContent = $map['RecommendContent'];
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
