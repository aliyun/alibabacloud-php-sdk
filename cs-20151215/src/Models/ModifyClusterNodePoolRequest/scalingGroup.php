<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup\dataDisks;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup\tags;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description 数据盘配置。
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description 节点付费类型。
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 节点实例规格。
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description 密钥对名称，和login_password二选一。
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description SSH登录密码，和key_pari二选一。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description RDS实例列表。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 扩容策略。
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description 节点系统盘类型。
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description 节点系统盘大小。
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description ECS标签。
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description VPC网络ID。
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 节点使用的虚拟交换机ID。
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'dataDisks'          => 'data_disks',
        'instanceChargeType' => 'instance_charge_type',
        'instanceTypes'      => 'instance_types',
        'keyPair'            => 'key_pair',
        'loginPassword'      => 'login_password',
        'rdsInstances'       => 'rds_instances',
        'scalingPolicy'      => 'scaling_policy',
        'systemDiskCategory' => 'system_disk_category',
        'systemDiskSize'     => 'system_disk_size',
        'tags'               => 'tags',
        'vpcId'              => 'vpc_id',
        'vswitchIds'         => 'vswitch_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisks) {
            $res['data_disks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceChargeType) {
            $res['instance_charge_type'] = $this->instanceChargeType;
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
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->scalingPolicy) {
            $res['scaling_policy'] = $this->scalingPolicy;
        }
        if (null !== $this->systemDiskCategory) {
            $res['system_disk_category'] = $this->systemDiskCategory;
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
        if (null !== $this->vpcId) {
            $res['vpc_id'] = $this->vpcId;
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
        if (isset($map['data_disks'])) {
            if (!empty($map['data_disks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['data_disks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
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
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['scaling_policy'])) {
            $model->scalingPolicy = $map['scaling_policy'];
        }
        if (isset($map['system_disk_category'])) {
            $model->systemDiskCategory = $map['system_disk_category'];
        }
        if (isset($map['system_disk_size'])) {
            $model->systemDiskSize = $map['system_disk_size'];
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
        if (isset($map['vpc_id'])) {
            $model->vpcId = $map['vpc_id'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
