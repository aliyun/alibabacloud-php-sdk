<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class QueryContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $content;

    /**
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
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $hybridSearch;

    /**
     * @var string
     */
    public $hybridSearchArgsShrink;

    /**
     * @var bool
     */
    public $includeFileUrl;

    /**
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @var bool
     */
    public $includeVector;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $recallWindowShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var int
     */
    public $topK;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
