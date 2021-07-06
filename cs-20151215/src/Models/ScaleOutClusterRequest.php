<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class ScaleOutClusterRequest extends Model
{
    /**
     * @description 扩容节点数
     *
     * @var int
     */
    public $count;

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
     * @description 虚拟交换机
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description Worker节点付费类型
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description Worker节点包年包月时长
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description Worker节点包年包月周期
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description Worker节点到期是否自动续费
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description Worker节点自动续费时长
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description Worker节点实例规格
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description Worker节点系统盘类型
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description Worker节点系统盘大小
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @description Worker节点数据盘配置
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description 在节点上安装云监控
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description CPU亲和性策略
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description 自定义镜像
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 节点自定义数据
     *
     * @var string
     */
    public $userData;

    /**
     * @description RDS白名单
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 节点标签
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description 节点污点信息
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @var Runtime
     */
    public $runtime;
    protected $_name = [
        'count'                    => 'count',
        'keyPair'                  => 'key_pair',
        'loginPassword'            => 'login_password',
        'vswitchIds'               => 'vswitch_ids',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerPeriod'             => 'worker_period',
        'workerPeriodUnit'         => 'worker_period_unit',
        'workerAutoRenew'          => 'worker_auto_renew',
        'workerAutoRenewPeriod'    => 'worker_auto_renew_period',
        'workerInstanceTypes'      => 'worker_instance_types',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskSize'     => 'worker_system_disk_size',
        'workerDataDisks'          => 'worker_data_disks',
        'cloudMonitorFlags'        => 'cloud_monitor_flags',
        'cpuPolicy'                => 'cpu_policy',
        'imageId'                  => 'image_id',
        'userData'                 => 'user_data',
        'rdsInstances'             => 'rds_instances',
        'tags'                     => 'tags',
        'taints'                   => 'taints',
        'runtime'                  => 'runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }
        if (null !== $this->workerPeriod) {
            $res['worker_period'] = $this->workerPeriod;
        }
        if (null !== $this->workerPeriodUnit) {
            $res['worker_period_unit'] = $this->workerPeriodUnit;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }
        if (null !== $this->workerSystemDiskCategory) {
            $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        }
        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
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
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
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
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }
        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
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
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
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
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }

        return $model;
    }
}
