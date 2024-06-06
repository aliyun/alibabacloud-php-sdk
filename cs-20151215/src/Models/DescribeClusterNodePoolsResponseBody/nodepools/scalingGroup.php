<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\privatePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\spotPriceLimit;
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
     * @description The auto-renewal duration of the nodes in the node pool. This parameter is available and required only when `instance_charge_type` is set to `PrePaid`.
     *
     * Valid values when `period_unit` is set to Month: 1, 2, 3, 6, and 12.
     * @example 0
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description This parameter is deprecated. Use the security_hardening_os parameter instead.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @description Indicates whether pay-as-you-go instances are automatically created to meet the required number of ECS instances if preemptible instances cannot be created due to reasons such as the cost or insufficient inventory. This parameter takes effect when `multi_az_policy` is set to `COST_OPTIMIZED`. Valid values:
     *
     *   `true`: Pay-as-you-go instances are automatically created to meet the required number of ECS instances.
     *   `false`: Pay-as-you-go instances are not automatically created to meet the required number of ECS instances.
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The configurations of the data disks that are mounted to the nodes in the node pool. The configurations include the disk type and disk size.
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @description The ID of the deployment set.
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
     * @description The type of the OS image.
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The billing method of the nodes in the node pool. Valid values:
     *
     *   `PrePaid`: subscription
     *   `PostPaid`: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The list of instance types. You can select multiple instance types. When the system needs to create a node, it starts from the first instance type until the node is created. The instance type that is used to create the node varies based on the inventory.
     *
     * @example ecs.n4.large
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The metering method of the public IP address.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound bandwidth of the public IP address. Unit: Mbit/s. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the key pair. Either this parameter or the `login_password` parameter is specified.
     *
     * Only the `key_pair` parameter is supported if the node pool is a managed node pool.
     * @example pro-nodepool
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description Indicates whether a non-root user can log on to an ECS instance added to the node pool.
     *
     * @example true
     *
     * @var bool
     */
    public $loginAsNonRoot;

    /**
     * @description The password for SSH logon. Either this parameter or the `key_pair` parameter is specified. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * For security purposes, the returned password is encrypted.
     * @example ******
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The ECS instance scaling policy for the multi-zone scaling group. Valid values:
     *
     *   `PRIORITY`: ECS instances are created based on the VSwitchIds.N parameter. If an ECS instance cannot be created in the zone where the vSwitch that has the highest priority resides, Auto Scaling creates the ECS instance in the zone where the vSwitch that has the next highest priority resides.
     *
     *   `COST_OPTIMIZED`: ECS instances are created based on the vCPU unit price in ascending order. Preemptible instances are preferably created when preemptible instance types are specified in the scaling configuration. You can set the `CompensateWithOnDemand` parameter to specify whether to automatically create pay-as-you-go instances when preemptible instances cannot be created due to insufficient resources.
     *
     **
     *
     **Note** `COST_OPTIMIZED` is valid only when multiple instance types are specified or at least one preemptible instance type is specified.
     *
     *   `BALANCE`: ECS instances are evenly distributed across multiple zones specified by the scaling group. If the distribution of ECS instances across zones is not balanced due to reasons such as insufficient inventory, you can call the `RebalanceInstances` operation to evenly distribute the ECS instances across zones. For more information, see [RebalanceInstances](https://help.aliyun.com/document_detail/71516.html).
     *
     * @example COST_OPTIMIZED
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
     * @description The subscription duration of the nodes in the node pool. This parameter is available and required only when `instance_charge_type` is set to `PrePaid`.
     *
     * Valid values when `period_unit` is set to Month: 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the nodes in the node pool. This parameter takes effect only when `instance_charge_type` is set to `PrePaid`.
     *
     * Valid value: `Month`.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The OS distribution. Valid values:
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
     * @description The ApsaraDB RDS instances. If you specify the list of ApsaraDB RDS instances, ECS instances in the cluster are automatically added to the whitelist of the ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-2ze8n5qw4atggut8****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling mode of the scaling group. Valid values:
     *
     *   `release`: the standard mode. ECS instances are created and released based on the resource usage.
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
     * @example sg-2ze1iuk12m2sb4c4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of security groups for the node pool.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description Indicates whether Alibaba Cloud Linux Security Hardening is enabled. Valid values:
     *
     *   `true`: Alibaba Cloud Linux Security Hardening is enabled.
     *   `false`: Alibaba Cloud Linux Security Hardening is disabled.
     *
     * Default value: `false`
     * @example false
     *
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @description Indicates whether reinforcement based on classified protection is enabled. Reinforcement based on classified protection can be enabled only when Alibaba Cloud Linux 2 or Alibaba Cloud Linux 3 is installed on nodes. Alibaba Cloud provides standards for baseline check and a scanner to ensure the compliance of Alibaba Cloud Linux 2 and Alibaba Cloud Linux 3 images with the level 3 standards of classified protection.
     *
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
     * @description Indicates whether supplementation of preemptible instances is enabled. If the value of this parameter is true, when the scaling group receives a system message indicating that a preemptible instance is to be reclaimed, the scaling group attempts to create a new instance to replace this instance. Valid values:
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
     * @description The bid configuration of preemptible instances.
     *
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy of preemptible instances. Valid values:
     *
     *   NoSpot: non-preemptible.
     *   SpotWithPriceLimit: the highest bid is specified.
     *   SpotAsPriceGo: bids based on the up-to-date market price are submitted.
     *
     * For more information, see [Preemptible instances](https://help.aliyun.com/document_detail/157759.html).
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description Indicates whether the burst feature is enabled for the system disk when the disk type is cloud_auto.
     *
     * @example true
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The types of system disks. The system attempts to create system disks from a disk type with a lower priority when the disk type with a higher priority is unavailable. Valid values: cloud (disk), cloud_efficiency (ultra disk), cloud_ssd (standard SSD), and cloud_essd (ESSD).
     *
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The type of system disk. Valid values:
     *
     *   `cloud_efficiency`: ultra disk
     *   `cloud_ssd`: standard SSD
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The algorithm that is used to encrypt the system disk. The value is aes-256.
     *
     * @example aes-256
     *
     * @var string
     */
    public $systemDiskEncryptAlgorithm;

    /**
     * @description Indicates whether the system disk is encrypted. Valid values:
     *
     *   true: The system disk is encrypted.
     *   false: The system disk is not encrypted.
     *
     * @example false
     *
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used to encrypt the system disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $systemDiskKmsKeyId;

    /**
     * @description The performance level (PL) of the system disk. This parameter takes effect only for an ESSD.
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The preset read/write IOPS of the system disk when the disk type is cloud_auto.
     *
     * @example 1000
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * Valid values: 20 to 500.
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags that are added only to ECS instances.
     *
     * The tag key must be unique and cannot exceed 128 characters in length. The tag key and value must not start with aliyun or acs: or contain https:// or http://.
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The IDs of vSwitches. Allowed number of vSwitches: 1 to 8.
     *
     * >  To ensure high availability, we recommend that you select vSwitches in different zones.
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
