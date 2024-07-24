<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup\privatePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup\spotPriceLimit;
use AlibabaCloud\SDK\CS\V20151215\Models\InstancePatterns;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the nodes in the node pool. This parameter takes effect only when `instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: Auto-renewal is enabled.
     *   `false`: Auto-renewal is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The duration of the auto-renewal. This parameter takes effect and is required only when `instance_charge_type` is set to `PrePaid`.
     *
     * If you specify `PeriodUnit=Month`, the valid values are 1, 2, 3, 6, and 12.
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @description Indicates whether pay-as-you-go instances are automatically created to meet the required number of ECS instances if preemptible instances cannot be created due to reasons such as cost or insufficient inventory. This parameter takes effect when `multi_az_policy` is set to `COST_OPTIMIZED`. Valid values:
     *
     *   `true`: Pay-as-you-go instances are automatically created to meet the required number of ECS instances if preemptible instances cannot be created.
     *   `false`: Pay-as-you-go instances are not automatically created to meet the required number of ECS instances if preemptible instances cannot be created.
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The configurations of the data disks that are attached to the nodes in the node pool. The configurations include the disk type and disk size.
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @description The ID of the deployment set to which the ECS instances in the node pool belong.
     *
     * @example ds-bp1d19mmbsv3jf6xxxxx
     *
     * @var string
     */
    public $deploymentsetId;

    /**
     * @description The expected number of nodes in the node pool.
     *
     * @example 2
     *
     * @var int
     */
    public $desiredSize;

    /**
     * @description The ID of the custom image. You can call the `DescribeKubernetesVersionMetadata` operation to query the images supported by ACK.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example AliyunLinux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The billing method of the nodes in the node pool. Valid values:
     *
     *   `PrePaid`: the subscription billing method.
     *   `PostPaid`: the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 实例属性
     *
     * @var InstancePatterns[]
     */
    public $instancePatterns;

    /**
     * @description A list of instance types. You can select multiple instance types. When the system needs to create a node, it starts from the first instance type until the node is created. The instance type that is used to create the node varies based on the actual instance stock.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The billing method of the public IP address of the node.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound bandwidth of the public IP address of the node. Unit: Mbit/s. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the key pair. You must set this parameter or the `login_password` parameter. You must set `key_pair` if the node pool is a managed node pool.
     *
     * @example pro-nodepool
     *
     * @var string
     */
    public $keyPair;

    /**
     * @example true
     *
     * @var bool
     */
    public $loginAsNonRoot;

    /**
     * @description The password for SSH logon. You must set this parameter or the `key_pair` parameter. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * For security purposes, the returned password is encrypted.
     * @example ********
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The ECS instance scaling policy for a multi-zone scaling group. Valid values:
     *
     *   `PRIORITY`: the scaling group is scaled based on the VSwitchIds.N parameter. If an ECS instance cannot be created in the zone where the vSwitch that has the highest priority resides, Auto Scaling creates the ECS instance in the zone where the vSwitch that has the next highest priority resides.
     *
     *   `COST_OPTIMIZED`: ECS instances are created based on the vCPU unit price in ascending order. Preemptible instances are preferably created when preemptible instance types are specified in the scaling configuration. You can set the `CompensateWithOnDemand` parameter to specify whether to automatically create pay-as-you-go instances when preemptible instances cannot be created due to insufficient resources.
     *
     **
     *
     **Note**The `COST_OPTIMIZED` setting takes effect only when multiple instance types are specified or at least one instance type is specified for preemptible instances.
     *
     *   `BALANCE`: ECS instances are evenly distributed across multiple zones specified by the scaling group. If ECS instances become imbalanced among multiple zones due to insufficient inventory, you can call the RebalanceInstances operation of Auto Scaling to balance the instance distribution among zones. For more information, see [RebalanceInstances](https://help.aliyun.com/document_detail/71516.html).
     *
     * Default value: `PRIORITY`.
     * @example BALANCE
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description The minimum number of pay-as-you-go instances that must be kept in the scaling group. Valid values: 0 to 1000. If the number of pay-as-you-go instances is less than the value of this parameter, Auto Scaling preferably creates pay-as-you-go instances.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description The percentage of pay-as-you-go instances among the extra instances that exceed the number specified by `on_demand_base_capacity`. Valid values: 0 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description The subscription duration of worker nodes. This parameter takes effect and is required only when `instance_charge_type` is set to `PrePaid`.
     *
     * If `PeriodUnit=Month` is specified, the valid values are 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     * @example 0
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the nodes. This parameter is required if `instance_charge_type` is set to `PrePaid`.
     *
     * Valid value: `Month`.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The release version of the operating system. Valid values:
     *
     *   `CentOS`
     *   `AliyunLinux`
     *   `Windows`
     *   `WindowsCore`
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The configuration of the private node pool.
     *
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @description The name of the worker Resource Access Management (RAM) role. The RAM role is assigned to the worker nodes of the cluster to allow the worker nodes to manage ECS instances.
     *
     * @example KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****
     *
     * @var string
     */
    public $ramPolicy;

    /**
     * @description Worker RAM角色名称。
     *
     * @example KubernetesWorkerRole-4a4fa089-80c1-48a5-b3c6-9349311f****
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description After you specify the list of RDS instances, the ECS instances in the cluster are automatically added to the whitelist of the RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-2zeieod8giqmov7z****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling mode of the scaling group. Valid values:
     *
     *   `release`: the standard mode. ECS instances are created and released based on resource usage.
     *   `recycle`: the swift mode. ECS instances are created, stopped, or started during scaling events. This reduces the time required for the next scale-out event. When the instance is stopped, you are charged only for the storage service. This does not apply to ECS instances that are attached with local disks.
     *
     * @example release
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The ID of the security group to which the node pool is added. If the node pool is added to multiple security groups, the first ID in the value of `security_group_ids` is returned.
     *
     * @example sg-2ze60ockeekspl3d****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which the node pool is added.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @example false
     *
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @example false
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description The number of instance types that are available for creating preemptible instances. Auto Scaling creates preemptible instances of multiple instance types that are available at the lowest cost. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Indicates whether preemptible instances are supplemented when the number of preemptible instances drops below the specified minimum number. If this parameter is set to true, when the scaling group receives a system message that a preemptible instance is to be reclaimed, the scaling group attempts to create a new instance to replace this instance. Valid values: Valid values:
     *
     *   `true`: Supplementation of preemptible instances is enabled.
     *   `false`: Supplementation of preemptible instances is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description The bid configurations of preemptible instances.
     *
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @description The type of preemptible instance. Valid values:
     *
     *   NoSpot: a non-preemptible instance.
     *   SpotWithPriceLimit: a preemptible instance that is configured with the highest bid price.
     *   SpotAsPriceGo: a preemptible instance for which the system automatically bids based on the current market price.
     *
     * For more information, see [Preemptible instances](https://help.aliyun.com/document_detail/157759.html).
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example true
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The system disk types. The system attempts to create system disks from a disk type with a lower priority when the disk type with a higher priority is unavailable. Valid values: Valid values:
     *
     *   `cloud`: basic disk
     *   `cloud_efficiency`: ultra disk
     *   `cloud_ssd`: standard SSD
     *   `cloud_essd`: ESSD
     *   `cloud_auto`: ESSD AutoPL disk
     *   `cloud_essd_entry`: ESSD Entry disk
     *
     * Default value: `cloud_efficiency`.
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The system disk type. Valid values:
     *
     *   `cloud`: basic disk
     *   `cloud_efficiency`: ultra disk
     *   `cloud_ssd`: standard SSD
     *   `cloud_essd`: Enterprise SSD (ESSD)
     *   `cloud_auto`: ESSD AutoPL disk
     *   `cloud_essd_entry`: ESSD Entry disk
     *
     * Default value: `cloud_efficiency`.
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @example aes-256
     *
     * @var string
     */
    public $systemDiskEncryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the system disk. Valid values: Valid values:
     *
     *   `true`: encrypts the system disk.
     *   `false`: does not encrypt the system disk.
     *
     * @example false
     *
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $systemDiskKmsKeyId;

    /**
     * @description The performance level (PL) of the system disk that you want to use for the node. This parameter takes effect only for enhanced SSDs (ESSDs).
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @example 1000
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The system disk size of a node. Unit: GiB.
     *
     * Valid values: 20 to 500.
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The labels that you want to add to the ECS instances.
     *
     * A key must be unique and cannot exceed 128 characters in length. Neither keys nor values can start with aliyun or acs:. Neither keys nor values can contain https:// or http://.
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The IDs of vSwitches. You can specify 1 to 20 vSwitches.
     *
     * > We recommend that you select vSwitches in different zones to ensure high availability.
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'autoRenew'                           => 'auto_renew',
        'autoRenewPeriod'                     => 'auto_renew_period',
        'cisEnabled'                          => 'cis_enabled',
        'compensateWithOnDemand'              => 'compensate_with_on_demand',
        'dataDisks'                           => 'data_disks',
        'deploymentsetId'                     => 'deploymentset_id',
        'desiredSize'                         => 'desired_size',
        'imageId'                             => 'image_id',
        'imageType'                           => 'image_type',
        'instanceChargeType'                  => 'instance_charge_type',
        'instancePatterns'                    => 'instance_patterns',
        'instanceTypes'                       => 'instance_types',
        'internetChargeType'                  => 'internet_charge_type',
        'internetMaxBandwidthOut'             => 'internet_max_bandwidth_out',
        'keyPair'                             => 'key_pair',
        'loginAsNonRoot'                      => 'login_as_non_root',
        'loginPassword'                       => 'login_password',
        'multiAzPolicy'                       => 'multi_az_policy',
        'onDemandBaseCapacity'                => 'on_demand_base_capacity',
        'onDemandPercentageAboveBaseCapacity' => 'on_demand_percentage_above_base_capacity',
        'period'                              => 'period',
        'periodUnit'                          => 'period_unit',
        'platform'                            => 'platform',
        'privatePoolOptions'                  => 'private_pool_options',
        'ramPolicy'                           => 'ram_policy',
        'ramRoleName'                         => 'ram_role_name',
        'rdsInstances'                        => 'rds_instances',
        'scalingGroupId'                      => 'scaling_group_id',
        'scalingPolicy'                       => 'scaling_policy',
        'securityGroupId'                     => 'security_group_id',
        'securityGroupIds'                    => 'security_group_ids',
        'securityHardeningOs'                 => 'security_hardening_os',
        'socEnabled'                          => 'soc_enabled',
        'spotInstancePools'                   => 'spot_instance_pools',
        'spotInstanceRemedy'                  => 'spot_instance_remedy',
        'spotPriceLimit'                      => 'spot_price_limit',
        'spotStrategy'                        => 'spot_strategy',
        'systemDiskBurstingEnabled'           => 'system_disk_bursting_enabled',
        'systemDiskCategories'                => 'system_disk_categories',
        'systemDiskCategory'                  => 'system_disk_category',
        'systemDiskEncryptAlgorithm'          => 'system_disk_encrypt_algorithm',
        'systemDiskEncrypted'                 => 'system_disk_encrypted',
        'systemDiskKmsKeyId'                  => 'system_disk_kms_key_id',
        'systemDiskPerformanceLevel'          => 'system_disk_performance_level',
        'systemDiskProvisionedIops'           => 'system_disk_provisioned_iops',
        'systemDiskSize'                      => 'system_disk_size',
        'tags'                                => 'tags',
        'vswitchIds'                          => 'vswitch_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['data_disks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['instance_patterns'] = [];
            if (null !== $this->instancePatterns && \is_array($this->instancePatterns)) {
                $n = 0;
                foreach ($this->instancePatterns as $item) {
                    $res['instance_patterns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceTypes) {
            $res['instance_types'] = $this->instanceTypes;
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
            $res['private_pool_options'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->ramPolicy) {
            $res['ram_policy'] = $this->ramPolicy;
        }
        if (null !== $this->ramRoleName) {
            $res['ram_role_name'] = $this->ramRoleName;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
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
            $res['security_group_ids'] = $this->securityGroupIds;
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
            $res['spot_price_limit'] = [];
            if (null !== $this->spotPriceLimit && \is_array($this->spotPriceLimit)) {
                $n = 0;
                foreach ($this->spotPriceLimit as $item) {
                    $res['spot_price_limit'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['system_disk_categories'] = $this->systemDiskCategories;
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
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingGroup
     */
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
                $n                = 0;
                foreach ($map['data_disks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
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
                $n                       = 0;
                foreach ($map['instance_patterns'] as $item) {
                    $model->instancePatterns[$n++] = null !== $item ? InstancePatterns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = $map['instance_types'];
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
                $model->rdsInstances = $map['rds_instances'];
            }
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
                $model->securityGroupIds = $map['security_group_ids'];
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
                $n                     = 0;
                foreach ($map['spot_price_limit'] as $item) {
                    $model->spotPriceLimit[$n++] = null !== $item ? spotPriceLimit::fromMap($item) : $item;
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
                $model->systemDiskCategories = $map['system_disk_categories'];
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
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
