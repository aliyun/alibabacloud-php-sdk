<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest\relationalTableFilter;

class QueryCollectionDataRequest extends Model
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
     * @var relationalTableFilter
     */
    public $relationalTableFilter;
    /**
     * @var int
     */
    public $topK;
    /**
     * @var float[]
     */
    public $vector;
    /**
     * @var string
     */
    public $workspaceId;
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
        'relationalTableFilter' => 'RelationalTableFilter',
        'topK'                  => 'TopK',
        'vector'                => 'Vector',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->hybridSearchArgs)) {
            Model::validateArray($this->hybridSearchArgs);
        }
        if (null !== $this->relationalTableFilter) {
            $this->relationalTableFilter->validate();
        }
        if (\is_array($this->vector)) {
            Model::validateArray($this->vector);
        }
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

        if (null !== $this->hybridSearchArgs) {
            if (\is_array($this->hybridSearchArgs)) {
                $res['HybridSearchArgs'] = [];
                foreach ($this->hybridSearchArgs as $key1 => $value1) {
                    $res['HybridSearchArgs'][$key1] = $value1;
                }
            }
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

        if (null !== $this->relationalTableFilter) {
            $res['RelationalTableFilter'] = null !== $this->relationalTableFilter ? $this->relationalTableFilter->toArray($noStream) : $this->relationalTableFilter;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->vector) {
            if (\is_array($this->vector)) {
                $res['Vector'] = [];
                $n1            = 0;
                foreach ($this->vector as $item1) {
                    $res['Vector'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['HybridSearchArgs'])) {
                $model->hybridSearchArgs = [];
                foreach ($map['HybridSearchArgs'] as $key1 => $value1) {
                    $model->hybridSearchArgs[$key1] = $value1;
                }
            }
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
            $model->relationalTableFilter = relationalTableFilter::fromMap($map['RelationalTableFilter']);
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = [];
                $n1            = 0;
                foreach ($map['Vector'] as $item1) {
                    $model->vector[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
