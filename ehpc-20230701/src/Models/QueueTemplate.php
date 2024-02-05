<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\Tea\Model;

class QueueTemplate extends Model
{
    /**
     * @example PriorityInstanceType
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @var NodeTemplate[]
     */
    public $computeNodes;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @example compute
     *
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @example 0
     *
     * @var int
     */
    public $initialCount;

    /**
     * @example erdma
     *
     * @var string
     */
    public $interConnect;

    /**
     * @var string[]
     */
    public $keepAliveNodes;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxCount;

    /**
     * @example 99
     *
     * @var int
     */
    public $maxCountPerCycle;

    /**
     * @example 0
     *
     * @var int
     */
    public $minCount;

    /**
     * @example comp
     *
     * @var string
     */
    public $name;

    /**
     * @example AliyunECSInstanceForEHPCRole
     *
     * @var string
     */
    public $ramRole;

    /**
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
        'name'               => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return QueueTemplate
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
