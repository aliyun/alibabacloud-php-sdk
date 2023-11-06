<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryContentRequest extends Model
{
    /**
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
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example title = \"test\"
     *
     * @var string
     */
    public $filter;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
        'collection'           => 'Collection',
        'content'              => 'Content',
        'DBInstanceId'         => 'DBInstanceId',
        'filter'               => 'Filter',
        'metrics'              => 'Metrics',
        'namespace'            => 'Namespace',
        'namespacePassword'    => 'NamespacePassword',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'topK'                 => 'TopK',
        'useFullTextRetrieval' => 'UseFullTextRetrieval',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
