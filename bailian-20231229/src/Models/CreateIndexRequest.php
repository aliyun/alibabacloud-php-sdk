<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest\columns;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest\dataSource;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest\metaExtractColumns;

class CreateIndexRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $createIndexType;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $documentIds;

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
     * @var string[]
     */
    public $tableIds;

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
     * @var metaExtractColumns[]
     */
    public $metaExtractColumns;

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
        'categoryIds' => 'CategoryIds',
        'chunkSize' => 'ChunkSize',
        'columns' => 'Columns',
        'createIndexType' => 'CreateIndexType',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'documentIds' => 'DocumentIds',
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
        'tableIds' => 'TableIds',
        'chunkMode' => 'chunkMode',
        'connectId' => 'connectId',
        'database' => 'database',
        'datasourceCode' => 'datasourceCode',
        'enableHeaders' => 'enableHeaders',
        'knowledgeScene' => 'knowledgeScene',
        'metaExtractColumns' => 'metaExtractColumns',
        'pipelineCommercialCu' => 'pipelineCommercialCu',
        'pipelineCommercialType' => 'pipelineCommercialType',
        'pipelineRetrieveRateLimitStrategy' => 'pipelineRetrieveRateLimitStrategy',
        'table' => 'table',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        if (\is_array($this->tableIds)) {
            Model::validateArray($this->tableIds);
        }
        if (\is_array($this->metaExtractColumns)) {
            Model::validateArray($this->metaExtractColumns);
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

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createIndexType) {
            $res['CreateIndexType'] = $this->createIndexType;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['DocumentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['DocumentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->tableIds) {
            if (\is_array($this->tableIds)) {
                $res['TableIds'] = [];
                $n1 = 0;
                foreach ($this->tableIds as $item1) {
                    $res['TableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->metaExtractColumns) {
            if (\is_array($this->metaExtractColumns)) {
                $res['metaExtractColumns'] = [];
                $n1 = 0;
                foreach ($this->metaExtractColumns as $item1) {
                    $res['metaExtractColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = [];
                $n1 = 0;
                foreach ($map['CategoryIds'] as $item1) {
                    $model->categoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateIndexType'])) {
            $model->createIndexType = $map['CreateIndexType'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['DocumentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['TableIds'])) {
                $model->tableIds = [];
                $n1 = 0;
                foreach ($map['TableIds'] as $item1) {
                    $model->tableIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['metaExtractColumns'])) {
                $model->metaExtractColumns = [];
                $n1 = 0;
                foreach ($map['metaExtractColumns'] as $item1) {
                    $model->metaExtractColumns[$n1] = metaExtractColumns::fromMap($item1);
                    ++$n1;
                }
            }
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
