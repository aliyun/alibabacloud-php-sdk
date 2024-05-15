<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of ignored sessions, including sessions of the accounts that are specified by IgnoredUsers, sessions of internal O\\&M accounts of Alibaba Cloud, and **Binlog Dump** sessions.
     *
     * @example 9
     *
     * @var int
     */
    public $ignoredUserSessionCount;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of sessions that failed to be terminated.
     *
     * @example 0
     *
     * @var int
     */
    public $killFailCount;

    /**
     * @description The number of sessions that were terminated.
     *
     * @example 100
     *
     * @var int
     */
    public $killSuccessCount;

    /**
     * @description The node ID.
     *
     * >  This parameter is returned only if the instance is a PolarDB for MySQL cluster.
     * @example pi-bp1h12rv501cv****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The details of the task that terminated sessions.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The session IDs.
     *
     * >  If all sessions are terminated, the IDs of all sessions on the instance or node are returned.
     * @var int[]
     */
    public $sessions;

    /**
     * @description The task ID.
     *
     * @example f77d535b45405bd462b21caa3ee8****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The state of the task that terminates sessions.
     *
     *   **RUNNING**: The task is in progress.
     *   **SUCCESS**: The task is successful.
     *   **FAILURE**: The task failed.
     *   **ERROR**: Other errors occur.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 164882191396****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'ignoredUserSessionCount' => 'IgnoredUserSessionCount',
        'instanceId'              => 'InstanceId',
        'killFailCount'           => 'KillFailCount',
        'killSuccessCount'        => 'KillSuccessCount',
        'nodeId'                  => 'NodeId',
        'result'                  => 'Result',
        'sessions'                => 'Sessions',
        'taskId'                  => 'TaskId',
        'taskState'               => 'TaskState',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoredUserSessionCount) {
            $res['IgnoredUserSessionCount'] = $this->ignoredUserSessionCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->killFailCount) {
            $res['KillFailCount'] = $this->killFailCount;
        }
        if (null !== $this->killSuccessCount) {
            $res['KillSuccessCount'] = $this->killSuccessCount;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = $this->sessions;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoredUserSessionCount'])) {
            $model->ignoredUserSessionCount = $map['IgnoredUserSessionCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KillFailCount'])) {
            $model->killFailCount = $map['KillFailCount'];
        }
        if (isset($map['KillSuccessCount'])) {
            $model->killSuccessCount = $map['KillSuccessCount'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = $map['Sessions'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
