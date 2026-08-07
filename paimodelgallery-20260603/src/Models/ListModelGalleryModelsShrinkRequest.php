<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;

class ListModelGalleryModelsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collections;

    /**
     * @var bool
     */
    public $compressible;

    /**
     * @var string
     */
    public $conditionsShrink;

    /**
     * @var bool
     */
    public $deepThink;

    /**
     * @var bool
     */
    public $demonstrable;

    /**
     * @var bool
     */
    public $deployable;

    /**
     * @var bool
     */
    public $distillable;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $evaluable;

    /**
     * @var bool
     */
    public $functionCall;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelSeries;

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
    public $query;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $supportedCompressionResource;

    /**
     * @var string
     */
    public $supportedDistillationResource;

    /**
     * @var string
     */
    public $supportedEvaluationResource;

    /**
     * @var string
     */
    public $supportedInferenceResource;

    /**
     * @var string
     */
    public $supportedTrainingResource;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $task;

    /**
     * @var bool
     */
    public $trainable;
    protected $_name = [
        'collections' => 'Collections',
        'compressible' => 'Compressible',
        'conditionsShrink' => 'Conditions',
        'deepThink' => 'DeepThink',
        'demonstrable' => 'Demonstrable',
        'deployable' => 'Deployable',
        'distillable' => 'Distillable',
        'domain' => 'Domain',
        'evaluable' => 'Evaluable',
        'functionCall' => 'FunctionCall',
        'modelName' => 'ModelName',
        'modelSeries' => 'ModelSeries',
        'modelType' => 'ModelType',
        'order' => 'Order',
        'origin' => 'Origin',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'sortBy' => 'SortBy',
        'supportedCompressionResource' => 'SupportedCompressionResource',
        'supportedDistillationResource' => 'SupportedDistillationResource',
        'supportedEvaluationResource' => 'SupportedEvaluationResource',
        'supportedInferenceResource' => 'SupportedInferenceResource',
        'supportedTrainingResource' => 'SupportedTrainingResource',
        'tagShrink' => 'Tag',
        'task' => 'Task',
        'trainable' => 'Trainable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collections) {
            $res['Collections'] = $this->collections;
        }

        if (null !== $this->compressible) {
            $res['Compressible'] = $this->compressible;
        }

        if (null !== $this->conditionsShrink) {
            $res['Conditions'] = $this->conditionsShrink;
        }

        if (null !== $this->deepThink) {
            $res['DeepThink'] = $this->deepThink;
        }

        if (null !== $this->demonstrable) {
            $res['Demonstrable'] = $this->demonstrable;
        }

        if (null !== $this->deployable) {
            $res['Deployable'] = $this->deployable;
        }

        if (null !== $this->distillable) {
            $res['Distillable'] = $this->distillable;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->evaluable) {
            $res['Evaluable'] = $this->evaluable;
        }

        if (null !== $this->functionCall) {
            $res['FunctionCall'] = $this->functionCall;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelSeries) {
            $res['ModelSeries'] = $this->modelSeries;
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

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->supportedCompressionResource) {
            $res['SupportedCompressionResource'] = $this->supportedCompressionResource;
        }

        if (null !== $this->supportedDistillationResource) {
            $res['SupportedDistillationResource'] = $this->supportedDistillationResource;
        }

        if (null !== $this->supportedEvaluationResource) {
            $res['SupportedEvaluationResource'] = $this->supportedEvaluationResource;
        }

        if (null !== $this->supportedInferenceResource) {
            $res['SupportedInferenceResource'] = $this->supportedInferenceResource;
        }

        if (null !== $this->supportedTrainingResource) {
            $res['SupportedTrainingResource'] = $this->supportedTrainingResource;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        if (null !== $this->trainable) {
            $res['Trainable'] = $this->trainable;
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

        if (isset($map['Compressible'])) {
            $model->compressible = $map['Compressible'];
        }

        if (isset($map['Conditions'])) {
            $model->conditionsShrink = $map['Conditions'];
        }

        if (isset($map['DeepThink'])) {
            $model->deepThink = $map['DeepThink'];
        }

        if (isset($map['Demonstrable'])) {
            $model->demonstrable = $map['Demonstrable'];
        }

        if (isset($map['Deployable'])) {
            $model->deployable = $map['Deployable'];
        }

        if (isset($map['Distillable'])) {
            $model->distillable = $map['Distillable'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Evaluable'])) {
            $model->evaluable = $map['Evaluable'];
        }

        if (isset($map['FunctionCall'])) {
            $model->functionCall = $map['FunctionCall'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelSeries'])) {
            $model->modelSeries = $map['ModelSeries'];
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

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SupportedCompressionResource'])) {
            $model->supportedCompressionResource = $map['SupportedCompressionResource'];
        }

        if (isset($map['SupportedDistillationResource'])) {
            $model->supportedDistillationResource = $map['SupportedDistillationResource'];
        }

        if (isset($map['SupportedEvaluationResource'])) {
            $model->supportedEvaluationResource = $map['SupportedEvaluationResource'];
        }

        if (isset($map['SupportedInferenceResource'])) {
            $model->supportedInferenceResource = $map['SupportedInferenceResource'];
        }

        if (isset($map['SupportedTrainingResource'])) {
            $model->supportedTrainingResource = $map['SupportedTrainingResource'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        if (isset($map['Trainable'])) {
            $model->trainable = $map['Trainable'];
        }

        return $model;
    }
}
