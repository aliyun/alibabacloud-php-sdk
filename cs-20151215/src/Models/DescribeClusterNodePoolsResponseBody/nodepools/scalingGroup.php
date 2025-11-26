<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\privatePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\resourcePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\spotPriceLimit;
use AlibabaCloud\SDK\CS\V20151215\Models\InstancePatterns;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;

class scalingGroup extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $cisEnabled;

    /**
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $deploymentsetId;

    /**
     * @var int
     */
    public $desiredSize;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var InstancePatterns[]
     */
    public $instancePatterns;

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
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var bool
     */
    public $loginAsNonRoot;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var string
     */
    public $ramPolicy;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @var resourcePoolOptions
     */
    public $resourcePoolOptions;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @var bool
     */
    public $socEnabled;

    /**
     * @var int
     */
    public $spotInstancePools;

    /**
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

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
    public $systemDiskEncryptAlgorithm;

    /**
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @var string
     */
    public $systemDiskKmsKeyId;

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
     * @var string
     */
    public $systemDiskSnapshotPolicyId;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'autoRenew' => 'auto_renew',
        'autoRenewPeriod' => 'auto_renew_period',
        'cisEnabled' => 'cis_enabled',
        'compensateWithOnDemand' => 'compensate_with_on_demand',
        'dataDisks' => 'data_disks',
        'deploymentsetId' => 'deploymentset_id',
        'desiredSize' => 'desired_size',
        'imageId' => 'image_id',
        'imageType' => 'image_type',
        'instanceChargeType' => 'instance_charge_type',
        'instancePatterns' => 'instance_patterns',
        'instanceTypes' => 'instance_types',
        'internetChargeType' => 'internet_charge_type',
        'internetMaxBandwidthOut' => 'internet_max_bandwidth_out',
        'keyPair' => 'key_pair',
        'loginAsNonRoot' => 'login_as_non_root',
        'loginPassword' => 'login_password',
        'multiAzPolicy' => 'multi_az_policy',
        'onDemandBaseCapacity' => 'on_demand_base_capacity',
        'onDemandPercentageAboveBaseCapacity' => 'on_demand_percentage_above_base_capacity',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'platform' => 'platform',
        'privatePoolOptions' => 'private_pool_options',
        'ramPolicy' => 'ram_policy',
        'ramRoleName' => 'ram_role_name',
        'rdsInstances' => 'rds_instances',
        'resourcePoolOptions' => 'resource_pool_options',
        'scalingGroupId' => 'scaling_group_id',
        'scalingPolicy' => 'scaling_policy',
        'securityGroupId' => 'security_group_id',
        'securityGroupIds' => 'security_group_ids',
        'securityHardeningOs' => 'security_hardening_os',
        'socEnabled' => 'soc_enabled',
        'spotInstancePools' => 'spot_instance_pools',
        'spotInstanceRemedy' => 'spot_instance_remedy',
        'spotPriceLimit' => 'spot_price_limit',
        'spotStrategy' => 'spot_strategy',
        'systemDiskBurstingEnabled' => 'system_disk_bursting_enabled',
        'systemDiskCategories' => 'system_disk_categories',
        'systemDiskCategory' => 'system_disk_category',
        'systemDiskEncryptAlgorithm' => 'system_disk_encrypt_algorithm',
        'systemDiskEncrypted' => 'system_disk_encrypted',
        'systemDiskKmsKeyId' => 'system_disk_kms_key_id',
        'systemDiskPerformanceLevel' => 'system_disk_performance_level',
        'systemDiskProvisionedIops' => 'system_disk_provisioned_iops',
        'systemDiskSize' => 'system_disk_size',
        'systemDiskSnapshotPolicyId' => 'system_disk_snapshot_policy_id',
        'tags' => 'tags',
        'vswitchIds' => 'vswitch_ids',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        if (\is_array($this->instancePatterns)) {
            Model::validateArray($this->instancePatterns);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (null !== $this->privatePoolOptions) {
            $this->privatePoolOptions->validate();
        }
        if (\is_array($this->rdsInstances)) {
            Model::validateArray($this->rdsInstances);
        }
        if (null !== $this->resourcePoolOptions) {
            $this->resourcePoolOptions->validate();
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->spotPriceLimit)) {
            Model::validateArray($this->spotPriceLimit);
        }
        if (\is_array($this->systemDiskCategories)) {
            Model::validateArray($this->systemDiskCategories);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
        }

        if (null !== $this->cisEnabled) {
            $res['cis_enabled'] = $this->cisEnabled;
        }

        if (null !== $this->compensateWithOnDemand) {
            $res['compensate_with_on_demand'] = $this->compensateWithOnDemand;
        }

        if (null !== $this->dataDisks) {
            if (\is_array($this->dataDisks)) {
                $res['data_disks'] = [];
                $n1 = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['data_disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deploymentsetId) {
            $res['deploymentset_id'] = $this->deploymentsetId;
        }

        if (null !== $this->desiredSize) {
            $res['desired_size'] = $this->desiredSize;
        }

        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }

        if (null !== $this->instanceChargeType) {
            $res['instance_charge_type'] = $this->instanceChargeType;
        }

        if (null !== $this->instancePatterns) {
            if (\is_array($this->instancePatterns)) {
                $res['instance_patterns'] = [];
                $n1 = 0;
                foreach ($this->instancePatterns as $item1) {
                    $res['instance_patterns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['instance_types'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['instance_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->internetChargeType) {
            $res['internet_charge_type'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['internet_max_bandwidth_out'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }

        if (null !== $this->loginAsNonRoot) {
            $res['login_as_non_root'] = $this->loginAsNonRoot;
        }

        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }

        if (null !== $this->multiAzPolicy) {
            $res['multi_az_policy'] = $this->multiAzPolicy;
        }

        if (null !== $this->onDemandBaseCapacity) {
            $res['on_demand_base_capacity'] = $this->onDemandBaseCapacity;
        }

        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['on_demand_percentage_above_base_capacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->privatePoolOptions) {
            $res['private_pool_options'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
        }

        if (null !== $this->ramPolicy) {
            $res['ram_policy'] = $this->ramPolicy;
        }

        if (null !== $this->ramRoleName) {
            $res['ram_role_name'] = $this->ramRoleName;
        }

        if (null !== $this->rdsInstances) {
            if (\is_array($this->rdsInstances)) {
                $res['rds_instances'] = [];
                $n1 = 0;
                foreach ($this->rdsInstances as $item1) {
                    $res['rds_instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourcePoolOptions) {
            $res['resource_pool_options'] = null !== $this->resourcePoolOptions ? $this->resourcePoolOptions->toArray($noStream) : $this->resourcePoolOptions;
        }

        if (null !== $this->scalingGroupId) {
            $res['scaling_group_id'] = $this->scalingGroupId;
        }

        if (null !== $this->scalingPolicy) {
            $res['scaling_policy'] = $this->scalingPolicy;
        }

        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['security_group_ids'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['security_group_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityHardeningOs) {
            $res['security_hardening_os'] = $this->securityHardeningOs;
        }

        if (null !== $this->socEnabled) {
            $res['soc_enabled'] = $this->socEnabled;
        }

        if (null !== $this->spotInstancePools) {
            $res['spot_instance_pools'] = $this->spotInstancePools;
        }

        if (null !== $this->spotInstanceRemedy) {
            $res['spot_instance_remedy'] = $this->spotInstanceRemedy;
        }

        if (null !== $this->spotPriceLimit) {
            if (\is_array($this->spotPriceLimit)) {
                $res['spot_price_limit'] = [];
                $n1 = 0;
                foreach ($this->spotPriceLimit as $item1) {
                    $res['spot_price_limit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spotStrategy) {
            $res['spot_strategy'] = $this->spotStrategy;
        }

        if (null !== $this->systemDiskBurstingEnabled) {
            $res['system_disk_bursting_enabled'] = $this->systemDiskBurstingEnabled;
        }

        if (null !== $this->systemDiskCategories) {
            if (\is_array($this->systemDiskCategories)) {
                $res['system_disk_categories'] = [];
                $n1 = 0;
                foreach ($this->systemDiskCategories as $item1) {
                    $res['system_disk_categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemDiskCategory) {
            $res['system_disk_category'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskEncryptAlgorithm) {
            $res['system_disk_encrypt_algorithm'] = $this->systemDiskEncryptAlgorithm;
        }

        if (null !== $this->systemDiskEncrypted) {
            $res['system_disk_encrypted'] = $this->systemDiskEncrypted;
        }

        if (null !== $this->systemDiskKmsKeyId) {
            $res['system_disk_kms_key_id'] = $this->systemDiskKmsKeyId;
        }

        if (null !== $this->systemDiskPerformanceLevel) {
            $res['system_disk_performance_level'] = $this->systemDiskPerformanceLevel;
        }

        if (null !== $this->systemDiskProvisionedIops) {
            $res['system_disk_provisioned_iops'] = $this->systemDiskProvisionedIops;
        }

        if (null !== $this->systemDiskSize) {
            $res['system_disk_size'] = $this->systemDiskSize;
        }

        if (null !== $this->systemDiskSnapshotPolicyId) {
            $res['system_disk_snapshot_policy_id'] = $this->systemDiskSnapshotPolicyId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['auto_renew'])) {
            $model->autoRenew = $map['auto_renew'];
        }

        if (isset($map['auto_renew_period'])) {
            $model->autoRenewPeriod = $map['auto_renew_period'];
        }

        if (isset($map['cis_enabled'])) {
            $model->cisEnabled = $map['cis_enabled'];
        }

        if (isset($map['compensate_with_on_demand'])) {
            $model->compensateWithOnDemand = $map['compensate_with_on_demand'];
        }

        if (isset($map['data_disks'])) {
            if (!empty($map['data_disks'])) {
                $model->dataDisks = [];
                $n1 = 0;
                foreach ($map['data_disks'] as $item1) {
                    $model->dataDisks[$n1] = DataDisk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['deploymentset_id'])) {
            $model->deploymentsetId = $map['deploymentset_id'];
        }

        if (isset($map['desired_size'])) {
            $model->desiredSize = $map['desired_size'];
        }

        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }

        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }

        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
        }

        if (isset($map['instance_patterns'])) {
            if (!empty($map['instance_patterns'])) {
                $model->instancePatterns = [];
                $n1 = 0;
                foreach ($map['instance_patterns'] as $item1) {
                    $model->instancePatterns[$n1] = InstancePatterns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['instance_types'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['internet_charge_type'])) {
            $model->internetChargeType = $map['internet_charge_type'];
        }

        if (isset($map['internet_max_bandwidth_out'])) {
            $model->internetMaxBandwidthOut = $map['internet_max_bandwidth_out'];
        }

        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }

        if (isset($map['login_as_non_root'])) {
            $model->loginAsNonRoot = $map['login_as_non_root'];
        }

        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }

        if (isset($map['multi_az_policy'])) {
            $model->multiAzPolicy = $map['multi_az_policy'];
        }

        if (isset($map['on_demand_base_capacity'])) {
            $model->onDemandBaseCapacity = $map['on_demand_base_capacity'];
        }

        if (isset($map['on_demand_percentage_above_base_capacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['on_demand_percentage_above_base_capacity'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['private_pool_options'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['private_pool_options']);
        }

        if (isset($map['ram_policy'])) {
            $model->ramPolicy = $map['ram_policy'];
        }

        if (isset($map['ram_role_name'])) {
            $model->ramRoleName = $map['ram_role_name'];
        }

        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = [];
                $n1 = 0;
                foreach ($map['rds_instances'] as $item1) {
                    $model->rdsInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resource_pool_options'])) {
            $model->resourcePoolOptions = resourcePoolOptions::fromMap($map['resource_pool_options']);
        }

        if (isset($map['scaling_group_id'])) {
            $model->scalingGroupId = $map['scaling_group_id'];
        }

        if (isset($map['scaling_policy'])) {
            $model->scalingPolicy = $map['scaling_policy'];
        }

        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }

        if (isset($map['security_group_ids'])) {
            if (!empty($map['security_group_ids'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['security_group_ids'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['security_hardening_os'])) {
            $model->securityHardeningOs = $map['security_hardening_os'];
        }

        if (isset($map['soc_enabled'])) {
            $model->socEnabled = $map['soc_enabled'];
        }

        if (isset($map['spot_instance_pools'])) {
            $model->spotInstancePools = $map['spot_instance_pools'];
        }

        if (isset($map['spot_instance_remedy'])) {
            $model->spotInstanceRemedy = $map['spot_instance_remedy'];
        }

        if (isset($map['spot_price_limit'])) {
            if (!empty($map['spot_price_limit'])) {
                $model->spotPriceLimit = [];
                $n1 = 0;
                foreach ($map['spot_price_limit'] as $item1) {
                    $model->spotPriceLimit[$n1] = spotPriceLimit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['spot_strategy'])) {
            $model->spotStrategy = $map['spot_strategy'];
        }

        if (isset($map['system_disk_bursting_enabled'])) {
            $model->systemDiskBurstingEnabled = $map['system_disk_bursting_enabled'];
        }

        if (isset($map['system_disk_categories'])) {
            if (!empty($map['system_disk_categories'])) {
                $model->systemDiskCategories = [];
                $n1 = 0;
                foreach ($map['system_disk_categories'] as $item1) {
                    $model->systemDiskCategories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['system_disk_category'])) {
            $model->systemDiskCategory = $map['system_disk_category'];
        }

        if (isset($map['system_disk_encrypt_algorithm'])) {
            $model->systemDiskEncryptAlgorithm = $map['system_disk_encrypt_algorithm'];
        }

        if (isset($map['system_disk_encrypted'])) {
            $model->systemDiskEncrypted = $map['system_disk_encrypted'];
        }

        if (isset($map['system_disk_kms_key_id'])) {
            $model->systemDiskKmsKeyId = $map['system_disk_kms_key_id'];
        }

        if (isset($map['system_disk_performance_level'])) {
            $model->systemDiskPerformanceLevel = $map['system_disk_performance_level'];
        }

        if (isset($map['system_disk_provisioned_iops'])) {
            $model->systemDiskProvisionedIops = $map['system_disk_provisioned_iops'];
        }

        if (isset($map['system_disk_size'])) {
            $model->systemDiskSize = $map['system_disk_size'];
        }

        if (isset($map['system_disk_snapshot_policy_id'])) {
            $model->systemDiskSnapshotPolicyId = $map['system_disk_snapshot_policy_id'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitch_ids'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
