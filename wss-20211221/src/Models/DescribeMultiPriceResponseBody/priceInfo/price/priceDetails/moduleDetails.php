<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\priceDetails;

use AlibabaCloud\Dara\Model;

class moduleDetails extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleValue;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $savingPlanDiscountPrice;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'moduleValue' => 'ModuleValue',
        'originalPrice' => 'OriginalPrice',
        'savingPlanDiscountPrice' => 'SavingPlanDiscountPrice',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = $this->moduleValue;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->savingPlanDiscountPrice) {
            $res['SavingPlanDiscountPrice'] = $this->savingPlanDiscountPrice;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['ModuleValue'])) {
            $model->moduleValue = $map['ModuleValue'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['SavingPlanDiscountPrice'])) {
            $model->savingPlanDiscountPrice = $map['SavingPlanDiscountPrice'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
