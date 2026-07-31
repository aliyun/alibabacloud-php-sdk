<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeDDoSPriceRequest extends Model
{
    /**
     * @var string
     */
    public $DDoSBillingMode;

    /**
     * @var string
     */
    public $DDoSBurstableDomesticProtection;

    /**
     * @var string
     */
    public $DDoSBurstableOverseasProtection;
    protected $_name = [
        'DDoSBillingMode' => 'DDoSBillingMode',
        'DDoSBurstableDomesticProtection' => 'DDoSBurstableDomesticProtection',
        'DDoSBurstableOverseasProtection' => 'DDoSBurstableOverseasProtection',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDoSBillingMode) {
            $res['DDoSBillingMode'] = $this->DDoSBillingMode;
        }

        if (null !== $this->DDoSBurstableDomesticProtection) {
            $res['DDoSBurstableDomesticProtection'] = $this->DDoSBurstableDomesticProtection;
        }

        if (null !== $this->DDoSBurstableOverseasProtection) {
            $res['DDoSBurstableOverseasProtection'] = $this->DDoSBurstableOverseasProtection;
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
        if (isset($map['DDoSBillingMode'])) {
            $model->DDoSBillingMode = $map['DDoSBillingMode'];
        }

        if (isset($map['DDoSBurstableDomesticProtection'])) {
            $model->DDoSBurstableDomesticProtection = $map['DDoSBurstableDomesticProtection'];
        }

        if (isset($map['DDoSBurstableOverseasProtection'])) {
            $model->DDoSBurstableOverseasProtection = $map['DDoSBurstableOverseasProtection'];
        }

        return $model;
    }
}
