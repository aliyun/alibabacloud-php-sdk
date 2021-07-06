<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\scalingGroup\spotPriceLimit;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\scalingGroup\tags;
use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description 节点是否开启自动续费
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 节点自动续费周期
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description 数据盘配置。
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @description 自定义镜像。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 节点付费类型
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 实例规格。
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
     * @description SSH登录密码。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description 节点包年包月时长。
     *
     * @var int
     */
    public $period;

    /**
     * @description 节点包年包月周期。
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description 操作系统发行版
     *
     * @var string
     */
    public $platform;

    /**
     * @description RDS实例列表。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 抢占式实例类型
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description 抢占实例价格上限配置。
     *
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @description 自动伸缩。
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description 安全组ID。
     *
     * @var string
     */
    public $securityGroupId;

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

    /**
     * @description 多可用区伸缩组ECS实例扩缩容策略
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description 伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description 伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description 指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description 是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description 当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description 节点公网IP网络计费类型
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description 节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100
     *
     * @var int
     */
    public $internetMaxBandwidthOut;
    protected $_name = [
        'autoRenew'                           => 'auto_renew',
        'autoRenewPeriod'                     => 'auto_renew_period',
        'dataDisks'                           => 'data_disks',
        'imageId'                             => 'image_id',
        'instanceChargeType'                  => 'instance_charge_type',
        'instanceTypes'                       => 'instance_types',
        'keyPair'                             => 'key_pair',
        'loginPassword'                       => 'login_password',
        'period'                              => 'period',
        'periodUnit'                          => 'period_unit',
        'platform'                            => 'platform',
        'rdsInstances'                        => 'rds_instances',
        'spotStrategy'                        => 'spot_strategy',
        'spotPriceLimit'                      => 'spot_price_limit',
        'scalingPolicy'                       => 'scaling_policy',
        'securityGroupId'                     => 'security_group_id',
        'systemDiskCategory'                  => 'system_disk_category',
        'systemDiskSize'                      => 'system_disk_size',
        'tags'                                => 'tags',
        'vswitchIds'                          => 'vswitch_ids',
        'multiAzPolicy'                       => 'multi_az_policy',
        'onDemandBaseCapacity'                => 'on_demand_base_capacity',
        'onDemandPercentageAboveBaseCapacity' => 'on_demand_percentage_above_base_capacity',
        'spotInstancePools'                   => 'spot_instance_pools',
        'spotInstanceRemedy'                  => 'spot_instance_remedy',
        'compensateWithOnDemand'              => 'compensate_with_on_demand',
        'internetChargeType'                  => 'internet_charge_type',
        'internetMaxBandwidthOut'             => 'internet_max_bandwidth_out',
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
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
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
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->spotStrategy) {
            $res['spot_strategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['spot_price_limit'] = [];
            if (null !== $this->spotPriceLimit && \is_array($this->spotPriceLimit)) {
                $n = 0;
                foreach ($this->spotPriceLimit as $item) {
                    $res['spot_price_limit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->multiAzPolicy) {
            $res['multi_az_policy'] = $this->multiAzPolicy;
        }
        if (null !== $this->onDemandBaseCapacity) {
            $res['on_demand_base_capacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['on_demand_percentage_above_base_capacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotInstancePools) {
            $res['spot_instance_pools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['spot_instance_remedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->compensateWithOnDemand) {
            $res['compensate_with_on_demand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->internetChargeType) {
            $res['internet_charge_type'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['internet_max_bandwidth_out'] = $this->internetMaxBandwidthOut;
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
                    $model->dataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
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
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
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
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['spot_strategy'])) {
            $model->spotStrategy = $map['spot_strategy'];
        }
        if (isset($map['spot_price_limit'])) {
            if (!empty($map['spot_price_limit'])) {
                $model->spotPriceLimit = [];
                $n                     = 0;
                foreach ($map['spot_price_limit'] as $item) {
                    $model->spotPriceLimit[$n++] = null !== $item ? spotPriceLimit::fromMap($item) : $item;
                }
            }
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
        if (isset($map['multi_az_policy'])) {
            $model->multiAzPolicy = $map['multi_az_policy'];
        }
        if (isset($map['on_demand_base_capacity'])) {
            $model->onDemandBaseCapacity = $map['on_demand_base_capacity'];
        }
        if (isset($map['on_demand_percentage_above_base_capacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['on_demand_percentage_above_base_capacity'];
        }
        if (isset($map['spot_instance_pools'])) {
            $model->spotInstancePools = $map['spot_instance_pools'];
        }
        if (isset($map['spot_instance_remedy'])) {
            $model->spotInstanceRemedy = $map['spot_instance_remedy'];
        }
        if (isset($map['compensate_with_on_demand'])) {
            $model->compensateWithOnDemand = $map['compensate_with_on_demand'];
        }
        if (isset($map['internet_charge_type'])) {
            $model->internetChargeType = $map['internet_charge_type'];
        }
        if (isset($map['internet_max_bandwidth_out'])) {
            $model->internetMaxBandwidthOut = $map['internet_max_bandwidth_out'];
        }

        return $model;
    }
}
