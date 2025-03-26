<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\customPriorities;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\dataDisks;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\instancePatternInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\networkInterfaces;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\resourcePoolOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\schedulerOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\securityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\spotPriceLimits;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\tags;

class scalingConfigurations extends Model
{
    /**
     * @var string
     */
    public $affinity;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $creditSpecification;

    /**
     * @var customPriorities[]
     */
    public $customPriorities;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var string
     */
    public $httpEndpoint;

    /**
     * @var string
     */
    public $httpTokens;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var bool
     */
    public $imageOptionsLoginAsNonRoot;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var instancePatternInfos[]
     */
    public $instancePatternInfos;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $lifecycleState;

    /**
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var networkInterfaces[]
     */
    public $networkInterfaces;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var bool
     */
    public $passwordSetted;

    /**
     * @var string
     */
    public $privatePoolOptions_id;

    /**
     * @var string
     */
    public $privatePoolOptions_matchCriteria;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourcePoolOptions
     */
    public $resourcePoolOptions;

    /**
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var securityOptions
     */
    public $securityOptions;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @var spotPriceLimits[]
     */
    public $spotPriceLimits;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $storageSetId;

    /**
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @var string
     */
    public $systemDiskAutoSnapshotPolicyId;

    /**
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $systemDiskDescription;

    /**
     * @var string
     */
    public $systemDiskEncryptAlgorithm;

    /**
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @var string
     */
    public $systemDiskKMSKeyId;

