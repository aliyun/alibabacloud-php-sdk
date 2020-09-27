<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\runtime;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\tags;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\taints;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class ScaleOutClusterRequest extends Model
{
    /**
     * @description 是否安装云监控插件。
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description 扩容实例数量。
     *
     * @var int
     */
    public $count;

    /**
     * @description CPU策略，取值static或者none。
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
     * @description 自定义镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description keypair名称，和login_password二选一。
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description SSH登录密码，和key_pair二选一。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description RDS白名单实例列表。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 容器引擎。
     *
     * @var runtime
     */
    public $runtime;

    /**
     * @description 节点标签。
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 节点污点信息。
     *
     * @var taints[]
     */
    public $taints;

    /**
     * @description 用户自定义数据。
     *
     * @var string
     */
    public $userData;

    /**
     * @description 节点交换机ID列表，交换机个数取值范围为1~3。
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description Worker节点是否开启自动续费。
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description Worker节点自动续费周期。
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description Worker节点是否挂载数据盘。
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
     * @description Worker节点付费类型。
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description Worker节点ECS规格类型代码。
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description Worker节点包年包月时长。
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description Worker节点预付费周期。
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description Worker节点系统盘类型。
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description Worker节点系统盘大小。
     *
     * @var int
     */
    public $workerSystemDiskSize;
    protected $_name = [
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'count'                    => 'count',
        'cpuPolicy'                => 'cpu_policy',
        'disableRollback'          => 'disable_rollback',
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
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
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
            $model->runtime = runtime::fromMap($map['runtime']);
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
