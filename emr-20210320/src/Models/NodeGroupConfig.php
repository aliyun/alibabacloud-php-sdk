<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeGroupConfig extends Model
{
    /**
     * @description 附加安全组。除集群设置的安全组外，为节点组单独设置的附加安全组。数组元数个数N的取值范围：0~2。
     *
     * @example ["sg-hp3abbae8lb6lmb1****"]
     *
     * @var string[]
     */
    public $additionalSecurityGroupIds;

    /**
     * @var string[]
     */
    public $componentTags;

    /**
     * @description 成本优化模式配置。
     *
     * @var CostOptimizedConfig
     */
    public $costOptimizedConfig;

    /**
     * @description 数据盘。当前数据盘只支持一种磁盘类型，即数组元数个数N的取值范围：1~1。
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
     * 默认值：false。
     * @example false
     *
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @description 节点实例类型列表。数组元数个数N的取值范围：1~100。
     *
     * @example ["ecs.g6.xlarge"]
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description 节点数量。取值范围：1~1000。
     *
     * @example 3
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description 节点组名称。最大长度128个字符。集群内要求节点组名称唯一。
     *
     * @example core-1
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description 节点组类型。取值范围：
     * This parameter is required.
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @description 节点扩容策略。取值范围：
     * 默认值：PRIORITY。
     * @example PRIORITY
     *
     * @var string
     */
    public $nodeResizeStrategy;

    /**
     * @description 节点组付费类型。不传入时默认和集群付费类型一致。取值范围：
     * 默认值：PayAsYouGo。
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 抢占式Spot实例出价价格。参数SpotStrategy取值为SpotWithPriceLimit时生效。数组元数个数N的取值范围：0~100。
     *
     * @var SpotBidPrice[]
     */
    public $spotBidPrices;

    /**
     * @description 开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值范围：
     * 默认值：false。
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description 抢占式Spot实例策略。取值范围：
     * 默认值：NoSpot。
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description 节点组预付费配置。不传入时默认和集群预付费配置一致。
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description 系统盘。
     *
     * @var SystemDisk
     */
    public $systemDisk;

    /**
     * @description 虚拟机交换机ID列表。数组元数个数N的取值范围：1~20。
     *
     * @example ["vsw-hp35g7ya5ymw68mmg****"]
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description 是否开公网IP。取值范围：
     * 默认值：false。
     * @example false
     *
     * @var bool
     */
    public $withPublicIp;
    protected $_name = [
        'additionalSecurityGroupIds' => 'AdditionalSecurityGroupIds',
        'componentTags'              => 'ComponentTags',
        'costOptimizedConfig'        => 'CostOptimizedConfig',
        'dataDisks'                  => 'DataDisks',
        'deploymentSetStrategy'      => 'DeploymentSetStrategy',
        'gracefulShutdown'           => 'GracefulShutdown',
        'instanceTypes'              => 'InstanceTypes',
        'nodeCount'                  => 'NodeCount',
        'nodeGroupName'              => 'NodeGroupName',
        'nodeGroupType'              => 'NodeGroupType',
        'nodeResizeStrategy'         => 'NodeResizeStrategy',
        'paymentType'                => 'PaymentType',
        'spotBidPrices'              => 'SpotBidPrices',
        'spotInstanceRemedy'         => 'SpotInstanceRemedy',
        'spotStrategy'               => 'SpotStrategy',
        'subscriptionConfig'         => 'SubscriptionConfig',
        'systemDisk'                 => 'SystemDisk',
        'vSwitchIds'                 => 'VSwitchIds',
        'withPublicIp'               => 'WithPublicIp',
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
        if (null !== $this->componentTags) {
            $res['ComponentTags'] = $this->componentTags;
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
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
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
        if (null !== $this->subscriptionConfig) {
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalSecurityGroupIds'])) {
            if (!empty($map['AdditionalSecurityGroupIds'])) {
                $model->additionalSecurityGroupIds = $map['AdditionalSecurityGroupIds'];
            }
        }
        if (isset($map['ComponentTags'])) {
            if (!empty($map['ComponentTags'])) {
                $model->componentTags = $map['ComponentTags'];
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
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
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
        if (isset($map['SubscriptionConfig'])) {
            $model->subscriptionConfig = SubscriptionConfig::fromMap($map['SubscriptionConfig']);
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

        return $model;
    }
}
