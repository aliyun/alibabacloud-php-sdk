<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class QueryCollectionDataShrinkRequest extends Model
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
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @var bool
     */
    public $includeSparseValues;

    /**
     * @var bool
     */
    public $includeValues;

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
    public $offset;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relationalTableFilterShrink;

    /**
     * @var string
     */
    public $sparseVectorShrink;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $vectorShrink;

    /**
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
        'includeSparseValues' => 'IncludeSparseValues',
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

        if (null !== $this->includeSparseValues) {
            $res['IncludeSparseValues'] = $this->includeSparseValues;
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

        if (isset($map['IncludeSparseValues'])) {
            $model->includeSparseValues = $map['IncludeSparseValues'];
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
