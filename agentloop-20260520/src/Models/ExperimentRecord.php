<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

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
     * @var string
     */
    public $evaluationTaskId;

    /**
     * @var Evaluator[]
     */
    public $evaluators;

    /**
     * @var int
     */
    public $executedAt;

    /**
     * @var ExperimentConfig[]
     */
    public $experimentConfig;

    /**
     * @var string
     */
    public $experimentPlanId;

    /**
     * @var int
     */
    public $failedTasks;

    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string[]
     */
    public $modelNames;

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
    public $querySql;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $recordName;

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
        'evaluationTaskId' => 'evaluationTaskId',
        'evaluators' => 'evaluators',
        'executedAt' => 'executedAt',
        'experimentConfig' => 'experimentConfig',
        'experimentPlanId' => 'experimentPlanId',
        'failedTasks' => 'failedTasks',
        'input' => 'input',
        'modelNames' => 'modelNames',
        'planName' => 'planName',
        'progress' => 'progress',
        'querySql' => 'querySql',
        'recordId' => 'recordId',
        'recordName' => 'recordName',
        'selectedItemIds' => 'selectedItemIds',
        'status' => 'status',
        'totalTasks' => 'totalTasks',
    ];

    public function validate()
    {
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        if (\is_array($this->experimentConfig)) {
            Model::validateArray($this->experimentConfig);
        }
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->modelNames)) {
            Model::validateArray($this->modelNames);
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

        if (null !== $this->evaluationTaskId) {
            $res['evaluationTaskId'] = $this->evaluationTaskId;
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
            if (\is_array($this->experimentConfig)) {
                $res['experimentConfig'] = [];
                $n1 = 0;
                foreach ($this->experimentConfig as $item1) {
                    $res['experimentConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->experimentPlanId) {
            $res['experimentPlanId'] = $this->experimentPlanId;
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

        if (null !== $this->modelNames) {
            if (\is_array($this->modelNames)) {
                $res['modelNames'] = [];
                $n1 = 0;
                foreach ($this->modelNames as $item1) {
                    $res['modelNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->querySql) {
            $res['querySql'] = $this->querySql;
        }

        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        if (null !== $this->recordName) {
            $res['recordName'] = $this->recordName;
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

        if (isset($map['evaluationTaskId'])) {
            $model->evaluationTaskId = $map['evaluationTaskId'];
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
            if (!empty($map['experimentConfig'])) {
                $model->experimentConfig = [];
                $n1 = 0;
                foreach ($map['experimentConfig'] as $item1) {
                    $model->experimentConfig[$n1] = ExperimentConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['experimentPlanId'])) {
            $model->experimentPlanId = $map['experimentPlanId'];
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

        if (isset($map['modelNames'])) {
            if (!empty($map['modelNames'])) {
                $model->modelNames = [];
                $n1 = 0;
                foreach ($map['modelNames'] as $item1) {
                    $model->modelNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['querySql'])) {
            $model->querySql = $map['querySql'];
        }

        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        if (isset($map['recordName'])) {
            $model->recordName = $map['recordName'];
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
