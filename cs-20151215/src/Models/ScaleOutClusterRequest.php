<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest\workerDataDisks;

class ScaleOutClusterRequest extends Model
{
    /**
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $cpuPolicy;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var Taint[]
     */
    public $taints;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @var int
     */
    public $workerPeriod;

    /**
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @var int
     */
    public $workerSystemDiskSize;
    protected $_name = [
        'cloudMonitorFlags' => 'cloud_monitor_flags',
        'count' => 'count',
        'cpuPolicy' => 'cpu_policy',
        'imageId' => 'image_id',
        'keyPair' => 'key_pair',
        'loginPassword' => 'login_password',
        'rdsInstances' => 'rds_instances',
        'runtime' => 'runtime',
        'tags' => 'tags',
        'taints' => 'taints',
        'userData' => 'user_data',
        'vswitchIds' => 'vswitch_ids',
        'workerAutoRenew' => 'worker_auto_renew',
        'workerAutoRenewPeriod' => 'worker_auto_renew_period',
        'workerDataDisks' => 'worker_data_disks',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerInstanceTypes' => 'worker_instance_types',
        'workerPeriod' => 'worker_period',
        'workerPeriodUnit' => 'worker_period_unit',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskSize' => 'worker_system_disk_size',
    ];

    public function validate()
    {
        if (\is_array($this->rdsInstances)) {
            Model::validateArray($this->rdsInstances);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->taints)) {
            Model::validateArray($this->taints);
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        if (\is_array($this->workerDataDisks)) {
            Model::validateArray($this->workerDataDisks);
        }
        if (\is_array($this->workerInstanceTypes)) {
            Model::validateArray($this->workerInstanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->rdsInstances)) {
                $res['rds_instances'] = [];
                $n1 = 0;
                foreach ($this->rdsInstances as $item1) {
                    $res['rds_instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taints) {
            if (\is_array($this->taints)) {
                $res['taints'] = [];
                $n1 = 0;
                foreach ($this->taints as $item1) {
                    $res['taints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }

        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }

        if (null !== $this->workerDataDisks) {
            if (\is_array($this->workerDataDisks)) {
                $res['worker_data_disks'] = [];
                $n1 = 0;
                foreach ($this->workerDataDisks as $item1) {
                    $res['worker_data_disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }

        if (null !== $this->workerInstanceTypes) {
            if (\is_array($this->workerInstanceTypes)) {
                $res['worker_instance_types'] = [];
                $n1 = 0;
                foreach ($this->workerInstanceTypes as $item1) {
                    $res['worker_instance_types'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->rdsInstances = [];
                $n1 = 0;
                foreach ($map['rds_instances'] as $item1) {
                    $model->rdsInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n1 = 0;
                foreach ($map['taints'] as $item1) {
                    $model->taints[$n1] = Taint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitch_ids'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['worker_data_disks'] as $item1) {
                    $model->workerDataDisks[$n1] = workerDataDisks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }

        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = [];
                $n1 = 0;
                foreach ($map['worker_instance_types'] as $item1) {
                    $model->workerInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
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
