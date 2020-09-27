<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup\dataDisks;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup\tags;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description 节点是否开启自动续费。
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 节点自动续费周期。
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description 数据盘配置。
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description 自定义镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 节点付费类型。
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 节点ECS规格类型。
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description 多可用区策略。
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description 节点包年包月时长。
     *
     * @var int
     */
    public $period;

    /**
     * @description 节点付费周期。
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description 操作系统发行版。取值： CentOS，AliyunLinux，Windows，WindowsCore。
     *
     * @var string
     */
    public $platform;

    /**
     * @description 节点RAM 角色名称。
     *
     * @var string
     */
    public $ramPolicy;

    /**
     * @description RDS实例列表。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 扩容组ID。
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description 扩容策略。
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description 节点所属安全组ID。
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 系统盘类型
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description 系统盘大小
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description ECS标签
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 虚拟交换机ID。
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'autoRenew'          => 'auto_renew',
        'autoRenewPeriod'    => 'auto_renew_period',
        'dataDisks'          => 'data_disks',
        'imageId'            => 'image_id',
        'instanceChargeType' => 'instance_charge_type',
        'instanceTypes'      => 'instance_types',
        'multiAzPolicy'      => 'multi_az_policy',
        'period'             => 'period',
        'periodUnit'         => 'period_unit',
        'platform'           => 'platform',
        'ramPolicy'          => 'ram_policy',
        'rdsInstances'       => 'rds_instances',
        'scalingGroupId'     => 'scaling_group_id',
        'scalingPolicy'      => 'scaling_policy',
        'securityGroupId'    => 'security_group_id',
        'systemDiskCategory' => 'system_disk_category',
        'systemDiskSize'     => 'system_disk_size',
        'tags'               => 'tags',
        'vswitchIds'         => 'vswitch_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
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
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['instance_charge_type'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceTypes) {
            $res['instance_types'] = $this->instanceTypes;
        }
        if (null !== $this->multiAzPolicy) {
            $res['multi_az_policy'] = $this->multiAzPolicy;
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
        if (null !== $this->ramPolicy) {
            $res['ram_policy'] = $this->ramPolicy;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->scalingGroupId) {
            $res['scaling_group_id'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingPolicy) {
            $res['scaling_policy'] = $this->scalingPolicy;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
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
        if (isset($map['data_disks'])) {
            if (!empty($map['data_disks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['data_disks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
        }
        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = $map['instance_types'];
            }
        }
        if (isset($map['multi_az_policy'])) {
            $model->multiAzPolicy = $map['multi_az_policy'];
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
        if (isset($map['ram_policy'])) {
            $model->ramPolicy = $map['ram_policy'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['scaling_group_id'])) {
            $model->scalingGroupId = $map['scaling_group_id'];
        }
        if (isset($map['scaling_policy'])) {
            $model->scalingPolicy = $map['scaling_policy'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
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
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
