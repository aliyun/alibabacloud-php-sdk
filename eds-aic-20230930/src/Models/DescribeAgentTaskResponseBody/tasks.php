<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAgentTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAgentTaskResponseBody\tasks\artifacts;

class tasks extends Model
{
    /**
     * @var int
     */
    public $artifactCount;

    /**
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $digestSource;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $runningAt;

    /**
     * @var string
     */
    public $steps;

    /**
     * @var string
     */
    public $taskDigest;

    /**
     * @var string
     */
    public $taskDuration;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'artifactCount' => 'ArtifactCount',
        'artifacts' => 'Artifacts',
        'currentStatus' => 'CurrentStatus',
        'digestSource' => 'DigestSource',
        'instanceId' => 'InstanceId',
        'reason' => 'Reason',
        'runningAt' => 'RunningAt',
        'steps' => 'Steps',
        'taskDigest' => 'TaskDigest',
        'taskDuration' => 'TaskDuration',
        'taskId' => 'TaskId',
        'taskResult' => 'TaskResult',
        'userPrompt' => 'UserPrompt',
    ];

    public function validate()
    {
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactCount) {
            $res['ArtifactCount'] = $this->artifactCount;
        }

        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['Artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['Artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }

        if (null !== $this->digestSource) {
            $res['DigestSource'] = $this->digestSource;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->runningAt) {
            $res['RunningAt'] = $this->runningAt;
        }

        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
        }

        if (null !== $this->taskDigest) {
            $res['TaskDigest'] = $this->taskDigest;
        }

        if (null !== $this->taskDuration) {
            $res['TaskDuration'] = $this->taskDuration;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['ArtifactCount'])) {
            $model->artifactCount = $map['ArtifactCount'];
        }

        if (isset($map['Artifacts'])) {
            if (!empty($map['Artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['Artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }

        if (isset($map['DigestSource'])) {
            $model->digestSource = $map['DigestSource'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RunningAt'])) {
            $model->runningAt = $map['RunningAt'];
        }

        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }

        if (isset($map['TaskDigest'])) {
            $model->taskDigest = $map['TaskDigest'];
        }

        if (isset($map['TaskDuration'])) {
            $model->taskDuration = $map['TaskDuration'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
