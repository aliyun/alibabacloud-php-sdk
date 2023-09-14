<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeGroup extends Model
{
    /**
     * @description 安全组ID。
     *
     * @example ["sg-hp3abbae8lb6lmb1****"]
     *
     * @var string[]
     */
    public $additionalSecurityGroupIds;

    /**
     * @description 成本优化模式配置。
     *
     * @var CostOptimizedConfig
     */
    public $costOptimizedConfig;

    /**
     * @description 数据盘列表。
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @description 部署集策略。取值范围：
     * 默认值：NONE。
     * @example NONE
     *
     * @var string
     */
    public $deploymentSetStrategy;

    /**
     * @description 节点组上部署的组件是否开启优雅下线。取值范围：
     * - false：不开启优雅下线。
     * @example false
     *
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @description 实例类型列表。
     *
     * @example ["ecs.g6.4xlarge"]
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点组名称。最大长度128个字符。
     *
     * @example core-1
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description 节点组状态。
     *
     * @example CREATED
     *
     * @var string
     */
    public $nodeGroupState;

    /**
     * @description 节点组类型。取值范围：
     * - TASK：计算类型节点组。
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @description - COST_OPTIMIZED：成本优化策略。
     * - PRIORITY：优先级策略。
     * @example PRIORITY
     *
     * @var string
     */
    public $nodeResizeStrategy;

    /**
     * @description 节点组付费类型。取值范围：
     * - Subscription：预付费，包年包月。
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 存活节点数量。
     *
     * @example 3
     *
     * @var int
     */
    public $runningNodeCount;

    /**
     * @var SpotBidPrice[]
     */
    public $spotBidPrices;

    /**
     * @description 开启补齐抢占式实例后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值范围：
     * 默认值：false。
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description 是否支持竞价实例。
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description 状态变化原因。
     *
     * @var NodeGroupStateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description 系统盘信息。
     *
     * @var SystemDisk
     */
    public $systemDisk;

    /**
     * @description 虚拟机交换机ID列表。
     *
     * @example ["vsw-hp35g7ya5ymw68mmg****"]
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description 是否开公网IP。取值范围：
     * - false：不开公网。
     * @example false
     *
     * @var bool
     */
    public $withPublicIp;

    /**
     * @description 可用区ID。
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'additionalSecurityGroupIds' => 'AdditionalSecurityGroupIds',
        'costOptimizedConfig'        => 'CostOptimizedConfig',
        'dataDisks'                  => 'DataDisks',
        'deploymentSetStrategy'      => 'DeploymentSetStrategy',
        'gracefulShutdown'           => 'GracefulShutdown',
        'instanceTypes'              => 'InstanceTypes',
        'nodeGroupId'                => 'NodeGroupId',
        'nodeGroupName'              => 'NodeGroupName',
        'nodeGroupState'             => 'NodeGroupState',
        'nodeGroupType'              => 'NodeGroupType',
        'nodeResizeStrategy'         => 'NodeResizeStrategy',
        'paymentType'                => 'PaymentType',
        'runningNodeCount'           => 'RunningNodeCount',
        'spotBidPrices'              => 'SpotBidPrices',
        'spotInstanceRemedy'         => 'SpotInstanceRemedy',
        'spotStrategy'               => 'SpotStrategy',
        'stateChangeReason'          => 'StateChangeReason',
        'systemDisk'                 => 'SystemDisk',
        'vSwitchIds'                 => 'VSwitchIds',
        'withPublicIp'               => 'WithPublicIp',
        'zoneId'                     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalSecurityGroupIds) {
            $res['AdditionalSecurityGroupIds'] = $this->additionalSecurityGroupIds;
        }
        if (null !== $this->costOptimizedConfig) {
            $res['CostOptimizedConfig'] = null !== $this->costOptimizedConfig ? $this->costOptimizedConfig->toMap() : null;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deploymentSetStrategy) {
            $res['DeploymentSetStrategy'] = $this->deploymentSetStrategy;
        }
        if (null !== $this->gracefulShutdown) {
            $res['GracefulShutdown'] = $this->gracefulShutdown;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupState) {
            $res['NodeGroupState'] = $this->nodeGroupState;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->nodeResizeStrategy) {
            $res['NodeResizeStrategy'] = $this->nodeResizeStrategy;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->runningNodeCount) {
            $res['RunningNodeCount'] = $this->runningNodeCount;
        }
        if (null !== $this->spotBidPrices) {
            $res['SpotBidPrices'] = [];
            if (null !== $this->spotBidPrices && \is_array($this->spotBidPrices)) {
                $n = 0;
                foreach ($this->spotBidPrices as $item) {
                    $res['SpotBidPrices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->stateChangeReason) {
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->withPublicIp) {
            $res['WithPublicIp'] = $this->withPublicIp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalSecurityGroupIds'])) {
            if (!empty($map['AdditionalSecurityGroupIds'])) {
                $model->additionalSecurityGroupIds = $map['AdditionalSecurityGroupIds'];
            }
        }
        if (isset($map['CostOptimizedConfig'])) {
            $model->costOptimizedConfig = CostOptimizedConfig::fromMap($map['CostOptimizedConfig']);
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeploymentSetStrategy'])) {
            $model->deploymentSetStrategy = $map['DeploymentSetStrategy'];
        }
        if (isset($map['GracefulShutdown'])) {
            $model->gracefulShutdown = $map['GracefulShutdown'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupState'])) {
            $model->nodeGroupState = $map['NodeGroupState'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['NodeResizeStrategy'])) {
            $model->nodeResizeStrategy = $map['NodeResizeStrategy'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RunningNodeCount'])) {
            $model->runningNodeCount = $map['RunningNodeCount'];
        }
        if (isset($map['SpotBidPrices'])) {
            if (!empty($map['SpotBidPrices'])) {
                $model->spotBidPrices = [];
                $n                    = 0;
                foreach ($map['SpotBidPrices'] as $item) {
                    $model->spotBidPrices[$n++] = null !== $item ? SpotBidPrice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StateChangeReason'])) {
            $model->stateChangeReason = NodeGroupStateChangeReason::fromMap($map['StateChangeReason']);
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = SystemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['WithPublicIp'])) {
            $model->withPublicIp = $map['WithPublicIp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
