<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class indices extends Model
{
    /**
     * @description The estimated length of chunks. Valid values: [1-2048].
     *
     * @example 5
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @description The description of the knowledge base.
     *
     * @example If each RAM user belongs to a RAM group, the configuration is considered compliant.
     *
     * @var string
     */
    public $description;

    /**
     * @description The list of the primary key IDs of the documents.
     *
     * @var string[]
     */
    public $documentIds;

    /**
     * @description The name of the embedding model. Valid values:
     *
     *   text-embedding-v2
     *
     * @example conv-rewrite-qwen-1.8b
     *
     * @var string
     */
    public $embeddingModelName;

    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * @example 259899
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the knowledge base.
     *
     * @example temp_mUB4j
     *
     * @var string
     */
    public $name;

    /**
     * @description The overlap length. Valid values: [0-1024].
     *
     * @example 10
     *
     * @var int
     */
    public $overlapSize;

    /**
     * @description Similarity Threshold Valid values: [0.01-1.00].
     *
     * @example 0.01
     *
     * @var string
     */
    public $rerankMinScore;

    /**
     * @description The name of the rank model. Valid values:
     *
     *   gte-rerank-hybrid
     *   gte-rerank
     *
     * @example gte-rerank-hybrid
     *
     * @var string
     */
    public $rerankModelName;

    /**
     * @description The clause identifier. Separate multiple clause identifiers with |. Valid values:
     *
     *   \\n: line break
     *   ，: Chinese comma
     *   ,: English comma
     *   。 : Chinese full stop
     *   .: English full stop
     *   ！ : Chinese exclamation point
     *   ! : English exclamation point
     *   ；: Chinese semicolon
     *   ;: English semicolon
     *   ？ : Chinese question mark
     *   ?: English question mark
     *
     * @example \\n
     *
     * @var string
     */
    public $separator;

    /**
     * @description The ID of the vector storage instance.
     *
     * @example gp-bp1gq62t1788yw2ol
     *
     * @var string
     */
    public $sinkInstanceId;

    /**
     * @description The region of the vector storage instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sinkRegion;

    /**
     * @description The vector storage type of the knowledge base. Valid values:
     *
     *   ES: Built-in vector database.
     *   BUILT_IN: Built-in vector database.
     *   ADB: AnalyticDB for PostgreSQL database.
     *
     * @example es
     *
     * @var string
     */
    public $sinkType;

    /**
     * @description The data type of [Data Management](https://bailian.console.aliyun.com/#/data-center). For unstructured knowledge base, possible values:
     *
     *   DATA_CENTER_CATEGORY: The category type.
     *   DATA_CENTER_FILE: The document type.
     *
     * For structured knowledge base, possible values:
     *
     *   DATA_CENTER_STRUCTURED_TABLE: The data table type.
     *
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The vector storage type of the knowledge base. Valid values:
     *
     *   UNSTRUCTURED
     *
     * @example structured
     *
     * @var string
     */
    public $structureType;
    protected $_name = [
        'chunkSize'          => 'ChunkSize',
        'description'        => 'Description',
        'documentIds'        => 'DocumentIds',
        'embeddingModelName' => 'EmbeddingModelName',
        'id'                 => 'Id',
        'name'               => 'Name',
        'overlapSize'        => 'OverlapSize',
        'rerankMinScore'     => 'RerankMinScore',
        'rerankModelName'    => 'RerankModelName',
        'separator'          => 'Separator',
        'sinkInstanceId'     => 'SinkInstanceId',
        'sinkRegion'         => 'SinkRegion',
        'sinkType'           => 'SinkType',
        'sourceType'         => 'SourceType',
        'structureType'      => 'StructureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentIds) {
            $res['DocumentIds'] = $this->documentIds;
        }
        if (null !== $this->embeddingModelName) {
            $res['EmbeddingModelName'] = $this->embeddingModelName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = $map['DocumentIds'];
            }
        }
        if (isset($map['EmbeddingModelName'])) {
            $model->embeddingModelName = $map['EmbeddingModelName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
