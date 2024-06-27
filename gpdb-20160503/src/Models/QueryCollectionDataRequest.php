<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryCollectionDataRequest extends Model
{
    /**
     * @description The name of the collection.
     *
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description The content that is used for full-text search. If you leave this parameter empty, only vector search is used. If you do not leave this parameter empty, two-way retrieval based on vector search and full-text search is used.
     *
     * >  You must specify at least one of the Content and Vector parameters.
     * @example hello_world
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example response > 200
     *
     * @var string
     */
    public $filter;

    /**
     * @description The two-way retrieval algorithm. This parameter is empty by default, which specifies that scores of vector search and full-text search are directly compared and sorted without additional weighting or adjustments.
     *
     * Valid values:
     *
     *   RRF: The reciprocal rank fusion (RRF) algorithm uses a constant k to control the fusion effect. For more information, see the description of the HybridSearchArgs parameter.
     *   Weight: This algorithm uses the alpha parameter to specify the proportion of the vector search score and the full-text search score and then sorts by weight. For more information, see the description of the HybridSearchArgs parameter.
     *   Cascaded: This algorithm performs first full-text search and then vector search.
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
     * }
     *
     *   When HybridSearch is set to Weight, the scores are calculated by using the `alpha * vector_score + (1-alpha) * text_score` formula. The alpha parameter specifies the proportion of the vector search score and the full-text search score and ranges from 0 to 1. A value of 0 specifies full-text search and a value of 1 specifies vector search.
     *
     * }
     * @var mixed[][]
     */
    public $hybridSearchArgs;

    /**
     * @description The metadata fields to be returned. Separate multiple fields with commas (,). This parameter is empty by default.
     *
     * @example title,content
     *
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @description Specifies whether to return vector data. Valid values:
     *
     *   **true**: returns vector data.
     *   **false**: does not return vector data. In full-text search scenarios, set this parameter to false.
     *
     * @example true
     *
     * @var bool
     */
    public $includeValues;

    /**
     * @description The similarity algorithm for search. Valid values:
     *
     *   **l2**: Euclidean distance.
     *   **ip**: inner product distance.
     *   **cosine**: cosine similarity.
     *
     * >  If you leave this parameter empty, the l2, ip, or cosine algorithm that is specified when you create an index is used.
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The name of the namespace.
     *
     * >  You can call the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) operation to query a list of namespaces.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @description The starting point for paginated queries. This parameter is empty by default. This parameter does not support two-way retrieval scenarios.
     *
     * The value must be greater than or equal to 0. If you do not leave this parameter empty, the Total parameter is returned to indicate the total number of matched entries. You must specify this parameter and the TopK parameter in pairs. For example, to paginate 20 chunks at a time for a total of 45 chunks whose chunk_id values are 0 to 44, three requests are involved:
     *
     *   First request: Set the Offset value to 0 and the TopK value to 20. The chunks whose chunk_id values are 0 to 19 are returned.
     *   Second request: Set the Offset value to 20 and the TopK value to 20. The chunks whose chunk_id values are 20 to 39 are returned.
     *   Third request: Set the Offset value to 30 and the TopK value to 20. The chunks whose chunk_id values are 40 to 44 are returned.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The fields by which to sort the results. This parameter is empty by default. This parameter does not support two-way retrieval scenarios.
     *
     * You must specify the default fields in the metadata or the table, such as id. You can specify the following number of fields:
     *
     *   One field, such as chunk_id.
     *   Multiple fields that are sorted in ascending order and separated by commas (,), such as block_id and chunk_id.
     *   Multiple fields that are sorted in descending order and separated by commas (,), such as block_id DESC, chunk_id DESC.
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
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $topK;

    /**
     * @description The vector data. The length of the value must be the same as that of the Dimension parameter in the [CreateCollection](https://help.aliyun.com/document_detail/2401497.html) operation.
     *
     * >  If you leave this parameter empty, only full-text search results are returned.
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'collection'            => 'Collection',
        'content'               => 'Content',
        'DBInstanceId'          => 'DBInstanceId',
        'filter'                => 'Filter',
        'hybridSearch'          => 'HybridSearch',
        'hybridSearchArgs'      => 'HybridSearchArgs',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeValues'         => 'IncludeValues',
        'metrics'               => 'Metrics',
        'namespace'             => 'Namespace',
        'namespacePassword'     => 'NamespacePassword',
        'offset'                => 'Offset',
        'orderBy'               => 'OrderBy',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'topK'                  => 'TopK',
        'vector'                => 'Vector',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->hybridSearchArgs) {
            $res['HybridSearchArgs'] = $this->hybridSearchArgs;
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
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->vector) {
            $res['Vector'] = $this->vector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCollectionDataRequest
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
            $model->hybridSearchArgs = $map['HybridSearchArgs'];
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
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = $map['Vector'];
            }
        }

        return $model;
    }
}
