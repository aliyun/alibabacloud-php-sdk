<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class autoScaling extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     **
     *
     **Important** This parameter is deprecated. Use the internet_charge_type and internet_max_bandwidth_out parameters instead.
     *
     * @example 5
     *
     * @deprecated
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description This parameter is deprecated.
     *
     * The metering method of the EIP. Valid values:
     *
     *   `PayByBandwidth`: pay-by-bandwidth
     *   `PayByTraffic`: pay-by-data-transfer
     *
     **
     *
     **Important** This parameter is deprecated. Use the internet_charge_type and internet_max_bandwidth_out parameters instead.
     *
     * @example PayByBandwidth
     *
     * @deprecated
     *
     * @var string
     */
    public $eipInternetChargeType;

    /**
     * @description Specifies whether to enable auto scaling for the node pool. Valid values:
     *
     *   `true`: enables auto scaling.
     *   `false`: disables auto scaling. If you set this parameter to false, other parameters in the `auto_scaling` section do not take effect.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description This parameter is deprecated.
     *
     * Specifies whether to associate an elastic IP address (EIP) with the node pool. Valid values:
     *
     *   `true`: associates an EIP with the node pool.
     *   `false`: does not associate an EIP with the node pool.
     *
     **
     *
     **Important** This parameter is deprecated. Use the internet_charge_type and internet_max_bandwidth_out parameters instead.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $isBondEip;

    /**
     * @description The maximum number of instances that can be automatically scaled. The number of nodes in the node pool cannot exceed this value. This parameter takes effect only if you set `enable` to true. Valid values: [min_instances, 2000]. Default value: 0.
     *
     * @example 10
     *
     * @var int
     */
    public $maxInstances;

    /**
     * @description The minimum number of instances that can be automatically scaled. The number of nodes in the node pool cannot be lower than this value. This parameter takes effect only if you set `enable` to true. Valid values: [0, max_instances]. Default value: 0.
     *
     * @example 1
     *
     * @var int
     */
    public $minInstances;

    /**
     * @description The type of instances that are automatically scaled. This parameter takes effect only if you set `enable` to true. Valid values:
     *
     *   `cpu`: regular instance
     *   `gpu`: GPU-accelerated instance
     *   `gpushare`: shared GPU-accelerated instance
     *   `spot`: preemptible instance
     *
     * >  You cannot modify this parameter after the node pool is created.
     * @example cpu
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'eipBandwidth'          => 'eip_bandwidth',
        'eipInternetChargeType' => 'eip_internet_charge_type',
        'enable'                => 'enable',
        'isBondEip'             => 'is_bond_eip',
        'maxInstances'          => 'max_instances',
        'minInstances'          => 'min_instances',
        'type'                  => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipBandwidth) {
            $res['eip_bandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->eipInternetChargeType) {
            $res['eip_internet_charge_type'] = $this->eipInternetChargeType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->isBondEip) {
            $res['is_bond_eip'] = $this->isBondEip;
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
        if (isset($map['eip_bandwidth'])) {
            $model->eipBandwidth = $map['eip_bandwidth'];
        }
        if (isset($map['eip_internet_charge_type'])) {
            $model->eipInternetChargeType = $map['eip_internet_charge_type'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['is_bond_eip'])) {
            $model->isBondEip = $map['is_bond_eip'];
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

        return $model;
    }
}
