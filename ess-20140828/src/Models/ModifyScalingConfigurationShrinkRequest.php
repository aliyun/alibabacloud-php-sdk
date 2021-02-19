<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest\dataDisk;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest\instanceTypeOverride;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest\spotPriceLimit;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ModifyScalingConfigurationShrinkRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $override;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $creditSpecification;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $affinity;

    /**
     * @var string
     */
    public $tenancy;

    /**
     * @var string
     */
    public $schedulerOptionsShrink;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var instanceTypeOverride[]
     */
    public $instanceTypeOverride;

    /**
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'systemDisk'               => 'SystemDisk',
        'privatePoolOptions'       => 'PrivatePoolOptions',
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'ownerAccount'             => 'OwnerAccount',
        'scalingConfigurationId'   => 'ScalingConfigurationId',
        'ioOptimized'              => 'IoOptimized',
        'spotStrategy'             => 'SpotStrategy',
        'scalingConfigurationName' => 'ScalingConfigurationName',
        'instanceName'             => 'InstanceName',
        'hostName'                 => 'HostName',
        'imageId'                  => 'ImageId',
        'imageName'                => 'ImageName',
        'cpu'                      => 'Cpu',
        'memory'                   => 'Memory',
        'internetChargeType'       => 'InternetChargeType',
        'internetMaxBandwidthOut'  => 'InternetMaxBandwidthOut',
        'loadBalancerWeight'       => 'LoadBalancerWeight',
        'userData'                 => 'UserData',
        'keyPairName'              => 'KeyPairName',
        'ramRoleName'              => 'RamRoleName',
        'passwordInherit'          => 'PasswordInherit',
        'tags'                     => 'Tags',
        'deploymentSetId'          => 'DeploymentSetId',
        'securityGroupId'          => 'SecurityGroupId',
        'override'                 => 'Override',
        'resourceGroupId'          => 'ResourceGroupId',
        'hpcClusterId'             => 'HpcClusterId',
        'instanceDescription'      => 'InstanceDescription',
        'ipv6AddressCount'         => 'Ipv6AddressCount',
        'creditSpecification'      => 'CreditSpecification',
        'imageFamily'              => 'ImageFamily',
        'zoneId'                   => 'ZoneId',
        'dedicatedHostId'          => 'DedicatedHostId',
        'affinity'                 => 'Affinity',
        'tenancy'                  => 'Tenancy',
        'schedulerOptionsShrink'   => 'SchedulerOptions',
        'spotDuration'             => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
        'dataDisk'                 => 'DataDisk',
        'spotPriceLimit'           => 'SpotPriceLimit',
        'instanceTypes'            => 'InstanceTypes',
        'instanceTypeOverride'     => 'InstanceTypeOverride',
        'securityGroupIds'         => 'SecurityGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->override) {
            $res['Override'] = $this->override;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->schedulerOptionsShrink) {
            $res['SchedulerOptions'] = $this->schedulerOptionsShrink;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = [];
            if (null !== $this->spotPriceLimit && \is_array($this->spotPriceLimit)) {
                $n = 0;
                foreach ($this->spotPriceLimit as $item) {
                    $res['SpotPriceLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->instanceTypeOverride) {
            $res['InstanceTypeOverride'] = [];
            if (null !== $this->instanceTypeOverride && \is_array($this->instanceTypeOverride)) {
                $n = 0;
                foreach ($this->instanceTypeOverride as $item) {
                    $res['InstanceTypeOverride'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScalingConfigurationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Override'])) {
            $model->override = $map['Override'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptionsShrink = $map['SchedulerOptions'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpotPriceLimit'])) {
            if (!empty($map['SpotPriceLimit'])) {
                $model->spotPriceLimit = [];
                $n                     = 0;
                foreach ($map['SpotPriceLimit'] as $item) {
                    $model->spotPriceLimit[$n++] = null !== $item ? spotPriceLimit::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['InstanceTypeOverride'])) {
            if (!empty($map['InstanceTypeOverride'])) {
                $model->instanceTypeOverride = [];
                $n                           = 0;
                foreach ($map['InstanceTypeOverride'] as $item) {
                    $model->instanceTypeOverride[$n++] = null !== $item ? instanceTypeOverride::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }

        return $model;
    }
}
