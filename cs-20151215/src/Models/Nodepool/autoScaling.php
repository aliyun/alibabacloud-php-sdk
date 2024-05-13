<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\Nodepool;

use AlibabaCloud\Tea\Model;

class autoScaling extends Model
{
    /**
     * @example 5
     *
     * @deprecated
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @example PayByBandwidth
     *
     * @deprecated
     *
     * @var string
     */
    public $eipInternetChargeType;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $isBondEip;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $maxInstances;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $minInstances;

    /**
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