    /**
     * @var string
     */
    public $systemDiskName;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenancy;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var int[]
     */
    public $weightedCapacities;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'affinity' => 'Affinity',
        'cpu' => 'Cpu',
        'creationTime' => 'CreationTime',
        'creditSpecification' => 'CreditSpecification',
        'customPriorities' => 'CustomPriorities',
        'dataDisks' => 'DataDisks',
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostId' => 'DedicatedHostId',
        'deletionProtection' => 'DeletionProtection',
        'deploymentSetId' => 'DeploymentSetId',
        'hostName' => 'HostName',
        'hpcClusterId' => 'HpcClusterId',
        'httpEndpoint' => 'HttpEndpoint',
        'httpTokens' => 'HttpTokens',
        'imageFamily' => 'ImageFamily',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageOptionsLoginAsNonRoot' => 'ImageOptionsLoginAsNonRoot',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceDescription' => 'InstanceDescription',
        'instanceGeneration' => 'InstanceGeneration',
        'instanceName' => 'InstanceName',
        'instancePatternInfos' => 'InstancePatternInfos',
        'instanceType' => 'InstanceType',
        'instanceTypes' => 'InstanceTypes',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthIn' => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized' => 'IoOptimized',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'keyPairName' => 'KeyPairName',
        'lifecycleState' => 'LifecycleState',
        'loadBalancerWeight' => 'LoadBalancerWeight',
        'memory' => 'Memory',
        'networkInterfaces' => 'NetworkInterfaces',
        'passwordInherit' => 'PasswordInherit',
        'passwordSetted' => 'PasswordSetted',
        'privatePoolOptions_id' => 'PrivatePoolOptions.Id',
        'privatePoolOptions_matchCriteria' => 'PrivatePoolOptions.MatchCriteria',
        'ramRoleName' => 'RamRoleName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourcePoolOptions' => 'ResourcePoolOptions',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingConfigurationName' => 'ScalingConfigurationName',
        'scalingGroupId' => 'ScalingGroupId',
        'schedulerOptions' => 'SchedulerOptions',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupIds' => 'SecurityGroupIds',
        'securityOptions' => 'SecurityOptions',
        'spotDuration' => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
        'spotPriceLimits' => 'SpotPriceLimits',
        'spotStrategy' => 'SpotStrategy',
        'storageSetId' => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'systemDiskAutoSnapshotPolicyId' => 'SystemDiskAutoSnapshotPolicyId',
        'systemDiskBurstingEnabled' => 'SystemDiskBurstingEnabled',
        'systemDiskCategories' => 'SystemDiskCategories',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskDescription' => 'SystemDiskDescription',
        'systemDiskEncryptAlgorithm' => 'SystemDiskEncryptAlgorithm',
        'systemDiskEncrypted' => 'SystemDiskEncrypted',
        'systemDiskKMSKeyId' => 'SystemDiskKMSKeyId',
        'systemDiskName' => 'SystemDiskName',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskProvisionedIops' => 'SystemDiskProvisionedIops',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'tenancy' => 'Tenancy',
        'userData' => 'UserData',
        'weightedCapacities' => 'WeightedCapacities',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->customPriorities)) {
            Model::validateArray($this->customPriorities);
        }
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        if (\is_array($this->instancePatternInfos)) {
            Model::validateArray($this->instancePatternInfos);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (\is_array($this->networkInterfaces)) {
            Model::validateArray($this->networkInterfaces);
        }
        if (null !== $this->resourcePoolOptions) {
            $this->resourcePoolOptions->validate();
        }
        if (null !== $this->schedulerOptions) {
            $this->schedulerOptions->validate();
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (null !== $this->securityOptions) {
            $this->securityOptions->validate();
        }
        if (\is_array($this->spotPriceLimits)) {
            Model::validateArray($this->spotPriceLimits);
        }
        if (\is_array($this->systemDiskCategories)) {
            Model::validateArray($this->systemDiskCategories);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->weightedCapacities)) {
            Model::validateArray($this->weightedCapacities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }

        if (null !== $this->customPriorities) {
            if (\is_array($this->customPriorities)) {
                $res['CustomPriorities'] = [];
                $n1 = 0;
                foreach ($this->customPriorities as $item1) {
                    $res['CustomPriorities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataDisks) {
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1 = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }

        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }

        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }

        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageOptionsLoginAsNonRoot) {
            $res['ImageOptionsLoginAsNonRoot'] = $this->imageOptionsLoginAsNonRoot;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instancePatternInfos) {
            if (\is_array($this->instancePatternInfos)) {
                $res['InstancePatternInfos'] = [];
                $n1 = 0;
                foreach ($this->instancePatternInfos as $item1) {
                    $res['InstancePatternInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }

        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->networkInterfaces) {
            if (\is_array($this->networkInterfaces)) {
                $res['NetworkInterfaces'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaces as $item1) {
                    $res['NetworkInterfaces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }

        if (null !== $this->passwordSetted) {
            $res['PasswordSetted'] = $this->passwordSetted;
        }

        if (null !== $this->privatePoolOptions_id) {
            $res['PrivatePoolOptions.Id'] = $this->privatePoolOptions_id;
        }

        if (null !== $this->privatePoolOptions_matchCriteria) {
            $res['PrivatePoolOptions.MatchCriteria'] = $this->privatePoolOptions_matchCriteria;
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourcePoolOptions) {
            $res['ResourcePoolOptions'] = null !== $this->resourcePoolOptions ? $this->resourcePoolOptions->toArray($noStream) : $this->resourcePoolOptions;
        }

        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }

        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toArray($noStream) : $this->schedulerOptions;
        }

        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityOptions) {
            $res['SecurityOptions'] = null !== $this->securityOptions ? $this->securityOptions->toArray($noStream) : $this->securityOptions;
        }

        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }

        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }

        if (null !== $this->spotPriceLimits) {
            if (\is_array($this->spotPriceLimits)) {
                $res['SpotPriceLimits'] = [];
                $n1 = 0;
                foreach ($this->spotPriceLimits as $item1) {
                    $res['SpotPriceLimits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }

        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }

        if (null !== $this->systemDiskAutoSnapshotPolicyId) {
            $res['SystemDiskAutoSnapshotPolicyId'] = $this->systemDiskAutoSnapshotPolicyId;
        }

        if (null !== $this->systemDiskBurstingEnabled) {
            $res['SystemDiskBurstingEnabled'] = $this->systemDiskBurstingEnabled;
        }

        if (null !== $this->systemDiskCategories) {
            if (\is_array($this->systemDiskCategories)) {
                $res['SystemDiskCategories'] = [];
                $n1 = 0;
                foreach ($this->systemDiskCategories as $item1) {
                    $res['SystemDiskCategories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskDescription) {
            $res['SystemDiskDescription'] = $this->systemDiskDescription;
        }

        if (null !== $this->systemDiskEncryptAlgorithm) {
            $res['SystemDiskEncryptAlgorithm'] = $this->systemDiskEncryptAlgorithm;
        }

        if (null !== $this->systemDiskEncrypted) {
            $res['SystemDiskEncrypted'] = $this->systemDiskEncrypted;
        }

        if (null !== $this->systemDiskKMSKeyId) {
            $res['SystemDiskKMSKeyId'] = $this->systemDiskKMSKeyId;
        }

        if (null !== $this->systemDiskName) {
            $res['SystemDiskName'] = $this->systemDiskName;
        }

        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }

        if (null !== $this->systemDiskProvisionedIops) {
            $res['SystemDiskProvisionedIops'] = $this->systemDiskProvisionedIops;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->weightedCapacities) {
            if (\is_array($this->weightedCapacities)) {
                $res['WeightedCapacities'] = [];
                $n1 = 0;
                foreach ($this->weightedCapacities as $item1) {
                    $res['WeightedCapacities'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }

        if (isset($map['CustomPriorities'])) {
            if (!empty($map['CustomPriorities'])) {
                $model->customPriorities = [];
                $n1 = 0;
                foreach ($map['CustomPriorities'] as $item1) {
                    $model->customPriorities[$n1++] = customPriorities::fromMap($item1);
                }
            }
        }

        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n1 = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1++] = dataDisks::fromMap($item1);
                }
            }
        }

        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }

        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }

        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }

        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageOptionsLoginAsNonRoot'])) {
            $model->imageOptionsLoginAsNonRoot = $map['ImageOptionsLoginAsNonRoot'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstancePatternInfos'])) {
            if (!empty($map['InstancePatternInfos'])) {
                $model->instancePatternInfos = [];
                $n1 = 0;
                foreach ($map['InstancePatternInfos'] as $item1) {
                    $model->instancePatternInfos[$n1++] = instancePatternInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }

        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NetworkInterfaces'])) {
            if (!empty($map['NetworkInterfaces'])) {
                $model->networkInterfaces = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaces'] as $item1) {
                    $model->networkInterfaces[$n1++] = networkInterfaces::fromMap($item1);
                }
            }
        }

        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }

        if (isset($map['PasswordSetted'])) {
            $model->passwordSetted = $map['PasswordSetted'];
        }

        if (isset($map['PrivatePoolOptions.Id'])) {
            $model->privatePoolOptions_id = $map['PrivatePoolOptions.Id'];
        }

        if (isset($map['PrivatePoolOptions.MatchCriteria'])) {
            $model->privatePoolOptions_matchCriteria = $map['PrivatePoolOptions.MatchCriteria'];
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourcePoolOptions'])) {
            $model->resourcePoolOptions = resourcePoolOptions::fromMap($map['ResourcePoolOptions']);
        }

        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }

        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityOptions'])) {
            $model->securityOptions = securityOptions::fromMap($map['SecurityOptions']);
        }

        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }

        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }

        if (isset($map['SpotPriceLimits'])) {
            if (!empty($map['SpotPriceLimits'])) {
                $model->spotPriceLimits = [];
                $n1 = 0;
                foreach ($map['SpotPriceLimits'] as $item1) {
                    $model->spotPriceLimits[$n1++] = spotPriceLimits::fromMap($item1);
                }
            }
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }

        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }

        if (isset($map['SystemDiskAutoSnapshotPolicyId'])) {
            $model->systemDiskAutoSnapshotPolicyId = $map['SystemDiskAutoSnapshotPolicyId'];
        }

        if (isset($map['SystemDiskBurstingEnabled'])) {
            $model->systemDiskBurstingEnabled = $map['SystemDiskBurstingEnabled'];
        }

        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = [];
                $n1 = 0;
                foreach ($map['SystemDiskCategories'] as $item1) {
                    $model->systemDiskCategories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskDescription'])) {
            $model->systemDiskDescription = $map['SystemDiskDescription'];
        }

        if (isset($map['SystemDiskEncryptAlgorithm'])) {
            $model->systemDiskEncryptAlgorithm = $map['SystemDiskEncryptAlgorithm'];
        }

        if (isset($map['SystemDiskEncrypted'])) {
            $model->systemDiskEncrypted = $map['SystemDiskEncrypted'];
        }

        if (isset($map['SystemDiskKMSKeyId'])) {
            $model->systemDiskKMSKeyId = $map['SystemDiskKMSKeyId'];
        }

        if (isset($map['SystemDiskName'])) {
            $model->systemDiskName = $map['SystemDiskName'];
        }

        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }

        if (isset($map['SystemDiskProvisionedIops'])) {
            $model->systemDiskProvisionedIops = $map['SystemDiskProvisionedIops'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['WeightedCapacities'])) {
            if (!empty($map['WeightedCapacities'])) {
                $model->weightedCapacities = [];
                $n1 = 0;
                foreach ($map['WeightedCapacities'] as $item1) {
                    $model->weightedCapacities[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
