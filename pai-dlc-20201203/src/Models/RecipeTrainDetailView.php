<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RecipeTrainDetailView extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $detailId;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $inferenceImage;

    /**
     * @var mixed[]
     */
    public $inferenceParamsJson;

    /**
     * @var RecipeResourceView
     */
    public $inferenceResource;

    /**
     * @var bool
     */
    public $isDefaultDetail;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var int
     */
    public $runtimeMinutes;

    /**
     * @var int
     */
    public $saveIntervalStepsDefault;

    /**
     * @var RecipeResourceView
     */
    public $trainResource;

    /**
     * @var string
     */
    public $trainerMode;

    /**
     * @var mixed[]
     */
    public $trainingParamsJson;
    protected $_name = [
        'command' => 'Command',
        'detailId' => 'DetailId',
        'envs' => 'Envs',
        'image' => 'Image',
        'inferenceImage' => 'InferenceImage',
        'inferenceParamsJson' => 'InferenceParamsJson',
        'inferenceResource' => 'InferenceResource',
        'isDefaultDetail' => 'IsDefaultDetail',
        'model' => 'Model',
        'renderer' => 'Renderer',
        'runtimeMinutes' => 'RuntimeMinutes',
        'saveIntervalStepsDefault' => 'SaveIntervalStepsDefault',
        'trainResource' => 'TrainResource',
        'trainerMode' => 'TrainerMode',
        'trainingParamsJson' => 'TrainingParamsJson',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->inferenceParamsJson)) {
            Model::validateArray($this->inferenceParamsJson);
        }
        if (null !== $this->inferenceResource) {
            $this->inferenceResource->validate();
        }
        if (null !== $this->trainResource) {
            $this->trainResource->validate();
        }
        if (\is_array($this->trainingParamsJson)) {
            Model::validateArray($this->trainingParamsJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->detailId) {
            $res['DetailId'] = $this->detailId;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->inferenceImage) {
            $res['InferenceImage'] = $this->inferenceImage;
        }

        if (null !== $this->inferenceParamsJson) {
            if (\is_array($this->inferenceParamsJson)) {
                $res['InferenceParamsJson'] = [];
                foreach ($this->inferenceParamsJson as $key1 => $value1) {
                    $res['InferenceParamsJson'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->inferenceResource) {
            $res['InferenceResource'] = null !== $this->inferenceResource ? $this->inferenceResource->toArray($noStream) : $this->inferenceResource;
        }

        if (null !== $this->isDefaultDetail) {
            $res['IsDefaultDetail'] = $this->isDefaultDetail;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->renderer) {
            $res['Renderer'] = $this->renderer;
        }

        if (null !== $this->runtimeMinutes) {
            $res['RuntimeMinutes'] = $this->runtimeMinutes;
        }

        if (null !== $this->saveIntervalStepsDefault) {
            $res['SaveIntervalStepsDefault'] = $this->saveIntervalStepsDefault;
        }

        if (null !== $this->trainResource) {
            $res['TrainResource'] = null !== $this->trainResource ? $this->trainResource->toArray($noStream) : $this->trainResource;
        }

        if (null !== $this->trainerMode) {
            $res['TrainerMode'] = $this->trainerMode;
        }

        if (null !== $this->trainingParamsJson) {
            if (\is_array($this->trainingParamsJson)) {
                $res['TrainingParamsJson'] = [];
                foreach ($this->trainingParamsJson as $key1 => $value1) {
                    $res['TrainingParamsJson'][$key1] = $value1;
                }
            }
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['DetailId'])) {
            $model->detailId = $map['DetailId'];
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['InferenceImage'])) {
            $model->inferenceImage = $map['InferenceImage'];
        }

        if (isset($map['InferenceParamsJson'])) {
            if (!empty($map['InferenceParamsJson'])) {
                $model->inferenceParamsJson = [];
                foreach ($map['InferenceParamsJson'] as $key1 => $value1) {
                    $model->inferenceParamsJson[$key1] = $value1;
                }
            }
        }

        if (isset($map['InferenceResource'])) {
            $model->inferenceResource = RecipeResourceView::fromMap($map['InferenceResource']);
        }

        if (isset($map['IsDefaultDetail'])) {
            $model->isDefaultDetail = $map['IsDefaultDetail'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Renderer'])) {
            $model->renderer = $map['Renderer'];
        }

        if (isset($map['RuntimeMinutes'])) {
            $model->runtimeMinutes = $map['RuntimeMinutes'];
        }

        if (isset($map['SaveIntervalStepsDefault'])) {
            $model->saveIntervalStepsDefault = $map['SaveIntervalStepsDefault'];
        }

        if (isset($map['TrainResource'])) {
            $model->trainResource = RecipeResourceView::fromMap($map['TrainResource']);
        }

        if (isset($map['TrainerMode'])) {
            $model->trainerMode = $map['TrainerMode'];
        }

        if (isset($map['TrainingParamsJson'])) {
            if (!empty($map['TrainingParamsJson'])) {
                $model->trainingParamsJson = [];
                foreach ($map['TrainingParamsJson'] as $key1 => $value1) {
                    $model->trainingParamsJson[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
