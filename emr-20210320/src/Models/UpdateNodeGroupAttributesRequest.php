<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class UpdateNodeGroupAttributesRequest extends Model
{
    /**
     * @var AckConfig
     */
    public $ackConfig;

    /**
     * @var string[]
     */
    public $additionalSecurityGroupIds;

    /**
     * @var bool
     */
    public $autoCompensateState;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var CostOptimizedConfig
     */
    public $costOptimizedConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsSpotStrategy;

    /**
     * @var bool
     */
    public $enableGracefulDecommission;

    /**
     * @var string[]
     */
    public $instanceTypeList;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $nodeCount;

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
    public $nodeResizeStrategy;

    /**
     * @var string
     */
    public $regionId;

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
    public $vSwitchId;
    protected $_name = [
        'ackConfig' => 'AckConfig',
        'additionalSecurityGroupIds' => 'AdditionalSecurityGroupIds',
        'autoCompensateState' => 'AutoCompensateState',
        'clusterId' => 'ClusterId',
        'costOptimizedConfig' => 'CostOptimizedConfig',
        'description' => 'Description',
        'ecsSpotStrategy' => 'EcsSpotStrategy',
        'enableGracefulDecommission' => 'EnableGracefulDecommission',
        'instanceTypeList' => 'InstanceTypeList',
        'keyPairName' => 'KeyPairName',
        'maxSize' => 'MaxSize',
        'minSize' => 'MinSize',
        'nodeCount' => 'NodeCount',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'nodeResizeStrategy' => 'NodeResizeStrategy',
        'regionId' => 'RegionId',
        'spotBidPrices' => 'SpotBidPrices',
        'spotInstanceRemedy' => 'SpotInstanceRemedy',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->ackConfig) {
            $this->ackConfig->validate();
        }
        if (\is_array($this->additionalSecurityGroupIds)) {
            Model::validateArray($this->additionalSecurityGroupIds);
        }
        if (null !== $this->costOptimizedConfig) {
            $this->costOptimizedConfig->validate();
        }
        if (\is_array($this->instanceTypeList)) {
            Model::validateArray($this->instanceTypeList);
        }
        if (\is_array($this->spotBidPrices)) {
            Model::validateArray($this->spotBidPrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackConfig) {
            $res['AckConfig'] = null !== $this->ackConfig ? $this->ackConfig->toArray($noStream) : $this->ackConfig;
        }

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

        if (null !== $this->autoCompensateState) {
            $res['AutoCompensateState'] = $this->autoCompensateState;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->costOptimizedConfig) {
            $res['CostOptimizedConfig'] = null !== $this->costOptimizedConfig ? $this->costOptimizedConfig->toArray($noStream) : $this->costOptimizedConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsSpotStrategy) {
            $res['EcsSpotStrategy'] = $this->ecsSpotStrategy;
        }

        if (null !== $this->enableGracefulDecommission) {
            $res['EnableGracefulDecommission'] = $this->enableGracefulDecommission;
        }

        if (null !== $this->instanceTypeList) {
            if (\is_array($this->instanceTypeList)) {
                $res['InstanceTypeList'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeList as $item1) {
                    $res['InstanceTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }

        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->nodeResizeStrategy) {
            $res['NodeResizeStrategy'] = $this->nodeResizeStrategy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AckConfig'])) {
            $model->ackConfig = AckConfig::fromMap($map['AckConfig']);
        }

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

        if (isset($map['AutoCompensateState'])) {
            $model->autoCompensateState = $map['AutoCompensateState'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CostOptimizedConfig'])) {
            $model->costOptimizedConfig = CostOptimizedConfig::fromMap($map['CostOptimizedConfig']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EcsSpotStrategy'])) {
            $model->ecsSpotStrategy = $map['EcsSpotStrategy'];
        }

        if (isset($map['EnableGracefulDecommission'])) {
            $model->enableGracefulDecommission = $map['EnableGracefulDecommission'];
        }

        if (isset($map['InstanceTypeList'])) {
            if (!empty($map['InstanceTypeList'])) {
                $model->instanceTypeList = [];
                $n1 = 0;
                foreach ($map['InstanceTypeList'] as $item1) {
                    $model->instanceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }

        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['NodeResizeStrategy'])) {
            $model->nodeResizeStrategy = $map['NodeResizeStrategy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
