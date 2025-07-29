<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\SDK\CS\V20151215\Models\InstancePatterns;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup\privatePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup\spotPriceLimit;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal for the nodes in the node pool. This parameter takes effect only when you set `instance_charge_type` to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period. Valid values:
     *
     *   Valid values when PeriodUnit is set to Week: 1, 2, and 3.
     *   Valid values when PeriodUnit is set to Month: 1, 2, 3, 6, 12, 24, 36, 48, and 60
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description Specifies whether to automatically create pay-as-you-go instances to meet the required number of ECS instances if preemptible instances cannot be created due to reasons such as the price or insufficient inventory. This parameter takes effect when you set `multi_az_policy` to `COST_OPTIMIZED`. Valid values:
     *
     *   `true`: automatically creates pay-as-you-go instances to meet the required number of ECS instances if preemptible instances cannot be created.
     *   `false`: does not create pay-as-you-go instances to meet the required number of ECS instances if preemptible instances cannot be created.
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The configurations of the data disks that are mounted to nodes in the node pool. Valid values: 0 to 10. You can mount at most 10 data disks to the nodes in the node pool.
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @example ds-bp1d19mmbsv3jf6xxxxx
     *
     * @var string
     */
    public $deploymentsetId;

    /**
     * @description The expected number of nodes in the node pool.
     *
     * The expected number of nodes in the node pool. We recommend that you configure at least two nodes to ensure that cluster components run as expected. You can modify the Expected Nodes parameter to adjust the number of nodes in the node pool.
     *
     * If you do not want to create nodes in the node pool, set this parameter to 0. You can manually modify this parameter to add nodes later.
     *
     * @example 2
     *
     * @var int
     */
    public $desiredSize;

    /**
     * @description The custom image ID. You can call the `DescribeKubernetesVersionMetadata` operation to query the images supported by ACK. By default, the latest image is used.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200904.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of operating system distribution that you want to use. We recommend that you use this parameter to specify the node operating system. Valid values:
     *
     *   `AliyunLinux`: Alibaba Cloud Linux 2.
     *   `AliyunLinuxSecurity`: Alibaba Cloud Linux 2 (UEFI).
     *   `AliyunLinux3`: Alibaba Cloud Linux 3.
     *   `AliyunLinux3Arm64`: Alibaba Cloud Linux 3 for ARM.
     *   `AliyunLinux3Security`: Alibaba Cloud Linux 3 (UEFI).
     *   `CentOS`: CentOS.
     *   `Windows`: Windows.
     *   `WindowsCore`: Windows Core.
     *   `ContainerOS`: ContainerOS.
     *   `AliyunLinux3ContainerOptimized`: Alibaba Cloud Linux 3 Container-optimized.
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The billing method of nodes in the node pool. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: `PostPaid`.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description .The instance attributes.
     *
     * @var InstancePatterns[]
     */
    public $instancePatterns;

    /**
     * @description The instance types. You can specify multiple instance types. A node is assigned the instance type from the first instance type of the list until the node is created. The instance type that is used to create the node varies based on the actual instance stock.
     *
     * You can specify 1 to 10 instance types.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The metering method of the public IP address. Valid values:
     *
     *   `PayByBandwidth`: pay-by-bandwidth.
     *   `PayByTraffic`: pay-by-data-transfer.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound bandwidth of the public IP address of the node. Unit: Mbit/s. Valid values: 1 to 100.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the key pair. You must specify this parameter or `login_password`. You must specify the `key_pair` parameter if the node pool is a managed node pool.
     *
     * @example pro-nodepool
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The password for SSH logon. You must specify this parameter or `key_pair`. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * @example Hello1234
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The ECS instance scaling policy for the multi-zone scaling group. Valid values:
     *
     *   `PRIORITY`: ECS instances are scaled based on the value of VSwitchIds.N. If an ECS instance cannot be created in the zone where the vSwitch that has the highest priority resides, the system creates the ECS instance in the zone where the vSwitch that has the next highest priority resides.
     *
     *   `COST_OPTIMIZED`: ECS instances are created based on the vCPU unit price in ascending order. Preemptible instances are preferably created if preemptible instance types are specified in the scaling configurations. You can set the `CompensateWithOnDemand` parameter to specify whether to automatically create pay-as-you-go instances when preemptible instances cannot be created due to insufficient inventory.
     * Default value: `PRIORITY`.
     * @example BALANCE
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description The minimum number of pay-as-you-go instances that must be kept in the scaling group. Valid values: 0 to 1000. If the number of pay-as-you-go instances is less than the value of this parameter, the system preferably creates pay-as-you-go instances.
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
     * @description The subscription duration of nodes in the node pool. This parameter takes effect and is required if you set `instance_charge_type` to `PrePaid`.
     *
     *   If `period_unit` is set to Week, the valid values of `period` are 1, 2, 3, and 4.
     *   If `period_unit` is set to Month, the valid values of `period` are 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of nodes in the node pool. This parameter takes effect and is required if you set `instance_charge_type` to `PrePaid`. Valid values:
     *
     *   `Month`: The subscription duration is measured in months.
     *   `Week`: The subscription duration is measured in weeks.
     *
     * Default value: `Month`.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is obsolete. Use the `image_type` parameter instead.
     *
     * The OS platform. Valid values:
     *
     *   `AliyunLinux`
     *   `CentOS`
     *   `Windows`
     *   `WindowsCore`
     *
     * @example AliyunLinux
     *
     * @deprecated
     *
     * @var string
     */
    public $platform;

    /**
     * @description The configurations of the private node pool.
     *
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @description The IDs of ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

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
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The number of instance types that are available for creating preemptible instances. Auto Scaling creates preemptible instances of multiple instance types that are available at the lowest cost. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Specifies whether to enable the supplementation of preemptible instances. If you set this parameter to true, when the scaling group receives a system message indicating that a preemptible instance is to be reclaimed, the scaling group attempts to create a new instance to replace the instance. Valid values:
     *
     *   `true`: supplements preemptible instances.
     *   `false`: does not supplement preemptible instances.
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
     * @description The bidding policy of preemptible instances. Valid values:
     *
     *   `NoSpot`: non-preemptible instance.
     *   `SpotWithPriceLimit`: specifies the highest bid.
     *   `SpotAsPriceGo`: automatically submits bids based on the up-to-date market price.
     *
     * For more information, see [Create a preemptible elastic container instance](https://help.aliyun.com/document_detail/157759.html).
     *
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description Specifies whether to enable the burst feature for the system disk. Valid values:
     *
     *   true: enables the burst feature.
     *   false: disables the burst feature.
     *
     * This parameter is effective only when `system_disk_category` is set to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example true
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The categories of the system disk. The system attempts to create system disks of a disk category with a lower priority if the disk category with a higher priority is unavailable.
     *
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *   `cloud_essd`: Enterprise ESSD (ESSD).
     *   `cloud_auto`: ESSD AutoPL disk.
     *   `cloud_essd_entry`: ESSD Entry disk.
     *
     * Default value: `cloud_efficiency`.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The encryption algorithm that is used to encrypt the system disk. Set the value to aes-256.
     *
     * @example aes-256
     *
     * @var string
     */
    public $systemDiskEncryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the system disk. Valid values:
     *
     *   true: encrypts the system disk.
     *   false: does not encrypt the system disk.
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
     * @description The performance level (PL) of the system disk. This parameter takes effect only for an ESSD. You can specify a higher PL if you increase the size of the data disk. For more information, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     *   PL0: moderate maximum concurrent I/O performance and low I/O latency.
     *   PL1: moderate maximum concurrent I/O performance and low I/O latency.
     *   PL2: high maximum concurrent I/O performance and low I/O latency.
     *   PL3: ultra-high maximum concurrent I/O performance and ultra-low I/O latency.
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The preset IOPS of the system disk.
     *
     * Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}.
     *
     * This parameter is effective only when `system_disk_category` is set to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 1000
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The size of the system disk. Unit: GiB
     *
     * Valid values: 20 to 2048.
     *
     * The value of this parameter must be at least 20 and greater than or equal to the size of the image.
     *
     * Default value: the greater value between 40 and the image size.
     *
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags that you want to add only to ECS instances.
     *
     * The tag key must be unique and cannot exceed 128 characters in length. The tag key and value cannot start with aliyun or acs: or contain https:// or http://.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The vSwitch IDs. You can specify one to eight vSwitch IDs.
     *
     * >  To ensure high availability, we recommend that you select vSwitches that reside in different zones.
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'autoRenew' => 'auto_renew',
        'autoRenewPeriod' => 'auto_renew_period',
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
        'loginPassword' => 'login_password',
        'multiAzPolicy' => 'multi_az_policy',
        'onDemandBaseCapacity' => 'on_demand_base_capacity',
        'onDemandPercentageAboveBaseCapacity' => 'on_demand_percentage_above_base_capacity',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'platform' => 'platform',
        'privatePoolOptions' => 'private_pool_options',
        'rdsInstances' => 'rds_instances',
        'scalingPolicy' => 'scaling_policy',
        'securityGroupIds' => 'security_group_ids',
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
        'tags' => 'tags',
        'vswitchIds' => 'vswitch_ids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
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
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->scalingPolicy) {
            $res['scaling_policy'] = $this->scalingPolicy;
        }
        if (null !== $this->securityGroupIds) {
            $res['security_group_ids'] = $this->securityGroupIds;
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
        if (isset($map['compensate_with_on_demand'])) {
            $model->compensateWithOnDemand = $map['compensate_with_on_demand'];
        }
        if (isset($map['data_disks'])) {
            if (!empty($map['data_disks'])) {
                $model->dataDisks = [];
                $n = 0;
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
                $n = 0;
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
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['scaling_policy'])) {
            $model->scalingPolicy = $map['scaling_policy'];
        }
        if (isset($map['security_group_ids'])) {
            if (!empty($map['security_group_ids'])) {
                $model->securityGroupIds = $map['security_group_ids'];
            }
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
                $n = 0;
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
                $n = 0;
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
