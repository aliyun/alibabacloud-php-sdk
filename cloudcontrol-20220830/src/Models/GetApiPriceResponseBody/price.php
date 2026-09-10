<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetApiPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetApiPriceResponseBody\price\priceSummary;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetApiPriceResponseBody\price\usageCharges;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\PriceComponentsValue;

class price extends Model
{
    /**
     * @var string
     */
    public $billingUnit;

    /**
     * @var float
     */
    public $calculatedAmount;

    /**
     * @var string
     */
    public $chargeComposition;

    /**
     * @var PriceComponentsValue[]
     */
    public $components;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var priceSummary
     */
    public $priceSummary;

    /**
     * @var string
     */
    public $pricingMode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var float
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $upstreamRequestId;

    /**
     * @var usageCharges[]
     */
    public $usageCharges;
    protected $_name = [
        'billingUnit' => 'billingUnit',
        'calculatedAmount' => 'calculatedAmount',
        'chargeComposition' => 'chargeComposition',
        'components' => 'components',
        'currency' => 'currency',
        'discountAmount' => 'discountAmount',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'originalAmount' => 'originalAmount',
        'priceSummary' => 'priceSummary',
        'pricingMode' => 'pricingMode',
        'success' => 'success',
        'totalAmount' => 'totalAmount',
        'upstreamRequestId' => 'upstreamRequestId',
        'usageCharges' => 'usageCharges',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (null !== $this->priceSummary) {
            $this->priceSummary->validate();
        }
        if (\is_array($this->usageCharges)) {
            Model::validateArray($this->usageCharges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingUnit) {
            $res['billingUnit'] = $this->billingUnit;
        }

        if (null !== $this->calculatedAmount) {
            $res['calculatedAmount'] = $this->calculatedAmount;
        }

        if (null !== $this->chargeComposition) {
            $res['chargeComposition'] = $this->chargeComposition;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                foreach ($this->components as $key1 => $value1) {
                    $res['components'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->discountAmount) {
            $res['discountAmount'] = $this->discountAmount;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->originalAmount) {
            $res['originalAmount'] = $this->originalAmount;
        }

        if (null !== $this->priceSummary) {
            $res['priceSummary'] = null !== $this->priceSummary ? $this->priceSummary->toArray($noStream) : $this->priceSummary;
        }

        if (null !== $this->pricingMode) {
            $res['pricingMode'] = $this->pricingMode;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
        }

        if (null !== $this->upstreamRequestId) {
            $res['upstreamRequestId'] = $this->upstreamRequestId;
        }

        if (null !== $this->usageCharges) {
            if (\is_array($this->usageCharges)) {
                $res['usageCharges'] = [];
                $n1 = 0;
                foreach ($this->usageCharges as $item1) {
                    $res['usageCharges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['billingUnit'])) {
            $model->billingUnit = $map['billingUnit'];
        }

        if (isset($map['calculatedAmount'])) {
            $model->calculatedAmount = $map['calculatedAmount'];
        }

        if (isset($map['chargeComposition'])) {
            $model->chargeComposition = $map['chargeComposition'];
        }

        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                foreach ($map['components'] as $key1 => $value1) {
                    $model->components[$key1] = PriceComponentsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['discountAmount'])) {
            $model->discountAmount = $map['discountAmount'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['originalAmount'])) {
            $model->originalAmount = $map['originalAmount'];
        }

        if (isset($map['priceSummary'])) {
            $model->priceSummary = priceSummary::fromMap($map['priceSummary']);
        }

        if (isset($map['pricingMode'])) {
            $model->pricingMode = $map['pricingMode'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        if (isset($map['upstreamRequestId'])) {
            $model->upstreamRequestId = $map['upstreamRequestId'];
        }

        if (isset($map['usageCharges'])) {
            if (!empty($map['usageCharges'])) {
                $model->usageCharges = [];
                $n1 = 0;
                foreach ($map['usageCharges'] as $item1) {
                    $model->usageCharges[$n1] = usageCharges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
