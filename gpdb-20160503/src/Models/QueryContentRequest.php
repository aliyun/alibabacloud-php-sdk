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
     * @var string
     */
    public $fileName;

    /**
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
     * @var string
     */
    public $hybridSearch;

    /**
     * @var mixed[][]
     */
    public $hybridSearchArgs;

    /**
     * @var string
     */
    public $includeMetadataFields;

    /**
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
