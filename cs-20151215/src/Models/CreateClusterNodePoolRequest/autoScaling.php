<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class autoScaling extends Model
{
    /**
     * @description 是否开启自动伸缩。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 最大实例数。
     *
     * @var int
     */
    public $maxInstances;

    /**
     * @description 最小实例数。
     *
     * @var int
     */
    public $minInstances;

    /**
     * @description 扩容节点类型。
     *
     * @var string
     */
    public $type;

    /**
     * @description 是否绑定EIP。
     *
     * @var bool
     */
    public $isBondEip;

    /**
     * @description EIP实例规格。
     *
     * @var string
     */
    public $eipInternetChargeType;

    /**
     * @description 带宽峰值。
     *
     * @var int
     */
    public $eipBandwidth;
    protected $_name = [
        'enable'                => 'enable',
        'maxInstances'          => 'max_instances',
        'minInstances'          => 'min_instances',
        'type'                  => 'type',
        'isBondEip'             => 'is_bond_eip',
        'eipInternetChargeType' => 'eip_internet_charge_type',
        'eipBandwidth'          => 'eip_bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->maxInstances) {
            $res['max_instances'] = $this->maxInstances;
        }
        if (null !== $this->minInstances) {
            $res['min_instances'] = $this->minInstances;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->isBondEip) {
            $res['is_bond_eip'] = $this->isBondEip;
        }
        if (null !== $this->eipInternetChargeType) {
            $res['eip_internet_charge_type'] = $this->eipInternetChargeType;
        }
        if (null !== $this->eipBandwidth) {
            $res['eip_bandwidth'] = $this->eipBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoScaling
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['max_instances'])) {
            $model->maxInstances = $map['max_instances'];
        }
        if (isset($map['min_instances'])) {
            $model->minInstances = $map['min_instances'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['is_bond_eip'])) {
            $model->isBondEip = $map['is_bond_eip'];
        }
        if (isset($map['eip_internet_charge_type'])) {
            $model->eipInternetChargeType = $map['eip_internet_charge_type'];
        }
        if (isset($map['eip_bandwidth'])) {
            $model->eipBandwidth = $map['eip_bandwidth'];
        }

        return $model;
    }
}
