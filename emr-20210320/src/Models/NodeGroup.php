<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeGroup extends Model
{
    /**
     * @var string[]
     */
    public $additionalSecurityGroupIds;

    /**
     * @var CostOptimizedConfig
     */
    public $costOptimizedConfig;

    /**
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $deploymentSetStrategy;

    /**
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string
     */
    public $nodeGroupState;

    /**
     * @var string
     */
    public $nodeGroupType;

    /**
     * @var string
     */
    public $nodeResizeStrategy;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var int
     */
    public $runningNodeCount;

    /**
     * @var SpotBidPrice[]
     */
    public $spotBidPrices;

    /**
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var NodeGroupStateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var SystemDisk
     */
    public $systemDisk;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var bool
     */
    public $withPublicIp;

    /**
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
