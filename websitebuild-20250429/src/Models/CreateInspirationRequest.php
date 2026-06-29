<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateInspirationRequest extends Model
{
    /**
     * @var string
     */
    public $amountspec;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'amountspec' => 'Amountspec',
        'clientToken' => 'ClientToken',
        'duration' => 'Duration',
        'extend' => 'Extend',
        'paymentType' => 'PaymentType',
        'pricingCycle' => 'PricingCycle',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amountspec) {
            $res['Amountspec'] = $this->amountspec;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['Amountspec'])) {
            $model->amountspec = $map['Amountspec'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
