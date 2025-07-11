<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class NodeGroup extends Model
{
    /**
     * @var string[]
     */
    public $additionalSecurityGroupIds;

    /**
     * @var bool
     */
    public $compensateWithOnDemand;

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
     * @var PrivatePoolOptions
     */
    public $privatePoolOptions;

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
     * @var string
     */
    public $status;

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
        'compensateWithOnDemand' => 'CompensateWithOnDemand',
        'costOptimizedConfig' => 'CostOptimizedConfig',
        'dataDisks' => 'DataDisks',
        'deploymentSetStrategy' => 'DeploymentSetStrategy',
        'gracefulShutdown' => 'GracefulShutdown',
        'instanceTypes' => 'InstanceTypes',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'nodeGroupState' => 'NodeGroupState',
        'nodeGroupType' => 'NodeGroupType',
        'nodeResizeStrategy' => 'NodeResizeStrategy',
        'paymentType' => 'PaymentType',
        'privatePoolOptions' => 'PrivatePoolOptions',
        'runningNodeCount' => 'RunningNodeCount',
        'spotBidPrices' => 'SpotBidPrices',
        'spotInstanceRemedy' => 'SpotInstanceRemedy',
        'spotStrategy' => 'SpotStrategy',
        'stateChangeReason' => 'StateChangeReason',
        'status' => 'Status',
        'systemDisk' => 'SystemDisk',
        'vSwitchIds' => 'VSwitchIds',
        'withPublicIp' => 'WithPublicIp',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalSecurityGroupIds)) {
            Model::validateArray($this->additionalSecurityGroupIds);
        }
        if (null !== $this->costOptimizedConfig) {
            $this->costOptimizedConfig->validate();
        }
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (null !== $this->privatePoolOptions) {
            $this->privatePoolOptions->validate();
        }
        if (\is_array($this->spotBidPrices)) {
            Model::validateArray($this->spotBidPrices);
        }
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalSecurityGroupIds) {
            if (\is_array($this->additionalSecurityGroupIds)) {
                $res['AdditionalSecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->additionalSecurityGroupIds as $item1) {
                    $res['AdditionalSecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }

        if (null !== $this->costOptimizedConfig) {
            $res['CostOptimizedConfig'] = null !== $this->costOptimizedConfig ? $this->costOptimizedConfig->toArray($noStream) : $this->costOptimizedConfig;
        }

        if (null !== $this->dataDisks) {
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1 = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
        }

        if (null !== $this->runningNodeCount) {
            $res['RunningNodeCount'] = $this->runningNodeCount;
        }

        if (null !== $this->spotBidPrices) {
            if (\is_array($this->spotBidPrices)) {
                $res['SpotBidPrices'] = [];
                $n1 = 0;
                foreach ($this->spotBidPrices as $item1) {
                    $res['SpotBidPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
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

        if (null !== $this->withPublicIp) {
            $res['WithPublicIp'] = $this->withPublicIp;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AdditionalSecurityGroupIds'])) {
            if (!empty($map['AdditionalSecurityGroupIds'])) {
                $model->additionalSecurityGroupIds = [];
                $n1 = 0;
                foreach ($map['AdditionalSecurityGroupIds'] as $item1) {
                    $model->additionalSecurityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }

        if (isset($map['CostOptimizedConfig'])) {
            $model->costOptimizedConfig = CostOptimizedConfig::fromMap($map['CostOptimizedConfig']);
        }

        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n1 = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1] = DataDisk::fromMap($item1);
                    ++$n1;
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
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = PrivatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }

        if (isset($map['RunningNodeCount'])) {
            $model->runningNodeCount = $map['RunningNodeCount'];
        }

        if (isset($map['SpotBidPrices'])) {
            if (!empty($map['SpotBidPrices'])) {
                $model->spotBidPrices = [];
                $n1 = 0;
                foreach ($map['SpotBidPrices'] as $item1) {
                    $model->spotBidPrices[$n1] = SpotBidPrice::fromMap($item1);
                    ++$n1;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = SystemDisk::fromMap($map['SystemDisk']);
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

        if (isset($map['WithPublicIp'])) {
            $model->withPublicIp = $map['WithPublicIp'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
