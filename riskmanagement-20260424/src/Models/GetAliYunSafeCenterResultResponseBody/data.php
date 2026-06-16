<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $agentStatus;

    /**
     * @var bool
     */
    public $ecsInstanceStatus;

    /**
     * @var int[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $swasInstanceStatus;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var bool
     */
    public $taskStatus;
    protected $_name = [
        'agentStatus' => 'AgentStatus',
        'ecsInstanceStatus' => 'EcsInstanceStatus',
        'instanceIds' => 'InstanceIds',
        'requestId' => 'RequestId',
        'swasInstanceStatus' => 'SwasInstanceStatus',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->ecsInstanceStatus) {
            $res['EcsInstanceStatus'] = $this->ecsInstanceStatus;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->swasInstanceStatus) {
            $res['SwasInstanceStatus'] = $this->swasInstanceStatus;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['EcsInstanceStatus'])) {
            $model->ecsInstanceStatus = $map['EcsInstanceStatus'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SwasInstanceStatus'])) {
            $model->swasInstanceStatus = $map['SwasInstanceStatus'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
