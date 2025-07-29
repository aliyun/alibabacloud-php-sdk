<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Tea\Model;

class controlPlaneConfig extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal for control plane nodes. This parameter takes effect only when `charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of control plane nodes. Valid values: 1, 2, 3, 6, and 12.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of control plane nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: `PostPaid`.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Specifies whether to install the CloudMonitor agent. Valid values:
     *
     *   `true`: installs the CloudMonitor agent.
     *   `false`: does not install the CloudMonitor agent.
     *
     * @example true
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description The CPU management policy of nodes in the node pool. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted with enhanced CPU affinity and exclusivity.
     *   `none`: specifies that the default CPU affinity is used.
     *
     * Default value: `none`.
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
     * @description The custom image ID. You must configure this parameter if you use a custom image.
     *
     * @example aliyun_3_x64_20G_alibase_20240819.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the OS image. Valid values:
     *
     *   `AliyunLinux3`: Alibaba Cloud Linux 3.
     *   `Custom`: the custom image.
     *
     * @example AliyunLinux3
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The type of instance. For more information, see [Overview of ECS instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The name of the key pair. You must configure either this parameter or the `login_password` parameter.
     *
     * @example ack
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The password for SSH logon. You must configure either this parameter or the `key_pair` parameter. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. To log on with a password, you must specify this parameter during the scale-out.
     *
     * @example Ack@2000.
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The node port range.
     *
     * @example 30000-32767
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @description The subscription duration of the instance. This parameter takes effect and is required only when `charge_type` is set to `PrePaid`.
     *
     * If `PeriodUnit=Month` is specified, the valid values are 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of control plane nodes. This parameter takes effect only when `instance_charge_type` is set to `PrePaid`.
     *
     * Set the value to `Month`.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The type of the container runtime. Valid values:
     *
     *   `containerd`: supports all Kubernetes versions. We recommend that you set the parameter to this value.
     *
     * Default value: containerd.
     *
     * @example containerd
     *
     * @var string
     */
    public $runtime;

    /**
     * @description Specifies whether to enable Alibaba Cloud Linux Security Hardening. Valid values:
     *
     *   `true`: enables Alibaba Cloud Linux Security Hardening.
     *   `false`: disables Alibaba Cloud Linux Security Hardening.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @description The number of control plane nodes. If you want to scale out the control plane in an ACK dedicated cluster, set this parameter to the desired number of nodes. This parameter must be greater than the current number of nodes.
     *
     * @example 5
     *
     * @var int
     */
    public $size;

    /**
     * @description Specifies whether to enable Multi-Level Protection Scheme (MLPS) security hardening. For more information, see [ACK security hardening based on MLPS](https://help.aliyun.com/document_detail/196148.html).
     *
     * Valid values:
     *
     *   `true`: enables MLPS security hardening.
     *   `false`: disables MLPS security hardening.
     *
     * Default value: `false`.
     *
     * @example false
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description Specifies whether to enable the burst feature for the system disk. Valid values:
     *
     *   `true`: enables the burst feature.
     *   `false`: disables the burst feature.
     *
     * This parameter is effective only when `system_disk_category` is set to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example true
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The category of the system disk for nodes. Valid values:
     *
     *   `cloud`: basic disk.
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *   `cloud_essd`: Enterprise ESSD (ESSD).
     *   `cloud_auto`: ESSD AutoPL disk.
     *   `cloud_essd_entry`: ESSD Entry disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level (PL) of the system disk that you want to use for the node. This parameter is effective only for ESSDs. This parameter is related to the disk size. For more information, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The preset read/write input/output operations per second (IOPS) of the system disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}.
     *
     * This parameter is effective only when `system_disk_category` is set to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 1000
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The type of the system disk. Valid values: [40,500]. Unit: GiB.
     *
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The ID of the automatic snapshot policy applied to the node system disk.
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
        'instanceTypes' => 'instance_types',
        'keyPair' => 'key_pair',
        'loginPassword' => 'login_password',
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
        if (null !== $this->instanceTypes) {
            $res['instance_types'] = $this->instanceTypes;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
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
        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = $map['instance_types'];
            }
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
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
