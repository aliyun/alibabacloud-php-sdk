<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ModelGalleryModel\tags;

class ModelGalleryModel extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var bool
     */
    public $compressible;

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
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var bool
     */
    public $functionCall;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtLatestVersionModified;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $latestVersionName;

    /**
     * @var string
     */
    public $modelDescription;

    /**
     * @var string
     */
    public $modelDoc;

    /**
     * @var string
     */
    public $modelId;

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
     * @var int
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var int
     */
    public $parameterSize;

    /**
     * @var string
     */
    public $searchWords;

    /**
     * @var mixed[]
     */
    public $supportedCompressionMethods;

    /**
     * @var string
     */
    public $supportedCompressionResources;

    /**
     * @var mixed[]
     */
    public $supportedDistillationMethods;

    /**
     * @var string
     */
    public $supportedDistillationResources;

    /**
     * @var mixed[]
     */
    public $supportedEvaluationMethods;

    /**
     * @var string
     */
    public $supportedEvaluationResources;

    /**
     * @var mixed[]
     */
    public $supportedInferenceMethods;

    /**
     * @var string
     */
    public $supportedInferenceResources;

    /**
     * @var mixed[]
     */
    public $supportedTrainingMethods;

    /**
     * @var string
     */
    public $supportedTrainingResources;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $task;

    /**
     * @var bool
     */
    public $trainable;
    protected $_name = [
        'collection' => 'Collection',
        'compressible' => 'Compressible',
        'deepThink' => 'DeepThink',
        'demonstrable' => 'Demonstrable',
        'deployable' => 'Deployable',
        'distillable' => 'Distillable',
        'domain' => 'Domain',
        'evaluable' => 'Evaluable',
        'extraInfo' => 'ExtraInfo',
        'functionCall' => 'FunctionCall',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtLatestVersionModified' => 'GmtLatestVersionModified',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'latestVersionName' => 'LatestVersionName',
        'modelDescription' => 'ModelDescription',
        'modelDoc' => 'ModelDoc',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'modelSeries' => 'ModelSeries',
        'modelType' => 'ModelType',
        'orderNumber' => 'OrderNumber',
        'origin' => 'Origin',
        'parameterSize' => 'ParameterSize',
        'searchWords' => 'SearchWords',
        'supportedCompressionMethods' => 'SupportedCompressionMethods',
        'supportedCompressionResources' => 'SupportedCompressionResources',
        'supportedDistillationMethods' => 'SupportedDistillationMethods',
        'supportedDistillationResources' => 'SupportedDistillationResources',
        'supportedEvaluationMethods' => 'SupportedEvaluationMethods',
        'supportedEvaluationResources' => 'SupportedEvaluationResources',
        'supportedInferenceMethods' => 'SupportedInferenceMethods',
        'supportedInferenceResources' => 'SupportedInferenceResources',
        'supportedTrainingMethods' => 'SupportedTrainingMethods',
        'supportedTrainingResources' => 'SupportedTrainingResources',
        'tags' => 'Tags',
        'task' => 'Task',
        'trainable' => 'Trainable',
    ];

    public function validate()
    {
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->supportedCompressionMethods)) {
            Model::validateArray($this->supportedCompressionMethods);
        }
        if (\is_array($this->supportedDistillationMethods)) {
            Model::validateArray($this->supportedDistillationMethods);
        }
        if (\is_array($this->supportedEvaluationMethods)) {
            Model::validateArray($this->supportedEvaluationMethods);
        }
        if (\is_array($this->supportedInferenceMethods)) {
            Model::validateArray($this->supportedInferenceMethods);
        }
        if (\is_array($this->supportedTrainingMethods)) {
            Model::validateArray($this->supportedTrainingMethods);
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->compressible) {
            $res['Compressible'] = $this->compressible;
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

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->functionCall) {
            $res['FunctionCall'] = $this->functionCall;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtLatestVersionModified) {
            $res['GmtLatestVersionModified'] = $this->gmtLatestVersionModified;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->latestVersionName) {
            $res['LatestVersionName'] = $this->latestVersionName;
        }

        if (null !== $this->modelDescription) {
            $res['ModelDescription'] = $this->modelDescription;
        }

        if (null !== $this->modelDoc) {
            $res['ModelDoc'] = $this->modelDoc;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
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

        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->parameterSize) {
            $res['ParameterSize'] = $this->parameterSize;
        }

        if (null !== $this->searchWords) {
            $res['SearchWords'] = $this->searchWords;
        }

        if (null !== $this->supportedCompressionMethods) {
            if (\is_array($this->supportedCompressionMethods)) {
                $res['SupportedCompressionMethods'] = [];
                foreach ($this->supportedCompressionMethods as $key1 => $value1) {
                    $res['SupportedCompressionMethods'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->supportedCompressionResources) {
            $res['SupportedCompressionResources'] = $this->supportedCompressionResources;
        }

        if (null !== $this->supportedDistillationMethods) {
            if (\is_array($this->supportedDistillationMethods)) {
                $res['SupportedDistillationMethods'] = [];
                foreach ($this->supportedDistillationMethods as $key1 => $value1) {
                    $res['SupportedDistillationMethods'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->supportedDistillationResources) {
            $res['SupportedDistillationResources'] = $this->supportedDistillationResources;
        }

        if (null !== $this->supportedEvaluationMethods) {
            if (\is_array($this->supportedEvaluationMethods)) {
                $res['SupportedEvaluationMethods'] = [];
                foreach ($this->supportedEvaluationMethods as $key1 => $value1) {
                    $res['SupportedEvaluationMethods'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->supportedEvaluationResources) {
            $res['SupportedEvaluationResources'] = $this->supportedEvaluationResources;
        }

        if (null !== $this->supportedInferenceMethods) {
            if (\is_array($this->supportedInferenceMethods)) {
                $res['SupportedInferenceMethods'] = [];
                foreach ($this->supportedInferenceMethods as $key1 => $value1) {
                    $res['SupportedInferenceMethods'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->supportedInferenceResources) {
            $res['SupportedInferenceResources'] = $this->supportedInferenceResources;
        }

        if (null !== $this->supportedTrainingMethods) {
            if (\is_array($this->supportedTrainingMethods)) {
                $res['SupportedTrainingMethods'] = [];
                foreach ($this->supportedTrainingMethods as $key1 => $value1) {
                    $res['SupportedTrainingMethods'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->supportedTrainingResources) {
            $res['SupportedTrainingResources'] = $this->supportedTrainingResources;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['Compressible'])) {
            $model->compressible = $map['Compressible'];
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

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['FunctionCall'])) {
            $model->functionCall = $map['FunctionCall'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtLatestVersionModified'])) {
            $model->gmtLatestVersionModified = $map['GmtLatestVersionModified'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['LatestVersionName'])) {
            $model->latestVersionName = $map['LatestVersionName'];
        }

        if (isset($map['ModelDescription'])) {
            $model->modelDescription = $map['ModelDescription'];
        }

        if (isset($map['ModelDoc'])) {
            $model->modelDoc = $map['ModelDoc'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
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

        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['ParameterSize'])) {
            $model->parameterSize = $map['ParameterSize'];
        }

        if (isset($map['SearchWords'])) {
            $model->searchWords = $map['SearchWords'];
        }

        if (isset($map['SupportedCompressionMethods'])) {
            if (!empty($map['SupportedCompressionMethods'])) {
                $model->supportedCompressionMethods = [];
                foreach ($map['SupportedCompressionMethods'] as $key1 => $value1) {
                    $model->supportedCompressionMethods[$key1] = $value1;
                }
            }
        }

        if (isset($map['SupportedCompressionResources'])) {
            $model->supportedCompressionResources = $map['SupportedCompressionResources'];
        }

        if (isset($map['SupportedDistillationMethods'])) {
            if (!empty($map['SupportedDistillationMethods'])) {
                $model->supportedDistillationMethods = [];
                foreach ($map['SupportedDistillationMethods'] as $key1 => $value1) {
                    $model->supportedDistillationMethods[$key1] = $value1;
                }
            }
        }

        if (isset($map['SupportedDistillationResources'])) {
            $model->supportedDistillationResources = $map['SupportedDistillationResources'];
        }

        if (isset($map['SupportedEvaluationMethods'])) {
            if (!empty($map['SupportedEvaluationMethods'])) {
                $model->supportedEvaluationMethods = [];
                foreach ($map['SupportedEvaluationMethods'] as $key1 => $value1) {
                    $model->supportedEvaluationMethods[$key1] = $value1;
                }
            }
        }

        if (isset($map['SupportedEvaluationResources'])) {
            $model->supportedEvaluationResources = $map['SupportedEvaluationResources'];
        }

        if (isset($map['SupportedInferenceMethods'])) {
            if (!empty($map['SupportedInferenceMethods'])) {
                $model->supportedInferenceMethods = [];
                foreach ($map['SupportedInferenceMethods'] as $key1 => $value1) {
                    $model->supportedInferenceMethods[$key1] = $value1;
                }
            }
        }

        if (isset($map['SupportedInferenceResources'])) {
            $model->supportedInferenceResources = $map['SupportedInferenceResources'];
        }

        if (isset($map['SupportedTrainingMethods'])) {
            if (!empty($map['SupportedTrainingMethods'])) {
                $model->supportedTrainingMethods = [];
                foreach ($map['SupportedTrainingMethods'] as $key1 => $value1) {
                    $model->supportedTrainingMethods[$key1] = $value1;
                }
            }
        }

        if (isset($map['SupportedTrainingResources'])) {
            $model->supportedTrainingResources = $map['SupportedTrainingResources'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
