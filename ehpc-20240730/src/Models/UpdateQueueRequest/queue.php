<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateQueueRequest;

use AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;
use AlibabaCloud\Tea\Model;

class queue extends Model
{
    /**
     * @description The policy based on which instance types are selected for compute nodes during auto scale-outs. Valid values:
     *
     *   PriorityInstanceType
     *
     * @example PriorityInstanceType
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @description The hardware configurations of the compute nodes in the queue. Valid values of N: 1 to 10.
     *
     * @var NodeTemplate[]
     */
    public $computeNodes;

    /**
     * @description Specifies whether to enable auto scale-in for the queue. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @description Specifies whether to enable auto scale-out for the queue. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @description The hostname prefix of the compute nodes in the queue.
     *
     * @example compute
     *
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @description The hostname suffix of the compute nodes in the queue.
     *
     * @example hpc
     *
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @description The initial number of compute nodes in the queue.
     *
     * @example 0
     *
     * @var int
     */
    public $initialCount;

    /**
     * @description The type of the network for interconnecting compute nodes in the queue.
     *
     * @example erdma
     *
     * @var string
     */
    public $interConnect;

    /**
     * @description The nodes for which deletion protection is enabled in the queue.
     *
     * @var string[]
     */
    public $keepAliveNodes;

    /**
     * @description The maximum number of compute nodes that the queue can contain.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxCount;

    /**
     * @description The minimum number of compute nodes that are added to the queue during an automatic scale-out.
     *
     * @example 99
     *
     * @var int
     */
    public $maxCountPerCycle;

    /**
     * @description The minimum number of compute nodes that the queue must contain.
     *
     * @example 0
     *
     * @var int
     */
    public $minCount;

    /**
     * @description The queue name.
     *
     * This parameter is required.
     * @example comp
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The Resource Access Management (RAM) role that is assumed by compute nodes in the queue.
     *
     * @example AliyunECSInstanceForEHPCRole
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description The vSwitches available for use by compute nodes in the queue.
     *
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'allocationStrategy' => 'AllocationStrategy',
        'computeNodes'       => 'ComputeNodes',
        'enableScaleIn'      => 'EnableScaleIn',
        'enableScaleOut'     => 'EnableScaleOut',
        'hostnamePrefix'     => 'HostnamePrefix',
        'hostnameSuffix'     => 'HostnameSuffix',
        'initialCount'       => 'InitialCount',
        'interConnect'       => 'InterConnect',
        'keepAliveNodes'     => 'KeepAliveNodes',
        'maxCount'           => 'MaxCount',
        'maxCountPerCycle'   => 'MaxCountPerCycle',
        'minCount'           => 'MinCount',
        'queueName'          => 'QueueName',
        'ramRole'            => 'RamRole',
        'vSwitchIds'         => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }
        if (null !== $this->computeNodes) {
            $res['ComputeNodes'] = [];
            if (null !== $this->computeNodes && \is_array($this->computeNodes)) {
                $n = 0;
                foreach ($this->computeNodes as $item) {
                    $res['ComputeNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            $res['KeepAliveNodes'] = $this->keepAliveNodes;
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
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }
        if (isset($map['ComputeNodes'])) {
            if (!empty($map['ComputeNodes'])) {
                $model->computeNodes = [];
                $n                   = 0;
                foreach ($map['ComputeNodes'] as $item) {
                    $model->computeNodes[$n++] = null !== $item ? NodeTemplate::fromMap($item) : $item;
                }
            }
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
                $model->keepAliveNodes = $map['KeepAliveNodes'];
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
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
