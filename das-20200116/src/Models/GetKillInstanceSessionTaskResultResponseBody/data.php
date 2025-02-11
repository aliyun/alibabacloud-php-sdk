<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponseBody\data\result;

class data extends Model
{
    /**
     * @var int
     */
    public $ignoredUserSessionCount;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $killFailCount;
    /**
     * @var int
     */
    public $killSuccessCount;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var result[]
     */
    public $result;
    /**
     * @var int[]
     */
    public $sessions;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskState;
    /**
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
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1            = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1              = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1            = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1              = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1++] = $item1;
                }
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
