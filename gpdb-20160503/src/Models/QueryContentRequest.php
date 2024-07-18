<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryContentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
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
     * @example test.jpg
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://xx/myImage.jpg
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example title = \\"test\\"
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
     * @var bool
     */
    public $includeFileUrl;

    /**
     * @description The metadata fields to be returned. Separate multiple fields with commas (,). This parameter is empty by default.
     *
     * @example title,page
     *
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @example true
     *
     * @var bool
     */
    public $includeVector;

    /**
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The name of the namespace. Default value: public.
     *
     * >  You can call the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) operation to create a namespace and call the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) operation to query a list of namespaces.
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
     * @var int
     */
    public $ownerId;

    /**
     * @description The recall window. If you specify this parameter, the context of the search result is returned. Format: List\\<A, B>. Valid values: -10<=A<=0 and 0<=B<=10.
     *
     * >
     *
     *   We recommend that you specify this parameter if the source document is segmented into large numbers of pieces and you may fail to obtain the context.
     *
     *   The context of the search result is retrieved based on the recall window after the search result is reranked.
     *
     * @var int[]
     */
    public $recallWindow;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2
     *
     * @var float
     */
    public $rerankFactor;

    /**
     * @example 10
     *
     * @var int
     */
    public $topK;

    /**
     * @description Specifies whether to use full-text search to implement two-way retrieval. The default value is false, which specifies that only vector search is used.
     *
     * @example true
     *
     * @var bool
     */
    public $useFullTextRetrieval;
    protected $_name = [
        'collection'            => 'Collection',
        'content'               => 'Content',
        'DBInstanceId'          => 'DBInstanceId',
        'fileName'              => 'FileName',
        'fileUrl'               => 'FileUrl',
        'filter'                => 'Filter',
        'hybridSearch'          => 'HybridSearch',
        'hybridSearchArgs'      => 'HybridSearchArgs',
        'includeFileUrl'        => 'IncludeFileUrl',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeVector'         => 'IncludeVector',
        'metrics'               => 'Metrics',
        'namespace'             => 'Namespace',
        'namespacePassword'     => 'NamespacePassword',
        'ownerId'               => 'OwnerId',
        'recallWindow'          => 'RecallWindow',
        'regionId'              => 'RegionId',
        'rerankFactor'          => 'RerankFactor',
        'topK'                  => 'TopK',
        'useFullTextRetrieval'  => 'UseFullTextRetrieval',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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
        if (null !== $this->includeFileUrl) {
            $res['IncludeFileUrl'] = $this->includeFileUrl;
        }
        if (null !== $this->includeMetadataFields) {
            $res['IncludeMetadataFields'] = $this->includeMetadataFields;
        }
        if (null !== $this->includeVector) {
            $res['IncludeVector'] = $this->includeVector;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recallWindow) {
            $res['RecallWindow'] = $this->recallWindow;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->useFullTextRetrieval) {
            $res['UseFullTextRetrieval'] = $this->useFullTextRetrieval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryContentRequest
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
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
        if (isset($map['IncludeFileUrl'])) {
            $model->includeFileUrl = $map['IncludeFileUrl'];
        }
        if (isset($map['IncludeMetadataFields'])) {
            $model->includeMetadataFields = $map['IncludeMetadataFields'];
        }
        if (isset($map['IncludeVector'])) {
            $model->includeVector = $map['IncludeVector'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecallWindow'])) {
            if (!empty($map['RecallWindow'])) {
                $model->recallWindow = $map['RecallWindow'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['UseFullTextRetrieval'])) {
            $model->useFullTextRetrieval = $map['UseFullTextRetrieval'];
        }

        return $model;
    }
}
