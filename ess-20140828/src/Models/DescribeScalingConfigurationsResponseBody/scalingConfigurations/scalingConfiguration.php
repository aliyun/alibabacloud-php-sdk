<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\dataDisks;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\instanceTypes;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\privatePoolOptions;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\schedulerOptions;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\securityGroupIds;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\spotPriceLimit;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\tags;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\weightedCapacities;
use AlibabaCloud\Tea\Model;

class scalingConfiguration extends Model
{
    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $systemDiskAutoSnapshotPolicyId;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $affinity;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var spotPriceLimit
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $systemDiskName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @var string
     */
    public $creditSpecification;

    /**
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $systemDiskDescription;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $tenancy;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $lifecycleState;

    /**
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var weightedCapacities
     */
    public $weightedCapacities;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;
    protected $_name = [
        'privatePoolOptions'             => 'PrivatePoolOptions',
        'creationTime'                   => 'CreationTime',
        'scalingConfigurationName'       => 'ScalingConfigurationName',
        'tags'                           => 'Tags',
        'dataDisks'                      => 'DataDisks',
        'systemDiskAutoSnapshotPolicyId' => 'SystemDiskAutoSnapshotPolicyId',
        'spotStrategy'                   => 'SpotStrategy',
        'affinity'                       => 'Affinity',
        'spotDuration'                   => 'SpotDuration',
        'instanceName'                   => 'InstanceName',
        'userData'                       => 'UserData',
        'spotPriceLimit'                 => 'SpotPriceLimit',
        'imageId'                        => 'ImageId',
        'loadBalancerWeight'             => 'LoadBalancerWeight',
        'hostName'                       => 'HostName',
        'systemDiskName'                 => 'SystemDiskName',
        'instanceType'                   => 'InstanceType',
        'systemDiskPerformanceLevel'     => 'SystemDiskPerformanceLevel',
        'imageName'                      => 'ImageName',
        'internetChargeType'             => 'InternetChargeType',
        'zoneId'                         => 'ZoneId',
        'scalingConfigurationId'         => 'ScalingConfigurationId',
        'creditSpecification'            => 'CreditSpecification',
        'spotInterruptionBehavior'       => 'SpotInterruptionBehavior',
        'deploymentSetId'                => 'DeploymentSetId',
        'systemDiskDescription'          => 'SystemDiskDescription',
        'keyPairName'                    => 'KeyPairName',
        'securityGroupId'                => 'SecurityGroupId',
        'scalingGroupId'                 => 'ScalingGroupId',
        'tenancy'                        => 'Tenancy',
        'systemDiskSize'                 => 'SystemDiskSize',
        'ipv6AddressCount'               => 'Ipv6AddressCount',
        'lifecycleState'                 => 'LifecycleState',
        'securityEnhancementStrategy'    => 'SecurityEnhancementStrategy',
        'dedicatedHostId'                => 'DedicatedHostId',
        'instanceGeneration'             => 'InstanceGeneration',
        'hpcClusterId'                   => 'HpcClusterId',
        'passwordInherit'                => 'PasswordInherit',
        'memory'                         => 'Memory',
        'imageFamily'                    => 'ImageFamily',
        'systemDiskCategory'             => 'SystemDiskCategory',
        'weightedCapacities'             => 'WeightedCapacities',
        'internetMaxBandwidthOut'        => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'         => 'InternetMaxBandwidthIn',
        'instanceDescription'            => 'InstanceDescription',
        'securityGroupIds'               => 'SecurityGroupIds',
        'ioOptimized'                    => 'IoOptimized',
        'ramRoleName'                    => 'RamRoleName',
        'cpu'                            => 'Cpu',
        'resourceGroupId'                => 'ResourceGroupId',
        'schedulerOptions'               => 'SchedulerOptions',
        'instanceTypes'                  => 'InstanceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('privatePoolOptions', $this->privatePoolOptions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->systemDiskAutoSnapshotPolicyId) {
            $res['SystemDiskAutoSnapshotPolicyId'] = $this->systemDiskAutoSnapshotPolicyId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = null !== $this->spotPriceLimit ? $this->spotPriceLimit->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->systemDiskName) {
            $res['SystemDiskName'] = $this->systemDiskName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->systemDiskDescription) {
            $res['SystemDiskDescription'] = $this->systemDiskDescription;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->weightedCapacities) {
            $res['WeightedCapacities'] = null !== $this->weightedCapacities ? $this->weightedCapacities->toMap() : null;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toMap() : null;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['SystemDiskAutoSnapshotPolicyId'])) {
            $model->systemDiskAutoSnapshotPolicyId = $map['SystemDiskAutoSnapshotPolicyId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = spotPriceLimit::fromMap($map['SpotPriceLimit']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['SystemDiskName'])) {
            $model->systemDiskName = $map['SystemDiskName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['SystemDiskDescription'])) {
            $model->systemDiskDescription = $map['SystemDiskDescription'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['WeightedCapacities'])) {
            $model->weightedCapacities = weightedCapacities::fromMap($map['WeightedCapacities']);
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }

        return $model;
    }
}
