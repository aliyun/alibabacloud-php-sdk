<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\configSnapshot;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\error;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\generatedModels;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeBaseBuildTaskInstanceResponseBody\data\inputSnapshot;

class data extends Model
{
    /**
     * @var configSnapshot
     */
    public $configSnapshot;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentStage;

    /**
     * @var error
     */
    public $error;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var generatedModels[]
     */
    public $generatedModels;

    /**
     * @var inputSnapshot
     */
    public $inputSnapshot;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var int
     */
    public $startedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'configSnapshot' => 'ConfigSnapshot',
        'createTime' => 'CreateTime',
        'currentStage' => 'CurrentStage',
        'error' => 'Error',
        'finishedTime' => 'FinishedTime',
        'generatedModels' => 'GeneratedModels',
        'inputSnapshot' => 'InputSnapshot',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'startedTime' => 'StartedTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskInstanceId' => 'TaskInstanceId',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        if (null !== $this->configSnapshot) {
            $this->configSnapshot->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (\is_array($this->generatedModels)) {
            Model::validateArray($this->generatedModels);
        }
        if (null !== $this->inputSnapshot) {
            $this->inputSnapshot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSnapshot) {
            $res['ConfigSnapshot'] = null !== $this->configSnapshot ? $this->configSnapshot->toArray($noStream) : $this->configSnapshot;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->currentStage) {
            $res['CurrentStage'] = $this->currentStage;
        }

        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->generatedModels) {
            if (\is_array($this->generatedModels)) {
                $res['GeneratedModels'] = [];
                $n1 = 0;
                foreach ($this->generatedModels as $item1) {
                    $res['GeneratedModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputSnapshot) {
            $res['InputSnapshot'] = null !== $this->inputSnapshot ? $this->inputSnapshot->toArray($noStream) : $this->inputSnapshot;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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
        if (isset($map['ConfigSnapshot'])) {
            $model->configSnapshot = configSnapshot::fromMap($map['ConfigSnapshot']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CurrentStage'])) {
            $model->currentStage = $map['CurrentStage'];
        }

        if (isset($map['Error'])) {
            $model->error = error::fromMap($map['Error']);
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['GeneratedModels'])) {
            if (!empty($map['GeneratedModels'])) {
                $model->generatedModels = [];
                $n1 = 0;
                foreach ($map['GeneratedModels'] as $item1) {
                    $model->generatedModels[$n1] = generatedModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InputSnapshot'])) {
            $model->inputSnapshot = inputSnapshot::fromMap($map['InputSnapshot']);
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
