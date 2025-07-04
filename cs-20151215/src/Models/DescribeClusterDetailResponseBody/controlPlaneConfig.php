<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;

class controlPlaneConfig extends Model
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
     * @var string
     */
    public $chargeType;

    /**
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @var string
     */
    public $cpuPolicy;

    /**
     * @var string
     */
    public $deploymentsetId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $nodePortRange;

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
    public $runtime;

    /**
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $socEnabled;

    /**
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @var string
     */
    public $systemDiskCategory;

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

    public function validate()
    {
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
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
            if (\is_array($this->instanceTypes)) {
                $res['instance_types'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['instance_types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['instance_types'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
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
