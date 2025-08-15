<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunDocTranslationRequest extends Model
{
    /**
     * @var bool
     */
    public $cleanCache;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $recommendContent;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $transType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cleanCache' => 'CleanCache',
        'docId' => 'DocId',
        'modelName' => 'ModelName',
        'recommendContent' => 'RecommendContent',
        'sessionId' => 'SessionId',
        'transType' => 'TransType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanCache) {
            $res['CleanCache'] = $this->cleanCache;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanCache'])) {
            $model->cleanCache = $map['CleanCache'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
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
