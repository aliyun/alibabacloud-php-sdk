<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class autoScaling extends Model
{
    /**
     * @description The maximum bandwidth of the elastic IP address (EIP).
     *
     * Valid values: 1 to 100. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   `PayByBandwidth`: pay-by-bandwidth.
     *   `PayByTraffic`: pay-by-data-transfer.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $eipInternetChargeType;

    /**
     * @description Indicates whether auto scaling is enabled. Valid values:
     *
     *   `true`: Auto scaling is enabled for the node pool. When the capacity planning of the cluster cannot meet the requirements of pod scheduling, ACK automatically scales out nodes based on the configured minimum and maximum number of instances. Node instant scaling is enabled by default for clusters that run Kubernetes 1.24 or later. Node auto scaling is enabled for clusters that run Kubernetes 1.24 and earlier. For more information, see [Node auto scaling](https://help.aliyun.com/document_detail/2746785.html).
     *   `false`: does not enable auto scaling. ACK adjusts the number of nodes in the node pool based on the value of the Expected Nodes parameter. The number of nodes is always the same as the value of the Expected Nodes parameter.
     *
     * If you set this parameter to false, other parameters of `auto_scaling` do not take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Specifies whether to associate an EIP with the node pool. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $isBondEip;

    /**
     * @description The maximum number of scalable instances in the node pool. Your existing instances are not included.
     *
     * @example 10
     *
     * @var int
     */
    public $maxInstances;

    /**
     * @description The minimum number of scalable instances in the node pool, excluding your existing instances.
     *
     * @example 2
     *
     * @var int
     */
    public $minInstances;

    /**
     * @description The instance types that can be used for the auto scaling of the node pool. Valid values:
     *
     *   `cpu`: regular instance.
     *   `gpu`: GPU-accelerated instance.
     *   `gpushare`: shared GPU-accelerated instance.
     *   `spot`: preemptible instance.
     *
     * @example cpu
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'eipBandwidth' => 'eip_bandwidth',
        'eipInternetChargeType' => 'eip_internet_charge_type',
        'enable' => 'enable',
        'isBondEip' => 'is_bond_eip',
        'maxInstances' => 'max_instances',
        'minInstances' => 'min_instances',
        'type' => 'type',
    ];

    public function validate() {}

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
