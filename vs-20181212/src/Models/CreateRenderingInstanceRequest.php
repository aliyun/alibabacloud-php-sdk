<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceRequest\clientInfo;

class CreateRenderingInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var clientInfo
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $instanceBillingCycle;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidth;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $renderingSpec;

    /**
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'clientInfo' => 'ClientInfo',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidth' => 'InternetMaxBandwidth',
        'period' => 'Period',
        'renderingSpec' => 'RenderingSpec',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        if (null !== $this->clientInfo) {
            $this->clientInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = null !== $this->clientInfo ? $this->clientInfo->toArray($noStream) : $this->clientInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ClientInfo'])) {
            $model->clientInfo = clientInfo::fromMap($map['ClientInfo']);
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
