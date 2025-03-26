<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnableScalingGroupRequest\launchTemplateOverrides;

class EnableScalingGroupRequest extends Model
{
    /**
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var int[]
     */
    public $loadBalancerWeights;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'activeScalingConfigurationId' => 'ActiveScalingConfigurationId',
        'instanceIds' => 'InstanceIds',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateOverrides' => 'LaunchTemplateOverrides',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'loadBalancerWeights' => 'LoadBalancerWeights',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->launchTemplateOverrides)) {
            Model::validateArray($this->launchTemplateOverrides);
        }
        if (\is_array($this->loadBalancerWeights)) {
            Model::validateArray($this->loadBalancerWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateOverrides) {
            if (\is_array($this->launchTemplateOverrides)) {
                $res['LaunchTemplateOverrides'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateOverrides as $item1) {
                    $res['LaunchTemplateOverrides'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->loadBalancerWeights) {
            if (\is_array($this->loadBalancerWeights)) {
                $res['LoadBalancerWeights'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerWeights as $item1) {
                    $res['LoadBalancerWeights'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateOverrides'])) {
            if (!empty($map['LaunchTemplateOverrides'])) {
                $model->launchTemplateOverrides = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item1) {
                    $model->launchTemplateOverrides[$n1++] = launchTemplateOverrides::fromMap($item1);
                }
            }
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['LoadBalancerWeights'])) {
            if (!empty($map['LoadBalancerWeights'])) {
                $model->loadBalancerWeights = [];
                $n1 = 0;
                foreach ($map['LoadBalancerWeights'] as $item1) {
                    $model->loadBalancerWeights[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
