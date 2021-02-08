<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest\tags;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest\taints;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class ScaleClusterRequest extends Model
{
    /**
     * @description 节点是否安装云监控插件。
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description 扩容节点数。
     *
     * @var int
     */
    public $count;

    /**
     * @description 节点CPU策略。
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description 失败是否回滚。
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description keypair名称，和login_password二选一。
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description SSH登录密码。和keypair二选一。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description 集群标签。
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 节点污点标记。
     *
     * @var taints[]
     */
    public $taints;

    /**
     * @description 节点交换机ID列表。
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description 节点是否开启Worker节点自动续费。
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description 自动续费周期。
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description 是否挂载数据盘。
     *
     * @var bool
     */
    public $workerDataDisk;

    /**
     * @description Worker数据盘类型、大小等配置的组合。
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description 节点付费类型。
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description Worker节点ECS规格类型。
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description 节点包年包月时长。
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description 当指定为PrePaid的时候需要指定周期。
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description 节点系统盘类型。
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description 节点系统盘大小
     *
     * @var int
     */
    public $workerSystemDiskSize;
    protected $_name = [
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'count'                    => 'count',
        'cpuPolicy'                => 'cpu_policy',
        'disableRollback'          => 'disable_rollback',
        'keyPair'                  => 'key_pair',
        'loginPassword'            => 'login_password',
        'tags'                     => 'tags',
        'taints'                   => 'taints',
        'vswitchIds'               => 'vswitch_ids',
        'workerAutoRenew'          => 'worker_auto_renew',
        'workerAutoRenewPeriod'    => 'worker_auto_renew_period',
        'workerDataDisk'           => 'worker_data_disk',
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
        if (null !== $this->disableRollback) {
            $res['disable_rollback'] = $this->disableRollback;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
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
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->workerDataDisk) {
            $res['worker_data_disk'] = $this->workerDataDisk;
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
     * @return ScaleClusterRequest
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
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
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
        if (isset($map['worker_data_disk'])) {
            $model->workerDataDisk = $map['worker_data_disk'];
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
