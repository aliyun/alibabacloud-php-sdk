<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\InstanceMetadataOptions;
use AlibabaCloud\Tea\Model;

class controlPlaneConfig extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the nodes.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration for the nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of the control plane node.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether to install CloudMonitor for the node.
     *
     * @example true
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description The CPU management policy of nodes.
     *
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description The ID of the deployment set.
     *
     * @example ds-bp10b35imuam5amw****
     *
     * @var string
     */
    public $deploymentsetId;

    /**
     * @description The image ID.
     *
     * @example aliyun_3_x64_20G_alibase_20240819.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the OS image.
     *
     * @example AliyunLinux3
     *
     * @var string
     */
    public $imageType;

    /**
     * @var InstanceMetadataOptions
     */
    public $instanceMetadataOptions;

    /**
     * @description The instance types of the nodes.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The name of the key pair. You must set key_pair or login_password.
     *
     * @example ack
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The node port range.
     *
     * @example 30000-32767
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @description The subscription duration of nodes in the node pool.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The runtime.
     *
     * @example containerd
     *
     * @var string
     */
    public $runtime;

    /**
     * @description Indicates whether to enable Alibaba Cloud Linux Security Hardening.
     *
     * @example true
     *
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @description The number of control plane nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $size;

    /**
     * @description Indicates whether to enable Multi-Level Protection Scheme (MLPS) security hardening.
     *
     * @example false
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description Indicates whether to enable the burst feature for the system disk.
     *
     * @example true
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The category of the system disk for nodes.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level (PL) of the system disk that you want to use for the node. This parameter takes effect only for ESSDs.
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The preset read/write IOPS of the system disk.
     *
     * @example 1000
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The system disk size of the node. The value must be at least 40 GB.
     *
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The automatic snapshot policy of the node.
     *
     * @example sp-2zej1nogjvovnz4z****
     *
     * @var string
     */
    public $systemDiskSnapshotPolicyId;
    protected $_name = [
        'autoRenew' => 'auto_renew',
        'autoRenewPeriod' => 'auto_renew_period',
        'chargeType' => 'charge_type',
        'cloudMonitorFlags' => 'cloud_monitor_flags',
        'cpuPolicy' => 'cpu_policy',
        'deploymentsetId' => 'deploymentset_id',
        'imageId' => 'image_id',
        'imageType' => 'image_type',
        'instanceMetadataOptions' => 'instance_metadata_options',
        'instanceTypes' => 'instance_types',
        'keyPair' => 'key_pair',
        'nodePortRange' => 'node_port_range',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'runtime' => 'runtime',
        'securityHardeningOs' => 'security_hardening_os',
        'size' => 'size',
        'socEnabled' => 'soc_enabled',
        'systemDiskBurstingEnabled' => 'system_disk_bursting_enabled',
        'systemDiskCategory' => 'system_disk_category',
        'systemDiskPerformanceLevel' => 'system_disk_performance_level',
        'systemDiskProvisionedIops' => 'system_disk_provisioned_iops',
        'systemDiskSize' => 'system_disk_size',
        'systemDiskSnapshotPolicyId' => 'system_disk_snapshot_policy_id',
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
        if (null !== $this->chargeType) {
            $res['charge_type'] = $this->chargeType;
        }
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->deploymentsetId) {
            $res['deploymentset_id'] = $this->deploymentsetId;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }
        if (null !== $this->instanceMetadataOptions) {
            $res['instance_metadata_options'] = null !== $this->instanceMetadataOptions ? $this->instanceMetadataOptions->toMap() : null;
        }
        if (null !== $this->instanceTypes) {
            $res['instance_types'] = $this->instanceTypes;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->nodePortRange) {
            $res['node_port_range'] = $this->nodePortRange;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }
        if (null !== $this->securityHardeningOs) {
            $res['security_hardening_os'] = $this->securityHardeningOs;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->socEnabled) {
            $res['soc_enabled'] = $this->socEnabled;
        }
        if (null !== $this->systemDiskBurstingEnabled) {
            $res['system_disk_bursting_enabled'] = $this->systemDiskBurstingEnabled;
        }
        if (null !== $this->systemDiskCategory) {
            $res['system_disk_category'] = $this->systemDiskCategory;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPlaneConfig
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
        if (isset($map['charge_type'])) {
            $model->chargeType = $map['charge_type'];
        }
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['deploymentset_id'])) {
            $model->deploymentsetId = $map['deploymentset_id'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }
        if (isset($map['instance_metadata_options'])) {
            $model->instanceMetadataOptions = InstanceMetadataOptions::fromMap($map['instance_metadata_options']);
        }
        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = $map['instance_types'];
            }
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['node_port_range'])) {
            $model->nodePortRange = $map['node_port_range'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['security_hardening_os'])) {
            $model->securityHardeningOs = $map['security_hardening_os'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['soc_enabled'])) {
            $model->socEnabled = $map['soc_enabled'];
        }
        if (isset($map['system_disk_bursting_enabled'])) {
            $model->systemDiskBurstingEnabled = $map['system_disk_bursting_enabled'];
        }
        if (isset($map['system_disk_category'])) {
            $model->systemDiskCategory = $map['system_disk_category'];
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

        return $model;
    }
}
