<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\EnableScalingGroupRequest\launchTemplateOverride;
use AlibabaCloud\Tea\Model;

class EnableScalingGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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

    /**
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $loadBalancerWeight;

    /**
     * @var launchTemplateOverride[]
     */
    public $launchTemplateOverride;
    protected $_name = [
        'ownerId'                      => 'OwnerId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'scalingGroupId'               => 'ScalingGroupId',
        'activeScalingConfigurationId' => 'ActiveScalingConfigurationId',
        'ownerAccount'                 => 'OwnerAccount',
        'launchTemplateId'             => 'LaunchTemplateId',
        'launchTemplateVersion'        => 'LaunchTemplateVersion',
        'instanceId'                   => 'InstanceId',
        'loadBalancerWeight'           => 'LoadBalancerWeight',
        'launchTemplateOverride'       => 'LaunchTemplateOverride',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->launchTemplateOverride) {
            $res['LaunchTemplateOverride'] = [];
            if (null !== $this->launchTemplateOverride && \is_array($this->launchTemplateOverride)) {
                $n = 0;
                foreach ($this->launchTemplateOverride as $item) {
                    $res['LaunchTemplateOverride'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['LoadBalancerWeight'])) {
            if (!empty($map['LoadBalancerWeight'])) {
                $model->loadBalancerWeight = $map['LoadBalancerWeight'];
            }
        }
        if (isset($map['LaunchTemplateOverride'])) {
            if (!empty($map['LaunchTemplateOverride'])) {
                $model->launchTemplateOverride = [];
                $n                             = 0;
                foreach ($map['LaunchTemplateOverride'] as $item) {
                    $model->launchTemplateOverride[$n++] = null !== $item ? launchTemplateOverride::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
