<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;

class modulePrices extends Model
{
    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $finalUnitFee;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var float
     */
    public $payAmount;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $quantity;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'finalUnitFee' => 'FinalUnitFee',
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'originalAmount' => 'OriginalAmount',
        'payAmount' => 'PayAmount',
        'priceType' => 'PriceType',
        'priceUnit' => 'PriceUnit',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->finalUnitFee) {
            $res['FinalUnitFee'] = $this->finalUnitFee;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->payAmount) {
            $res['PayAmount'] = $this->payAmount;
        }

        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
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
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }

        if (isset($map['FinalUnitFee'])) {
            $model->finalUnitFee = $map['FinalUnitFee'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['PayAmount'])) {
            $model->payAmount = $map['PayAmount'];
        }

        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
