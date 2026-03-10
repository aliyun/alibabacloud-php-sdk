<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ExperimentRecord extends Model
{
    /**
     * @var int
     */
    public $completedAt;

    /**
     * @var int
     */
    public $completedTasks;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetProject;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var Evaluator[]
     */
    public $evaluators;

    /**
     * @var int
     */
    public $executedAt;

    /**
     * @var ExperimentConfig
     */
    public $experimentConfig;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var int
     */
    public $failedTasks;

    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string[]
     */
    public $selectedItemIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalTasks;
    protected $_name = [
        'completedAt' => 'completedAt',
        'completedTasks' => 'completedTasks',
        'dataSourceType' => 'dataSourceType',
        'datasetId' => 'datasetId',
        'datasetProject' => 'datasetProject',
        'errorMessage' => 'errorMessage',
        'evaluators' => 'evaluators',
        'executedAt' => 'executedAt',
        'experimentConfig' => 'experimentConfig',
        'experimentName' => 'experimentName',
        'failedTasks' => 'failedTasks',
        'input' => 'input',
        'modelName' => 'modelName',
        'planId' => 'planId',
        'planName' => 'planName',
        'progress' => 'progress',
        'recordId' => 'recordId',
        'selectedItemIds' => 'selectedItemIds',
        'status' => 'status',
        'totalTasks' => 'totalTasks',
    ];

    public function validate()
    {
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        if (null !== $this->experimentConfig) {
            $this->experimentConfig->validate();
        }
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->selectedItemIds)) {
            Model::validateArray($this->selectedItemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->completedTasks) {
            $res['completedTasks'] = $this->completedTasks;
        }

        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetProject) {
            $res['datasetProject'] = $this->datasetProject;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->evaluators) {
            if (\is_array($this->evaluators)) {
                $res['evaluators'] = [];
                $n1 = 0;
                foreach ($this->evaluators as $item1) {
                    $res['evaluators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executedAt) {
            $res['executedAt'] = $this->executedAt;
        }

        if (null !== $this->experimentConfig) {
            $res['experimentConfig'] = null !== $this->experimentConfig ? $this->experimentConfig->toArray($noStream) : $this->experimentConfig;
        }

        if (null !== $this->experimentName) {
            $res['experimentName'] = $this->experimentName;
        }

        if (null !== $this->failedTasks) {
            $res['failedTasks'] = $this->failedTasks;
        }

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                foreach ($this->input as $key1 => $value1) {
                    $res['input'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        if (null !== $this->selectedItemIds) {
            if (\is_array($this->selectedItemIds)) {
                $res['selectedItemIds'] = [];
                $n1 = 0;
                foreach ($this->selectedItemIds as $item1) {
                    $res['selectedItemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalTasks) {
            $res['totalTasks'] = $this->totalTasks;
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
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['completedTasks'])) {
            $model->completedTasks = $map['completedTasks'];
        }

        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        if (isset($map['datasetProject'])) {
            $model->datasetProject = $map['datasetProject'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['evaluators'])) {
            if (!empty($map['evaluators'])) {
                $model->evaluators = [];
                $n1 = 0;
                foreach ($map['evaluators'] as $item1) {
                    $model->evaluators[$n1] = Evaluator::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['executedAt'])) {
            $model->executedAt = $map['executedAt'];
        }

        if (isset($map['experimentConfig'])) {
            $model->experimentConfig = ExperimentConfig::fromMap($map['experimentConfig']);
        }

        if (isset($map['experimentName'])) {
            $model->experimentName = $map['experimentName'];
        }

        if (isset($map['failedTasks'])) {
            $model->failedTasks = $map['failedTasks'];
        }

        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                foreach ($map['input'] as $key1 => $value1) {
                    $model->input[$key1] = $value1;
                }
            }
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        if (isset($map['selectedItemIds'])) {
            if (!empty($map['selectedItemIds'])) {
                $model->selectedItemIds = [];
                $n1 = 0;
                foreach ($map['selectedItemIds'] as $item1) {
                    $model->selectedItemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalTasks'])) {
            $model->totalTasks = $map['totalTasks'];
        }

        return $model;
    }
}
