<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskDetailResponseBody\data\callTimes;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string[]
     */
    public $callDays;

    /**
     * @var callTimes[]
     */
    public $callTimes;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var int
     */
    public $concurrentCount;

    /**
     * @var int
     */
    public $realStartTime;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var bool
     */
    public $retryEnable;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string[]
     */
    public $retryReasons;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $startType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'callDays' => 'CallDays',
        'callTimes' => 'CallTimes',
        'callerNumber' => 'CallerNumber',
        'concurrentCount' => 'ConcurrentCount',
        'realStartTime' => 'RealStartTime',
        'retryCount' => 'RetryCount',
        'retryEnable' => 'RetryEnable',
        'retryInterval' => 'RetryInterval',
        'retryReasons' => 'RetryReasons',
        'startTime' => 'StartTime',
        'startType' => 'StartType',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->callDays)) {
            Model::validateArray($this->callDays);
        }
        if (\is_array($this->callTimes)) {
            Model::validateArray($this->callTimes);
        }
        if (\is_array($this->retryReasons)) {
            Model::validateArray($this->retryReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->callDays) {
            if (\is_array($this->callDays)) {
                $res['CallDays'] = [];
                $n1 = 0;
                foreach ($this->callDays as $item1) {
                    $res['CallDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callTimes) {
            if (\is_array($this->callTimes)) {
                $res['CallTimes'] = [];
                $n1 = 0;
                foreach ($this->callTimes as $item1) {
                    $res['CallTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->concurrentCount) {
            $res['ConcurrentCount'] = $this->concurrentCount;
        }

        if (null !== $this->realStartTime) {
            $res['RealStartTime'] = $this->realStartTime;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->retryEnable) {
            $res['RetryEnable'] = $this->retryEnable;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->retryReasons) {
            if (\is_array($this->retryReasons)) {
                $res['RetryReasons'] = [];
                $n1 = 0;
                foreach ($this->retryReasons as $item1) {
                    $res['RetryReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['CallDays'])) {
            if (!empty($map['CallDays'])) {
                $model->callDays = [];
                $n1 = 0;
                foreach ($map['CallDays'] as $item1) {
                    $model->callDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CallTimes'])) {
            if (!empty($map['CallTimes'])) {
                $model->callTimes = [];
                $n1 = 0;
                foreach ($map['CallTimes'] as $item1) {
                    $model->callTimes[$n1] = callTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['ConcurrentCount'])) {
            $model->concurrentCount = $map['ConcurrentCount'];
        }

        if (isset($map['RealStartTime'])) {
            $model->realStartTime = $map['RealStartTime'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['RetryEnable'])) {
            $model->retryEnable = $map['RetryEnable'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['RetryReasons'])) {
            if (!empty($map['RetryReasons'])) {
                $model->retryReasons = [];
                $n1 = 0;
                foreach ($map['RetryReasons'] as $item1) {
                    $model->retryReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
