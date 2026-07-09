<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationRunResponseBody\evaluatorProgress;

class GetEvaluationRunResponseBody extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $dataEndTime;

    /**
     * @var int
     */
    public $dataStartTime;

    /**
     * @var evaluatorProgress[]
     */
    public $evaluatorProgress;

    /**
     * @var string
     */
    public $evaluators;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $runName;

    /**
     * @var string
     */
    public $runType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'dataEndTime' => 'dataEndTime',
        'dataStartTime' => 'dataStartTime',
        'evaluatorProgress' => 'evaluatorProgress',
        'evaluators' => 'evaluators',
        'failedCount' => 'failedCount',
        'requestId' => 'requestId',
        'runId' => 'runId',
        'runName' => 'runName',
        'runType' => 'runType',
        'status' => 'status',
        'successCount' => 'successCount',
        'taskId' => 'taskId',
        'totalCount' => 'totalCount',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->evaluatorProgress)) {
            Model::validateArray($this->evaluatorProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->dataEndTime) {
            $res['dataEndTime'] = $this->dataEndTime;
        }

        if (null !== $this->dataStartTime) {
            $res['dataStartTime'] = $this->dataStartTime;
        }

        if (null !== $this->evaluatorProgress) {
            if (\is_array($this->evaluatorProgress)) {
                $res['evaluatorProgress'] = [];
                $n1 = 0;
                foreach ($this->evaluatorProgress as $item1) {
                    $res['evaluatorProgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evaluators) {
            $res['evaluators'] = $this->evaluators;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->runName) {
            $res['runName'] = $this->runName;
        }

        if (null !== $this->runType) {
            $res['runType'] = $this->runType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['dataEndTime'])) {
            $model->dataEndTime = $map['dataEndTime'];
        }

        if (isset($map['dataStartTime'])) {
            $model->dataStartTime = $map['dataStartTime'];
        }

        if (isset($map['evaluatorProgress'])) {
            if (!empty($map['evaluatorProgress'])) {
                $model->evaluatorProgress = [];
                $n1 = 0;
                foreach ($map['evaluatorProgress'] as $item1) {
                    $model->evaluatorProgress[$n1] = evaluatorProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['evaluators'])) {
            $model->evaluators = $map['evaluators'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['runName'])) {
            $model->runName = $map['runName'];
        }

        if (isset($map['runType'])) {
            $model->runType = $map['runType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
