<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryCollectionDataShrinkRequest extends Model
{
    /**
     * @description Collection name.
     *
     * > You can use the [ListCollections](https://help.aliyun.com/document_detail/2401503.html) API to view the list.
     *
     * This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Content for full-text search. When this value is empty, only vector search is used; when it is not empty, both vector and full-text search are used.
     *
     * > The Vector parameter cannot be empty at the same time.
     *
     * @example hello_world
     *
     * @var string
     */
    public $content;

    /**
     * @description Instance ID.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) API to view details of all AnalyticDB PostgreSQL instances in the target region, including the instance ID.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $filter;

    /**
     * @description Dual-path recall algorithm, default is empty (i.e., directly compare and sort the scores of vectors and full-text).
     *
     * Available values:
     *
     * - RRF: Reciprocal rank fusion, with a parameter k controlling the fusion effect. See HybridSearchArgs configuration for details;
     * - Weight: Weighted sorting, using a parameter alpha to control the score ratio of vectors and full-text, then sorting. See HybridSearchArgs configuration for details;
     * - Cascaded: Perform full-text search first, then vector search based on the full-text results;
     *
     * @example RRF
     *
     * @var string
     */
    public $hybridSearch;

    /**
     * @description The parameters of the two-way retrieval algorithm. The following parameters are supported:
     *
     *   When HybridSearch is set to RRF, the scores are calculated by using the `1/(k+rank_i)` formula. The constant k is a positive integer that is greater than 1.
     *
     * <!---->
     *
     * {
     * "RRF": {
     * "k": 60
     * }
     * }
     *
     *   When HybridSearch is set to Weight, the scores are calculated by using the `alpha * vector_score + (1-alpha) * text_score` formula. The alpha parameter specifies the proportion of the vector search score and the full-text search score and ranges from 0 to 1. A value of 0 specifies full-text search and a value of 1 specifies vector search.
     *
     * <!---->
     *
     * {
     * "Weight": {
     * "alpha": 0.5
     * }
     * }
     *
     * @var string
     */
    public $hybridSearchArgsShrink;

    /**
     * @description Defaults to empty, indicating the metadata fields to return. Multiple fields should be separated by commas.
     *
     * @example title,content
     *
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @description Whether to return vector data. Value descriptions:
     * - **true**: Return vector data.
     * - **false**: Do not return vector data, used for full-text search scenarios.
     *
     * @example true
     *
     * @var bool
     */
    public $includeValues;

    /**
     * @description Similarity algorithm used during retrieval. Value descriptions:
     * - **l2**: Euclidean distance.
     * - **ip**: Inner product (dot product) distance.
     * - **cosine**: Cosine similarity.
     *
     * > If this value is empty, the algorithm specified during index creation is used.
     *
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description Namespace.
     *
     * > You can use the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API to view the list.
     *
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Password for the namespace.
     *
     * This parameter is required.
     *
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @description Defaults to empty, indicating the starting point for pagination queries. Does not support hybrid search scenarios.
     *
     * The value must be >= 0. When this value is not empty, it will return `Total`, which indicates the total number of hits. This parameter works with `TopK`. For example, to paginate 20 and retrieve chunks with `chunk_id` from 0 to 44, you need to make three requests:
     * - `Offset=0, TopK=20` returns `chunk_id` 0~19
     * - `Offset=20, TopK=20` returns `chunk_id` 20~39
     * - `Offset=30, TopK=20` returns `chunk_id` 40~44
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description Defaults to empty, indicating the field for sorting. Does not support hybrid search scenarios.
     *
     * The field must belong to metadata or be a default field in the table, such as `id`. The supported formats are:
     * - A single field, e.g., `chunk_id`;
     * - Multiple fields, separated by commas, e.g., `block_id, chunk_id`;
     * - Supports reverse order, e.g., `block_id DESC, chunk_id DESC`;
     *
     * @example chunk_id
     *
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Region ID where the instance is located.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Uses another relational table to filter vector data (similar to a Join function).
     *
     * > Data from the relational table can be returned by setting the `IncludeMetadataFields` parameter. For example, `rds_table_name.id` indicates returning the `id` field from the relational table.
     *
     * @var string
     */
    public $relationalTableFilterShrink;

    /**
     * @var string
     */
    public $sparseVectorShrink;

    /**
     * @description Set the number of top results to return.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $topK;

    /**
     * @description Vector data, with the same dimension as specified in the [CreateCollection](https://help.aliyun.com/document_detail/2401497.html) API.
     * > When the vector is empty, only full-text search results are returned.
     *
     * @var string
     */
    public $vectorShrink;

    /**
     * @description The ID of the Workspace composed of multiple database instances. This parameter and `DBInstanceId` cannot both be empty. If both are specified, this parameter takes precedence.
     *
     * @example gp-ws-*****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collection' => 'Collection',
        'content' => 'Content',
        'DBInstanceId' => 'DBInstanceId',
        'filter' => 'Filter',
        'hybridSearch' => 'HybridSearch',
        'hybridSearchArgsShrink' => 'HybridSearchArgs',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeValues' => 'IncludeValues',
        'metrics' => 'Metrics',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'offset' => 'Offset',
        'orderBy' => 'OrderBy',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'relationalTableFilterShrink' => 'RelationalTableFilter',
        'sparseVectorShrink' => 'SparseVector',
        'topK' => 'TopK',
        'vectorShrink' => 'Vector',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->hybridSearch) {
            $res['HybridSearch'] = $this->hybridSearch;
        }
        if (null !== $this->hybridSearchArgsShrink) {
            $res['HybridSearchArgs'] = $this->hybridSearchArgsShrink;
        }
        if (null !== $this->includeMetadataFields) {
            $res['IncludeMetadataFields'] = $this->includeMetadataFields;
        }
        if (null !== $this->includeValues) {
            $res['IncludeValues'] = $this->includeValues;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relationalTableFilterShrink) {
            $res['RelationalTableFilter'] = $this->relationalTableFilterShrink;
        }
        if (null !== $this->sparseVectorShrink) {
            $res['SparseVector'] = $this->sparseVectorShrink;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->vectorShrink) {
            $res['Vector'] = $this->vectorShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCollectionDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['HybridSearch'])) {
            $model->hybridSearch = $map['HybridSearch'];
        }
        if (isset($map['HybridSearchArgs'])) {
            $model->hybridSearchArgsShrink = $map['HybridSearchArgs'];
        }
        if (isset($map['IncludeMetadataFields'])) {
            $model->includeMetadataFields = $map['IncludeMetadataFields'];
        }
        if (isset($map['IncludeValues'])) {
            $model->includeValues = $map['IncludeValues'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelationalTableFilter'])) {
            $model->relationalTableFilterShrink = $map['RelationalTableFilter'];
        }
        if (isset($map['SparseVector'])) {
            $model->sparseVectorShrink = $map['SparseVector'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['Vector'])) {
            $model->vectorShrink = $map['Vector'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
