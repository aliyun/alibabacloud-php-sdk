<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetQueueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;

class queue extends Model
{
    /**
     * @var string
     */
    public $allocationStrategy;

    /**
     * @var NodeTemplate[]
     */
    public $computeNodes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @var int
     */
    public $initialCount;

    /**
     * @var string
     */
    public $interConnect;

    /**
     * @var string[]
     */
    public $keepAliveNodes;

    /**
     * @var int
     */
    public $maxCount;

    /**
     * @var int
     */
    public $maxCountPerCycle;

    /**
     * @var int
     */
    public $minCount;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $reservedNodePoolId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'allocationStrategy' => 'AllocationStrategy',
        'computeNodes' => 'ComputeNodes',
        'createTime' => 'CreateTime',
        'enableScaleIn' => 'EnableScaleIn',
        'enableScaleOut' => 'EnableScaleOut',
        'hostnamePrefix' => 'HostnamePrefix',
        'hostnameSuffix' => 'HostnameSuffix',
        'initialCount' => 'InitialCount',
        'interConnect' => 'InterConnect',
        'keepAliveNodes' => 'KeepAliveNodes',
        'maxCount' => 'MaxCount',
        'maxCountPerCycle' => 'MaxCountPerCycle',
        'minCount' => 'MinCount',
        'queueName' => 'QueueName',
        'ramRole' => 'RamRole',
        'reservedNodePoolId' => 'ReservedNodePoolId',
        'updateTime' => 'UpdateTime',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->computeNodes)) {
            Model::validateArray($this->computeNodes);
        }
        if (\is_array($this->keepAliveNodes)) {
            Model::validateArray($this->keepAliveNodes);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }

        if (null !== $this->computeNodes) {
            if (\is_array($this->computeNodes)) {
                $res['ComputeNodes'] = [];
                $n1 = 0;
                foreach ($this->computeNodes as $item1) {
                    $res['ComputeNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enableScaleIn) {
            $res['EnableScaleIn'] = $this->enableScaleIn;
        }

        if (null !== $this->enableScaleOut) {
            $res['EnableScaleOut'] = $this->enableScaleOut;
        }

        if (null !== $this->hostnamePrefix) {
            $res['HostnamePrefix'] = $this->hostnamePrefix;
        }

        if (null !== $this->hostnameSuffix) {
            $res['HostnameSuffix'] = $this->hostnameSuffix;
        }

        if (null !== $this->initialCount) {
            $res['InitialCount'] = $this->initialCount;
        }

        if (null !== $this->interConnect) {
            $res['InterConnect'] = $this->interConnect;
        }

        if (null !== $this->keepAliveNodes) {
            if (\is_array($this->keepAliveNodes)) {
                $res['KeepAliveNodes'] = [];
                $n1 = 0;
                foreach ($this->keepAliveNodes as $item1) {
                    $res['KeepAliveNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        if (null !== $this->maxCountPerCycle) {
            $res['MaxCountPerCycle'] = $this->maxCountPerCycle;
        }

        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }

        if (null !== $this->reservedNodePoolId) {
            $res['ReservedNodePoolId'] = $this->reservedNodePoolId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }

        if (isset($map['ComputeNodes'])) {
            if (!empty($map['ComputeNodes'])) {
                $model->computeNodes = [];
                $n1 = 0;
                foreach ($map['ComputeNodes'] as $item1) {
                    $model->computeNodes[$n1] = NodeTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnableScaleIn'])) {
            $model->enableScaleIn = $map['EnableScaleIn'];
        }

        if (isset($map['EnableScaleOut'])) {
            $model->enableScaleOut = $map['EnableScaleOut'];
        }

        if (isset($map['HostnamePrefix'])) {
            $model->hostnamePrefix = $map['HostnamePrefix'];
        }

        if (isset($map['HostnameSuffix'])) {
            $model->hostnameSuffix = $map['HostnameSuffix'];
        }

        if (isset($map['InitialCount'])) {
            $model->initialCount = $map['InitialCount'];
        }

        if (isset($map['InterConnect'])) {
            $model->interConnect = $map['InterConnect'];
        }

        if (isset($map['KeepAliveNodes'])) {
            if (!empty($map['KeepAliveNodes'])) {
                $model->keepAliveNodes = [];
                $n1 = 0;
                foreach ($map['KeepAliveNodes'] as $item1) {
                    $model->keepAliveNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        if (isset($map['MaxCountPerCycle'])) {
            $model->maxCountPerCycle = $map['MaxCountPerCycle'];
        }

        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }

        if (isset($map['ReservedNodePoolId'])) {
            $model->reservedNodePoolId = $map['ReservedNodePoolId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
