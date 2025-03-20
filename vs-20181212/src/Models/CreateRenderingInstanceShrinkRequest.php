<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateRenderingInstanceShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientInfoShrink;

    /**
     * @var string
     */
    public $instanceBillingCycle;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidth;

    /**
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @description This parameter is required.
     *
     * @example crs.cp.l1
     *
     * @var string
     */
    public $renderingSpec;

    /**
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'clientInfoShrink' => 'ClientInfo',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidth' => 'InternetMaxBandwidth',
        'period' => 'Period',
        'renderingSpec' => 'RenderingSpec',
        'storageSize' => 'StorageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientInfoShrink) {
            $res['ClientInfo'] = $this->clientInfoShrink;
        }
        if (null !== $this->instanceBillingCycle) {
            $res['InstanceBillingCycle'] = $this->instanceBillingCycle;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidth) {
            $res['InternetMaxBandwidth'] = $this->internetMaxBandwidth;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRenderingInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientInfo'])) {
            $model->clientInfoShrink = $map['ClientInfo'];
        }
        if (isset($map['InstanceBillingCycle'])) {
            $model->instanceBillingCycle = $map['InstanceBillingCycle'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidth'])) {
            $model->internetMaxBandwidth = $map['InternetMaxBandwidth'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
