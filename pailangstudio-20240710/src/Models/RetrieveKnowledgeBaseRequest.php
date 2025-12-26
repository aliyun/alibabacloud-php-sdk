<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class RetrieveKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $hybridStrategyConfig;

    /**
     * @var string
     */
    public $metaDataFilterConditions;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var string
     */
    public $rerankConfig;

    /**
     * @var string
     */
    public $rewriteConfig;

    /**
     * @var float
     */
    public $scoreThreshold;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hybridStrategyConfig' => 'HybridStrategyConfig',
        'metaDataFilterConditions' => 'MetaDataFilterConditions',
        'query' => 'Query',
        'queryMode' => 'QueryMode',
        'rerankConfig' => 'RerankConfig',
        'rewriteConfig' => 'RewriteConfig',
        'scoreThreshold' => 'ScoreThreshold',
        'topK' => 'TopK',
        'versionName' => 'VersionName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hybridStrategyConfig) {
            $res['HybridStrategyConfig'] = $this->hybridStrategyConfig;
        }

        if (null !== $this->metaDataFilterConditions) {
            $res['MetaDataFilterConditions'] = $this->metaDataFilterConditions;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }

        if (null !== $this->rerankConfig) {
            $res['RerankConfig'] = $this->rerankConfig;
        }

        if (null !== $this->rewriteConfig) {
            $res['RewriteConfig'] = $this->rewriteConfig;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['HybridStrategyConfig'])) {
            $model->hybridStrategyConfig = $map['HybridStrategyConfig'];
        }

        if (isset($map['MetaDataFilterConditions'])) {
            $model->metaDataFilterConditions = $map['MetaDataFilterConditions'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }

        if (isset($map['RerankConfig'])) {
            $model->rerankConfig = $map['RerankConfig'];
        }

        if (isset($map['RewriteConfig'])) {
            $model->rewriteConfig = $map['RewriteConfig'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
