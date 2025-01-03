<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class CreateIndexShrinkRequest extends Model
{
    /**
     * @description The list of primary key IDs of the categories to be imported into the knowledge base.
     *
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @description The estimated length of chunks. The maximum number of characters for a chunk. Texts exceeding this limit are splited. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values: [1-2048].
     *
     * >  If you specify the `ChunkSize` parameter, you must also specify the `OverlapSize` and `Separator` parameters. If you do not specify these three parameters, the system uses the intelligent splitting method by default.
     * @example 128
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $columnsShrink;

    /**
     * @description >  This parameter is not available. Do not specify this parameter.
     *
     * @var string
     */
    public $dataSourceShrink;

    /**
     * @description The description of the knowledge base. The description must be 0 to 1,000 characters in length. This parameter is empty by default.
     *
     * @var string
     */
    public $description;

    /**
     * @description The list of primary key IDs of the documents to be imported into the knowledge base.
     *
     * @var string
     */
    public $documentIdsShrink;

    /**
     * @description The name of the embedding model. The embedding model converts the original input prompt and knowledge text into numerical vectors for similarity comparison. The default and only model available is DashScope text-embedding-v2. It supports multiple languages including Chinese and English and normalizes the vector results. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid value:
     *
     *   text-embedding-v2
     *
     * The default value is null, which means using the text-embedding-v2 model.
     * @example text-embedding-v2
     *
     * @var string
     */
    public $embeddingModelName;

    /**
     * @description The name of the knowledge base. The name must be 1 to 20 characters in length and can contain characters classified as letter in Unicode, including English letters, Chinese characters, digits, among others. The name can also contain colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description The overlap length. The number of overlapping characters between two consecutive chunks. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values: 0 to 1024.
     *
     * The default value is empty, which means using the intelligent splitting method.
     * @example 16
     *
     * @var int
     */
    public $overlapSize;

    /**
     * @description Similarity Threshold. The lowest similarity score of chunks that can be returned. This parameter is used to filter text chunks returned by the rank model. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values: [0.01-1.00].
     *
     * Default value: 0.20.
     * @example 0.20
     *
     * @var float
     */
    public $rerankMinScore;

    /**
     * @description The name of the rank model. The rank model is a scoring system outside the knowledge base. It calculates the similarity score of each text chunk in the input question and knowledge base and ranks them in descending order. Then, the model returns the top K chunks with the highest scores. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   gte-rerank-hybrid
     *   gte-rerank
     *
     * >  If you need only semantic ranking, we recommend that you use gte-rerank. If you need both semantic ranking and text matching features to ensure relevance, we recommend that you use gte-rerank-hybrid.
     * @example gte-rerank-hybrid
     *
     * @var string
     */
    public $rerankModelName;

    /**
     * @description The clause identifier. The document is split into chunks based on this identifier. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). You can specify multiple identifiers and do not need to add any other characters to separate them. For example: !,\\\\\\n. Valid values:
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
     *   ？: Chinese question mark
     *   ?: English question mark
     *
     * The default value is empty, which means using the intelligent splitting method.
     * @example ,
     *
     * @var string
     */
    public $separator;

    /**
     * @description The ID of the vector storage instance. This parameter is available only when SinkType is set to ADB. You can view the ID on the [Instances](https://gpdbnext.console.aliyun.com/gpdb/list) page of AnalyticDB for PostgreSQL.
     *
     * @example gp-bp321093j84
     *
     * @var string
     */
    public $sinkInstanceId;

    /**
     * @description The region of the vector storage instance. This parameter is available only when SinkType is set to ADB. You can call the [DescribeRegions](https://www.alibabacloud.com/help/en/analyticdb/analyticdb-for-postgresql/developer-reference/api-gpdb-2016-05-03-describeregions) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sinkRegion;

    /**
     * @description The vector storage type of the knowledge base. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   DEFAULT: The built-in vector database.
     *   ADB: AnalyticDB for PostgreSQL database. If you need advanced features, such as managing, auditing, and monitoring, we recommend that you specify ADB.
     *
     * This parameter is required.
     * @example DEFAULT
     *
     * @var string
     */
    public $sinkType;

    /**
     * @description The data type of [Data Management](https://bailian.console.aliyun.com/#/data-center). For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   DATA_CENTER_CATEGORY: The category type. Import all documents from one or more categories in Data Center.
     *   DATA_CENTER_FILE: The document type. Import one or more documents from Data Center.
     *
     * This parameter is required.
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The data type of the knowledge base. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid value:
     *
     *   unstructured
     *
     * This parameter is required.
     * @example structured
     *
     * @var string
     */
    public $structureType;

    /**
     * @var bool
     */
    public $enableHeaders;

    /**
     * @var string
     */
    public $metaExtractColumnsShrink;
    protected $_name = [
        'categoryIdsShrink'        => 'CategoryIds',
        'chunkSize'                => 'ChunkSize',
        'columnsShrink'            => 'Columns',
        'dataSourceShrink'         => 'DataSource',
        'description'              => 'Description',
        'documentIdsShrink'        => 'DocumentIds',
        'embeddingModelName'       => 'EmbeddingModelName',
        'name'                     => 'Name',
        'overlapSize'              => 'OverlapSize',
        'rerankMinScore'           => 'RerankMinScore',
        'rerankModelName'          => 'RerankModelName',
        'separator'                => 'Separator',
        'sinkInstanceId'           => 'SinkInstanceId',
        'sinkRegion'               => 'SinkRegion',
        'sinkType'                 => 'SinkType',
        'sourceType'               => 'SourceType',
        'structureType'            => 'StructureType',
        'enableHeaders'            => 'enableHeaders',
        'metaExtractColumnsShrink' => 'metaExtractColumns',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->enableHeaders) {
            $res['enableHeaders'] = $this->enableHeaders;
        }
        if (null !== $this->metaExtractColumnsShrink) {
            $res['metaExtractColumns'] = $this->metaExtractColumnsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIndexShrinkRequest
     */
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
        if (isset($map['enableHeaders'])) {
            $model->enableHeaders = $map['enableHeaders'];
        }
        if (isset($map['metaExtractColumns'])) {
            $model->metaExtractColumnsShrink = $map['metaExtractColumns'];
        }

        return $model;
    }
}
