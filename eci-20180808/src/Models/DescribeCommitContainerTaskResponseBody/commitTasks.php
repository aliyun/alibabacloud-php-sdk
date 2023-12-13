<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody\commitTasks\commitPhaseInfos;
use AlibabaCloud\Tea\Model;

class commitTasks extends Model
{
    /**
     * @description The information about the phase that the task arrives.
     *
     * @var commitPhaseInfos[]
     */
    public $commitPhaseInfos;

    /**
     * @description The container name.
     *
     * @example worker0
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The message about the state.
     *
     * @example Commit container -xxxxxx
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The time when the task was started.
     *
     * @example 2023-03-06T08:22:40Z
     *
     * @var string
     */
    public $taskCreationTime;

    /**
     * @description The time when the task was complete.
     *
     * @example 2023-03-06T08:23:40Z
     *
     * @var string
     */
    public $taskFinishedTime;

    /**
     * @description The task ID.
     *
     * @example t-2zej6nstkg744qc3****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The progress of the task in percentage.
     *
     * @example 50%
     *
     * @var string
     */
    public $taskProgress;

    /**
     * @description The state of the task. Valid values:
     *
     *   Running
     *   Succeeded
     *   Failed
     *
     * @example Running
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'commitPhaseInfos' => 'CommitPhaseInfos',
        'containerName'    => 'ContainerName',
        'statusMessage'    => 'StatusMessage',
        'taskCreationTime' => 'TaskCreationTime',
        'taskFinishedTime' => 'TaskFinishedTime',
        'taskId'           => 'TaskId',
        'taskProgress'     => 'TaskProgress',
        'taskStatus'       => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitPhaseInfos) {
            $res['CommitPhaseInfos'] = [];
            if (null !== $this->commitPhaseInfos && \is_array($this->commitPhaseInfos)) {
                $n = 0;
                foreach ($this->commitPhaseInfos as $item) {
                    $res['CommitPhaseInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return commitTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitPhaseInfos'])) {
            if (!empty($map['CommitPhaseInfos'])) {
                $model->commitPhaseInfos = [];
                $n                       = 0;
                foreach ($map['CommitPhaseInfos'] as $item) {
                    $model->commitPhaseInfos[$n++] = null !== $item ? commitPhaseInfos::fromMap($item) : $item;
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
