<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\PriceComponentsValue;

use AlibabaCloud\Dara\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $costAfterDiscount;

    /**
     * @var float
     */
    public $originalCost;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var float
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $billingMode;

    /**
     * @var string
     */
    public $usageUnit;

    /**
     * @var float
     */
    public $quantityUsedForQuote;
    protected $_name = [
        'moduleCode' => 'moduleCode',
        'costAfterDiscount' => 'costAfterDiscount',
        'originalCost' => 'originalCost',
        'invoiceDiscount' => 'invoiceDiscount',
        'unitPrice' => 'unitPrice',
        'billingMode' => 'billingMode',
        'usageUnit' => 'usageUnit',
        'quantityUsedForQuote' => 'quantityUsedForQuote',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }

        if (null !== $this->costAfterDiscount) {
            $res['costAfterDiscount'] = $this->costAfterDiscount;
        }

        if (null !== $this->originalCost) {
            $res['originalCost'] = $this->originalCost;
        }

        if (null !== $this->invoiceDiscount) {
            $res['invoiceDiscount'] = $this->invoiceDiscount;
        }

        if (null !== $this->unitPrice) {
            $res['unitPrice'] = $this->unitPrice;
        }

        if (null !== $this->billingMode) {
            $res['billingMode'] = $this->billingMode;
        }

        if (null !== $this->usageUnit) {
            $res['usageUnit'] = $this->usageUnit;
        }

        if (null !== $this->quantityUsedForQuote) {
            $res['quantityUsedForQuote'] = $this->quantityUsedForQuote;
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
        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }

        if (isset($map['costAfterDiscount'])) {
            $model->costAfterDiscount = $map['costAfterDiscount'];
        }

        if (isset($map['originalCost'])) {
            $model->originalCost = $map['originalCost'];
        }

        if (isset($map['invoiceDiscount'])) {
            $model->invoiceDiscount = $map['invoiceDiscount'];
        }

        if (isset($map['unitPrice'])) {
            $model->unitPrice = $map['unitPrice'];
        }

        if (isset($map['billingMode'])) {
            $model->billingMode = $map['billingMode'];
        }

        if (isset($map['usageUnit'])) {
            $model->usageUnit = $map['usageUnit'];
        }

        if (isset($map['quantityUsedForQuote'])) {
            $model->quantityUsedForQuote = $map['quantityUsedForQuote'];
        }

        return $model;
    }
}
