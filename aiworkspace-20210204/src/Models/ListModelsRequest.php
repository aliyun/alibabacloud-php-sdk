<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsRequest\conditions;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsRequest\tag;

class ListModelsRequest extends Model
{
    /**
     * @var string
     */
    public $collections;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $task;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collections' => 'Collections',
        'conditions' => 'Conditions',
        'domain' => 'Domain',
        'label' => 'Label',
        'modelName' => 'ModelName',
        'modelType' => 'ModelType',
        'order' => 'Order',
        'origin' => 'Origin',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'provider' => 'Provider',
        'query' => 'Query',
        'sortBy' => 'SortBy',
        'tag' => 'Tag',
        'task' => 'Task',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collections) {
            $res['Collections'] = $this->collections;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->task) {
            $res['Task'] = $this->task;
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
        if (isset($map['Collections'])) {
            $model->collections = $map['Collections'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
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
