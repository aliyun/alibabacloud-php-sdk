<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListModelsRequest extends Model
{
    /**
     * @example AI4D,QuickStart
     *
     * @var string
     */
    public $collections;

    /**
     * @example nlp
     *
     * @var string
     */
    public $domain;

    /**
     * @example key1
     *
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @example Endpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example ModelScope
     *
     * @var string
     */
    public $origin;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example nlp
     *
     * @var string
     */
    public $query;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example text-classification
     *
     * @var string
     */
    public $task;

    /**
     * @example 324**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collections' => 'Collections',
        'domain'      => 'Domain',
        'label'       => 'Label',
        'modelName'   => 'ModelName',
        'modelType'   => 'ModelType',
        'order'       => 'Order',
        'origin'      => 'Origin',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'provider'    => 'Provider',
        'query'       => 'Query',
        'sortBy'      => 'SortBy',
        'task'        => 'Task',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collections) {
            $res['Collections'] = $this->collections;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collections'])) {
            $model->collections = $map['Collections'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
