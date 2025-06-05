<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody\commitTasks\commitPhaseInfos;

class commitTasks extends Model
{
    /**
     * @var commitPhaseInfos[]
     */
    public $commitPhaseInfos;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $taskCreationTime;

    /**
     * @var string
     */
    public $taskFinishedTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskProgress;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'commitPhaseInfos' => 'CommitPhaseInfos',
        'containerName' => 'ContainerName',
        'statusMessage' => 'StatusMessage',
        'taskCreationTime' => 'TaskCreationTime',
        'taskFinishedTime' => 'TaskFinishedTime',
        'taskId' => 'TaskId',
        'taskProgress' => 'TaskProgress',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->commitPhaseInfos)) {
            Model::validateArray($this->commitPhaseInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitPhaseInfos) {
            if (\is_array($this->commitPhaseInfos)) {
                $res['CommitPhaseInfos'] = [];
                $n1 = 0;
                foreach ($this->commitPhaseInfos as $item1) {
                    $res['CommitPhaseInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        if (null !== $this->taskCreationTime) {
            $res['TaskCreationTime'] = $this->taskCreationTime;
        }

        if (null !== $this->taskFinishedTime) {
            $res['TaskFinishedTime'] = $this->taskFinishedTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['CommitPhaseInfos'])) {
            if (!empty($map['CommitPhaseInfos'])) {
                $model->commitPhaseInfos = [];
                $n1 = 0;
                foreach ($map['CommitPhaseInfos'] as $item1) {
                    $model->commitPhaseInfos[$n1++] = commitPhaseInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        if (isset($map['TaskCreationTime'])) {
            $model->taskCreationTime = $map['TaskCreationTime'];
        }

        if (isset($map['TaskFinishedTime'])) {
            $model->taskFinishedTime = $map['TaskFinishedTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
