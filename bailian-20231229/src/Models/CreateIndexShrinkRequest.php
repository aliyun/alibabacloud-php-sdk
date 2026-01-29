<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class CreateIndexShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $columnsShrink;

    /**
     * @var string
     */
    public $createIndexType;

    /**
     * @var string
     */
    public $dataSourceShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentIdsShrink;

    /**
     * @var string
     */
    public $embeddingModelName;

    /**
     * @var bool
     */
    public $enableRewrite;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $overlapSize;

    /**
     * @var float
     */
    public $rerankMinScore;

    /**
     * @var string
     */
    public $rerankModelName;

    /**
     * @var string
     */
    public $separator;

    /**
     * @var string
     */
    public $sinkInstanceId;

    /**
     * @var string
     */
    public $sinkRegion;

    /**
     * @var string
     */
    public $sinkType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $structureType;

    /**
     * @var string
     */
    public $tableIdsShrink;

    /**
     * @var string
     */
    public $chunkMode;

    /**
     * @var string
     */
    public $connectId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $datasourceCode;

    /**
     * @var bool
     */
    public $enableHeaders;

    /**
     * @var string
     */
    public $knowledgeScene;

    /**
     * @var string
     */
    public $metaExtractColumnsShrink;

    /**
     * @var int
     */
    public $pipelineCommercialCu;

    /**
     * @var string
     */
    public $pipelineCommercialType;

    /**
     * @var string
     */
    public $pipelineRetrieveRateLimitStrategy;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'categoryIdsShrink' => 'CategoryIds',
        'chunkSize' => 'ChunkSize',
        'columnsShrink' => 'Columns',
        'createIndexType' => 'CreateIndexType',
        'dataSourceShrink' => 'DataSource',
        'description' => 'Description',
        'documentIdsShrink' => 'DocumentIds',
        'embeddingModelName' => 'EmbeddingModelName',
        'enableRewrite' => 'EnableRewrite',
        'name' => 'Name',
        'overlapSize' => 'OverlapSize',
        'rerankMinScore' => 'RerankMinScore',
        'rerankModelName' => 'RerankModelName',
        'separator' => 'Separator',
        'sinkInstanceId' => 'SinkInstanceId',
        'sinkRegion' => 'SinkRegion',
        'sinkType' => 'SinkType',
        'sourceType' => 'SourceType',
        'structureType' => 'StructureType',
        'tableIdsShrink' => 'TableIds',
        'chunkMode' => 'chunkMode',
        'connectId' => 'connectId',
        'database' => 'database',
        'datasourceCode' => 'datasourceCode',
        'enableHeaders' => 'enableHeaders',
        'knowledgeScene' => 'knowledgeScene',
        'metaExtractColumnsShrink' => 'metaExtractColumns',
        'pipelineCommercialCu' => 'pipelineCommercialCu',
        'pipelineCommercialType' => 'pipelineCommercialType',
        'pipelineRetrieveRateLimitStrategy' => 'pipelineRetrieveRateLimitStrategy',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIdsShrink) {
            $res['CategoryIds'] = $this->categoryIdsShrink;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->columnsShrink) {
            $res['Columns'] = $this->columnsShrink;
        }

        if (null !== $this->createIndexType) {
            $res['CreateIndexType'] = $this->createIndexType;
        }

        if (null !== $this->dataSourceShrink) {
            $res['DataSource'] = $this->dataSourceShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->documentIdsShrink) {
            $res['DocumentIds'] = $this->documentIdsShrink;
        }

        if (null !== $this->embeddingModelName) {
            $res['EmbeddingModelName'] = $this->embeddingModelName;
        }

        if (null !== $this->enableRewrite) {
            $res['EnableRewrite'] = $this->enableRewrite;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overlapSize) {
            $res['OverlapSize'] = $this->overlapSize;
        }

        if (null !== $this->rerankMinScore) {
            $res['RerankMinScore'] = $this->rerankMinScore;
        }

        if (null !== $this->rerankModelName) {
            $res['RerankModelName'] = $this->rerankModelName;
        }

        if (null !== $this->separator) {
            $res['Separator'] = $this->separator;
        }

        if (null !== $this->sinkInstanceId) {
            $res['SinkInstanceId'] = $this->sinkInstanceId;
        }

        if (null !== $this->sinkRegion) {
            $res['SinkRegion'] = $this->sinkRegion;
        }

        if (null !== $this->sinkType) {
            $res['SinkType'] = $this->sinkType;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->structureType) {
            $res['StructureType'] = $this->structureType;
        }

        if (null !== $this->tableIdsShrink) {
            $res['TableIds'] = $this->tableIdsShrink;
        }

        if (null !== $this->chunkMode) {
            $res['chunkMode'] = $this->chunkMode;
        }

        if (null !== $this->connectId) {
            $res['connectId'] = $this->connectId;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->datasourceCode) {
            $res['datasourceCode'] = $this->datasourceCode;
        }

        if (null !== $this->enableHeaders) {
            $res['enableHeaders'] = $this->enableHeaders;
        }

        if (null !== $this->knowledgeScene) {
            $res['knowledgeScene'] = $this->knowledgeScene;
        }

        if (null !== $this->metaExtractColumnsShrink) {
            $res['metaExtractColumns'] = $this->metaExtractColumnsShrink;
        }

        if (null !== $this->pipelineCommercialCu) {
            $res['pipelineCommercialCu'] = $this->pipelineCommercialCu;
        }

        if (null !== $this->pipelineCommercialType) {
            $res['pipelineCommercialType'] = $this->pipelineCommercialType;
        }

        if (null !== $this->pipelineRetrieveRateLimitStrategy) {
            $res['pipelineRetrieveRateLimitStrategy'] = $this->pipelineRetrieveRateLimitStrategy;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
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
            $model->categoryIdsShrink = $map['CategoryIds'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Columns'])) {
            $model->columnsShrink = $map['Columns'];
        }

        if (isset($map['CreateIndexType'])) {
            $model->createIndexType = $map['CreateIndexType'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSourceShrink = $map['DataSource'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocumentIds'])) {
            $model->documentIdsShrink = $map['DocumentIds'];
        }

        if (isset($map['EmbeddingModelName'])) {
            $model->embeddingModelName = $map['EmbeddingModelName'];
        }

        if (isset($map['EnableRewrite'])) {
            $model->enableRewrite = $map['EnableRewrite'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OverlapSize'])) {
            $model->overlapSize = $map['OverlapSize'];
        }

        if (isset($map['RerankMinScore'])) {
            $model->rerankMinScore = $map['RerankMinScore'];
        }

        if (isset($map['RerankModelName'])) {
            $model->rerankModelName = $map['RerankModelName'];
        }

        if (isset($map['Separator'])) {
            $model->separator = $map['Separator'];
        }

        if (isset($map['SinkInstanceId'])) {
            $model->sinkInstanceId = $map['SinkInstanceId'];
        }

        if (isset($map['SinkRegion'])) {
            $model->sinkRegion = $map['SinkRegion'];
        }

        if (isset($map['SinkType'])) {
            $model->sinkType = $map['SinkType'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StructureType'])) {
            $model->structureType = $map['StructureType'];
        }

        if (isset($map['TableIds'])) {
            $model->tableIdsShrink = $map['TableIds'];
        }

        if (isset($map['chunkMode'])) {
            $model->chunkMode = $map['chunkMode'];
        }

        if (isset($map['connectId'])) {
            $model->connectId = $map['connectId'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['datasourceCode'])) {
            $model->datasourceCode = $map['datasourceCode'];
        }

        if (isset($map['enableHeaders'])) {
            $model->enableHeaders = $map['enableHeaders'];
        }

        if (isset($map['knowledgeScene'])) {
            $model->knowledgeScene = $map['knowledgeScene'];
        }

        if (isset($map['metaExtractColumns'])) {
            $model->metaExtractColumnsShrink = $map['metaExtractColumns'];
        }

        if (isset($map['pipelineCommercialCu'])) {
            $model->pipelineCommercialCu = $map['pipelineCommercialCu'];
        }

        if (isset($map['pipelineCommercialType'])) {
            $model->pipelineCommercialType = $map['pipelineCommercialType'];
        }

        if (isset($map['pipelineRetrieveRateLimitStrategy'])) {
            $model->pipelineRetrieveRateLimitStrategy = $map['pipelineRetrieveRateLimitStrategy'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
