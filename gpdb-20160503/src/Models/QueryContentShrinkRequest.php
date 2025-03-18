<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryContentShrinkRequest extends Model
{
    /**
     * @description Document collection name.
     *
     * > Created by the [CreateDocumentCollection](https://help.aliyun.com/document_detail/2618448.html) API. You can use the [ListDocumentCollections](https://help.aliyun.com/document_detail/2618452.html) API to view the list of created document collections.
     *
     * This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Text content for retrieval.
     *
     * @example What is ADBPG?
     *
     * @var string
     */
    public $content;

    /**
     * @description Instance ID.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) API to view details of all AnalyticDB for PostgreSQL instances in the target region, including the instance ID.
     *
     * This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description In image search scenarios, the source file name of the image to be searched.
     *
     * > The image file must have a file extension. Currently supported image extensions: bmp, jpg, jpeg, png, tiff.
     *
     * @example test.jpg
     *
     * @var string
     */
    public $fileName;

    /**
     * @description In image search scenarios, the publicly accessible URL of the image file.
     *
     * > The image file must have a file extension. Currently supported image extensions: bmp, jpg, jpeg, png, tiff.
     *
     * @example https://xx/myImage.jpg
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description Filter condition for the data to be queried, in SQL WHERE format. It is an expression that returns a boolean value (true or false). The conditions can be simple comparison operators such as equal (=), not equal (<> or !=), greater than (>), less than (<), greater than or equal to (>=), less than or equal to (<=), or more complex expressions combined with logical operators (AND, OR, NOT), and conditions using keywords like IN, BETWEEN, LIKE, etc.
     *
     * >
     * > - For detailed syntax, refer to: https://www.postgresqltutorial.com/postgresql-tutorial/postgresql-where/
     *
     * @example title = \\"test\\" AND name like \\"test%\\"
     *
     * @var string
     */
    public $filter;

    /**
     * @description Dual recall algorithm, default is empty (i.e., directly compare and sort the scores of vectors and full text).
     *
     * Available values:
     *
     * - RRF: Reciprocal rank fusion, with a parameter k controlling the fusion effect. See HybridSearchArgs configuration for details;
     * - Weight: Weighted ranking, using a parameter alpha to control the weight of vector and full-text scores, then sorting. See HybridSearchArgs configuration for details;
     * - Cascaded: Perform full-text retrieval first, then vector retrieval on top of it;
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
     * @description Specifies whether to return the URL of the document. Default value: false.
     *
     * @example false
     *
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
     * @description Whether to return vectors. Default is false.
     * > - **false**: Do not return vectors.
     * > - **true**: Return vectors.
     *
     * @example true
     *
     * @var bool
     */
    public $includeVector;

    /**
     * @description Similarity algorithm used during retrieval. If this value is empty, the algorithm specified at the time of knowledge base creation is used. It is recommended not to set this unless there is a specific need.
     *
     * > Value description:
     * > - **l2**: Euclidean distance.
     * > - **ip**: Inner product (dot product) distance.
     * > - **cosine**: Cosine similarity.
     *
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description Namespace, default is public.
     *
     * > You can create a namespace using the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) API and view the list of namespaces using the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API.
     *
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Password for the namespace.
     *
     * > This value is specified in the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) API.
     *
     * This parameter is required.
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
     * @description Recall window. When this value is not empty, it adds context to the returned search results. The format is an array of 2 elements: List<A, B>, where -10 <= A <= 0 and 0 <= B <= 10.
     * > - Recommended when documents are fragmented and retrieval may lose contextual information.
     * > - Re-ranking takes precedence over windowing, i.e., re-rank first, then apply windowing.
     *
     * @var string
     */
    public $recallWindowShrink;

    /**
     * @description The region ID where the instance is located.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Re-ranking factor. When this value is not empty, it will re-rank the vector search results. The value range is 1 < RerankFactor <= 5.
     * > - Re-ranking is slower when documents are sparsely split.
     * > - It is recommended that the re-ranked count (TopK * Factor, rounded up) does not exceed 50.
     *
     * @example 2
     *
     * @var float
     */
    public $rerankFactor;

    /**
     * @description Set the number of top results to return.
     *
     * @example 10
     *
     * @var int
     */
    public $topK;

    /**
     * @description Whether to use full-text retrieval (dual recall). Default is false, which means only vector retrieval is used.
     *
     * @example true
     *
     * @var bool
     */
    public $useFullTextRetrieval;
    protected $_name = [
        'collection' => 'Collection',
        'content' => 'Content',
        'DBInstanceId' => 'DBInstanceId',
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'filter' => 'Filter',
        'hybridSearch' => 'HybridSearch',
        'hybridSearchArgsShrink' => 'HybridSearchArgs',
        'includeFileUrl' => 'IncludeFileUrl',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeVector' => 'IncludeVector',
        'metrics' => 'Metrics',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId' => 'OwnerId',
        'recallWindowShrink' => 'RecallWindow',
        'regionId' => 'RegionId',
        'rerankFactor' => 'RerankFactor',
        'topK' => 'TopK',
        'useFullTextRetrieval' => 'UseFullTextRetrieval',
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
        if (null !== $this->hybridSearchArgsShrink) {
            $res['HybridSearchArgs'] = $this->hybridSearchArgsShrink;
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
        if (null !== $this->recallWindowShrink) {
            $res['RecallWindow'] = $this->recallWindowShrink;
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
     * @return QueryContentShrinkRequest
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
            $model->hybridSearchArgsShrink = $map['HybridSearchArgs'];
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
            $model->recallWindowShrink = $map['RecallWindow'];
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
