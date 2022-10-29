<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest\ipSetConfig;
use AlibabaCloud\Tea\Model;

class CreateAcceleratorRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var ipSetConfig
     */
    public $ipSetConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'autoRenewDuration'    => 'AutoRenewDuration',
        'autoUseCoupon'        => 'AutoUseCoupon',
        'bandwidthBillingType' => 'BandwidthBillingType',
        'clientToken'          => 'ClientToken',
        'duration'             => 'Duration',
        'ipSetConfig'          => 'IpSetConfig',
        'name'                 => 'Name',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'spec'                 => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ipSetConfig) {
            $res['IpSetConfig'] = null !== $this->ipSetConfig ? $this->ipSetConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAcceleratorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IpSetConfig'])) {
            $model->ipSetConfig = ipSetConfig::fromMap($map['IpSetConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
