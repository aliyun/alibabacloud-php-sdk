<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocTranslationRequest extends Model
{
    /**
     * @var bool
     */
    public $cleanCache;

    /**
     * @example 12345
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $recommendContent;

    /**
     * @description This parameter is required.
     *
     * @example 2e6b3987-f743-4d4c-8326-d9c41a6af3ee
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example toChinese
     * toEnglish
     *
     * @var string
     */
    public $transType;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cleanCache' => 'CleanCache',
        'docId' => 'DocId',
        'recommendContent' => 'RecommendContent',
        'sessionId' => 'SessionId',
        'transType' => 'TransType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanCache) {
            $res['CleanCache'] = $this->cleanCache;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->recommendContent) {
            $res['RecommendContent'] = $this->recommendContent;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->transType) {
            $res['TransType'] = $this->transType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDocTranslationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanCache'])) {
            $model->cleanCache = $map['CleanCache'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['RecommendContent'])) {
            $model->recommendContent = $map['RecommendContent'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TransType'])) {
            $model->transType = $map['TransType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
