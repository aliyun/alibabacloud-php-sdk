<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class ScaleOutClusterRequest extends Model
{
    /**
     * @description Specifies whether to install the CloudMonitor agent. Valid values:
     *
     *   `true`: installs the CloudMonitor agent.
     *   `false`: does not install the CloudMonitor agent.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description The number of worker nodes that you want to add.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The CPU management policy of the nodes in a node pool. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later.
     *
     *   `static`: This policy allows pods with specific resource characteristics on the node to be granted with enhanced CPU affinity and exclusivity.
     *   `none`: The default CPU affinity is used.
     *
     * Default value: `none`.
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description Specifies a custom image for nodes. By default, the image provided by Container Service for Kubernetes (ACK) is used. You can select a custom image to replace the default image. For more information, see [Custom images](https://help.aliyun.com/document_detail/146647.html).
     *
     * @example m-bp16z7xko3vvv8gt****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the key pair. You must set this parameter or the `login_password` parameter.
     *
     * This parameter is required.
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The password for SSH logon. You must set this parameter or the `key_pair` parameter. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * This parameter is required.
     * @example Hello@1234
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description After you specify the list of ApsaraDB RDS instances, the ECS instances in the cluster are automatically added to the whitelist of the ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The container runtime.
     *
     * @var Runtime
     */
    public $runtime;

    /**
     * @description The labels that you want to add to nodes. You must add labels based on the following rules:
     *
     *   Each label is a case-sensitive key-value pair. You can add up to 20 labels.
     *   A key must be unique and cannot exceed 64 characters in length. A value can be empty and cannot exceed 128 characters in length. Keys and values cannot start with aliyun, acs:, https://, or http://. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The taints that you want to add to nodes. Taints are added to nodes to prevent pods from being scheduled to inappropriate nodes. However, tolerations allow pods to be scheduled to nodes with matching taints. For more information, see [Taints and Tolerations](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/).
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description The user data of the node pool. For more information, see [Generate user-defined data](https://help.aliyun.com/document_detail/49121.html).
     *
     * @example IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFD****
     *
     * @var string
     */
    public $userData;

    /**
     * @description The IDs of the vSwitches. You can select one to three vSwitches when you create a cluster. We recommend that you select vSwitches in different zones to ensure high availability.
     *
     * This parameter is required.
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description Specifies whether to enable auto-renewal for worker nodes. This parameter takes effect only if `worker_instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description The auto-renewal period for worker nodes after the subscriptions of worker nodes expire. This parameter takes effect and is required only if the subscription billing method is selected for worker nodes.
     *
     * Default value: `1`.
     * @example 6
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description The configuration of the data disk that is mounted to worker nodes. The configuration includes the disk type and disk size.
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description The billing method of worker nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: `PostPaid`.
     * @example PrePaid
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description The instance configurations of worker nodes.
     *
     * This parameter is required.
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description The subscription duration of worker nodes. This parameter takes effect and is required only if `worker_instance_charge_type` is set to `PrePaid`.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description The billing cycle of worker nodes. This parameter is required if worker_instance_charge_type is set to `PrePaid`.
     *
     * Set the value to `Month`. Worker nodes are billed only on a monthly basis.
     * @example Month
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description The type of system disk that you want to use for worker nodes. Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *   `cloud_essd`: enhanced SSD (ESSD).
     *
     * This parameter is required.
     * @example cloud_efficiency
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description The size of the system disk that you want to use for worker nodes. Unit: GiB.
     *
     * This parameter is required.
     * @example 120
     *
     * @var int
     */
    public $workerSystemDiskSize;
    protected $_name = [
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'count'                    => 'count',
        'cpuPolicy'                => 'cpu_policy',
        'imageId'                  => 'image_id',
        'keyPair'                  => 'key_pair',
        'loginPassword'            => 'login_password',
        'rdsInstances'             => 'rds_instances',
        'runtime'                  => 'runtime',
        'tags'                     => 'tags',
        'taints'                   => 'taints',
        'userData'                 => 'user_data',
        'vswitchIds'               => 'vswitch_ids',
        'workerAutoRenew'          => 'worker_auto_renew',
        'workerAutoRenewPeriod'    => 'worker_auto_renew_period',
        'workerDataDisks'          => 'worker_data_disks',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerInstanceTypes'      => 'worker_instance_types',
        'workerPeriod'             => 'worker_period',
        'workerPeriodUnit'         => 'worker_period_unit',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskSize'     => 'worker_system_disk_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
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
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->workerDataDisks) {
            $res['worker_data_disks'] = [];
            if (null !== $this->workerDataDisks && \is_array($this->workerDataDisks)) {
                $n = 0;
                foreach ($this->workerDataDisks as $item) {
                    $res['worker_data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }
        if (null !== $this->workerPeriod) {
            $res['worker_period'] = $this->workerPeriod;
        }
        if (null !== $this->workerPeriodUnit) {
            $res['worker_period_unit'] = $this->workerPeriodUnit;
        }
        if (null !== $this->workerSystemDiskCategory) {
            $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        }
        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleOutClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
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
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? Taint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? workerDataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
        }

        return $model;
    }
}
