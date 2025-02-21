<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class NodeGroupConfig extends Model
{
    /**
     * @var string[]
     */
    public $additionalSecurityGroupIds;
    /**
     * @var AutoScalingPolicy
     */
    public $autoScalingPolicy;
    /**
     * @var string[]
     */
    public $componentTags;
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
     * @var int
     */
    public $nodeCount;
    /**
     * @var string
     */
    public $nodeGroupName;
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
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;
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
    protected $_name = [
        'additionalSecurityGroupIds' => 'AdditionalSecurityGroupIds',
        'autoScalingPolicy'          => 'AutoScalingPolicy',
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
        'privatePoolOptions'         => 'PrivatePoolOptions',
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
        if (\is_array($this->additionalSecurityGroupIds)) {
            Model::validateArray($this->additionalSecurityGroupIds);
        }
        if (null !== $this->autoScalingPolicy) {
            $this->autoScalingPolicy->validate();
        }
        if (\is_array($this->componentTags)) {
            Model::validateArray($this->componentTags);
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
        if (null !== $this->subscriptionConfig) {
            $this->subscriptionConfig->validate();
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
                $n1                                = 0;
                foreach ($this->additionalSecurityGroupIds as $item1) {
                    $res['AdditionalSecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->autoScalingPolicy) {
            $res['AutoScalingPolicy'] = null !== $this->autoScalingPolicy ? $this->autoScalingPolicy->toArray($noStream) : $this->autoScalingPolicy;
        }

        if (null !== $this->componentTags) {
            if (\is_array($this->componentTags)) {
                $res['ComponentTags'] = [];
                $n1                   = 0;
                foreach ($this->componentTags as $item1) {
                    $res['ComponentTags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->costOptimizedConfig) {
            $res['CostOptimizedConfig'] = null !== $this->costOptimizedConfig ? $this->costOptimizedConfig->toArray($noStream) : $this->costOptimizedConfig;
        }

        if (null !== $this->dataDisks) {
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1               = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                   = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
        }

        if (null !== $this->spotBidPrices) {
            if (\is_array($this->spotBidPrices)) {
                $res['SpotBidPrices'] = [];
                $n1                   = 0;
                foreach ($this->spotBidPrices as $item1) {
                    $res['SpotBidPrices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toArray($noStream) : $this->subscriptionConfig;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->withPublicIp) {
            $res['WithPublicIp'] = $this->withPublicIp;
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
                $n1                                = 0;
                foreach ($map['AdditionalSecurityGroupIds'] as $item1) {
                    $model->additionalSecurityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AutoScalingPolicy'])) {
            $model->autoScalingPolicy = AutoScalingPolicy::fromMap($map['AutoScalingPolicy']);
        }

        if (isset($map['ComponentTags'])) {
            if (!empty($map['ComponentTags'])) {
                $model->componentTags = [];
                $n1                   = 0;
                foreach ($map['ComponentTags'] as $item1) {
                    $model->componentTags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CostOptimizedConfig'])) {
            $model->costOptimizedConfig = CostOptimizedConfig::fromMap($map['CostOptimizedConfig']);
        }

        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n1               = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1++] = DataDisk::fromMap($item1);
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
                $n1                   = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1++] = $item1;
                }
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

        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = PrivatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }

        if (isset($map['SpotBidPrices'])) {
            if (!empty($map['SpotBidPrices'])) {
                $model->spotBidPrices = [];
                $n1                   = 0;
                foreach ($map['SpotBidPrices'] as $item1) {
                    $model->spotBidPrices[$n1++] = SpotBidPrice::fromMap($item1);
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
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WithPublicIp'])) {
            $model->withPublicIp = $map['WithPublicIp'];
        }

        return $model;
    }
}
