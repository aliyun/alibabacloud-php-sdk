<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetApiPriceResponseBody\price\priceSummary;

use AlibabaCloud\Dara\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $billingMode;

    /**
     * @var float
     */
    public $costAfterDiscount;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $originalCost;

    /**
     * @var float
     */
    public $quantityUsedForQuote;

    /**
     * @var float
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $usageUnit;
    protected $_name = [
        'billingMode' => 'billingMode',
        'costAfterDiscount' => 'costAfterDiscount',
        'invoiceDiscount' => 'invoiceDiscount',
        'moduleCode' => 'moduleCode',
        'originalCost' => 'originalCost',
        'quantityUsedForQuote' => 'quantityUsedForQuote',
        'unitPrice' => 'unitPrice',
        'usageUnit' => 'usageUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMode) {
            $res['billingMode'] = $this->billingMode;
        }

        if (null !== $this->costAfterDiscount) {
            $res['costAfterDiscount'] = $this->costAfterDiscount;
        }

        if (null !== $this->invoiceDiscount) {
            $res['invoiceDiscount'] = $this->invoiceDiscount;
        }

        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }

        if (null !== $this->originalCost) {
            $res['originalCost'] = $this->originalCost;
        }

        if (null !== $this->quantityUsedForQuote) {
            $res['quantityUsedForQuote'] = $this->quantityUsedForQuote;
        }

        if (null !== $this->unitPrice) {
            $res['unitPrice'] = $this->unitPrice;
        }

        if (null !== $this->usageUnit) {
            $res['usageUnit'] = $this->usageUnit;
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
        if (isset($map['billingMode'])) {
            $model->billingMode = $map['billingMode'];
        }

        if (isset($map['costAfterDiscount'])) {
            $model->costAfterDiscount = $map['costAfterDiscount'];
        }

        if (isset($map['invoiceDiscount'])) {
            $model->invoiceDiscount = $map['invoiceDiscount'];
        }

        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }

        if (isset($map['originalCost'])) {
            $model->originalCost = $map['originalCost'];
        }

        if (isset($map['quantityUsedForQuote'])) {
            $model->quantityUsedForQuote = $map['quantityUsedForQuote'];
        }

        if (isset($map['unitPrice'])) {
            $model->unitPrice = $map['unitPrice'];
        }

        if (isset($map['usageUnit'])) {
            $model->usageUnit = $map['usageUnit'];
        }

        return $model;
    }
}
