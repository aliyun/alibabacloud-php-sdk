<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\depreciateInfo;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\moduleAttrs;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\promDetailList;
use AlibabaCloud\Tea\Model;

class moduleInstance extends Model
{
    /**
     * @description Indicates whether the contract promotion is hit.
     *
     * @example false
     *
     * @var bool
     */
    public $contractActivity;

    /**
     * @description The cycle fee of the module.
     *
     * @example 0.0
     *
     * @var string
     */
    public $cycleFee;

    /**
     * @description The activity information.
     *
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @description The discount.
     *
     * @example 0.0
     *
     * @var string
     */
    public $discountFee;

    /**
     * @description The module attributes.
     *
     * @var moduleAttrs
     */
    public $moduleAttrs;

    /**
     * @description The module code.
     *
     * @example dds_dbtype
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The module ID
     *
     * @example 1017110000415xxx
     *
     * @var int
     */
    public $moduleId;

    /**
     * @description The module name.
     *
     * @example database type
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description Indicates whether the order is paid.
     *
     * @example true
     *
     * @var bool
     */
    public $needOrderPay;

    /**
     * @description The actual amount paid.
     *
     * @example 0.0
     *
     * @var float
     */
    public $payFee;

    /**
     * @description Indicates whether the item is billed.
     *
     * @example false
     *
     * @var bool
     */
    public $pricingModule;

    /**
     * @description The promotion details.
     *
     * @var promDetailList
     */
    public $promDetailList;

    /**
     * @description The discounted price.
     *
     * @example 451.00
     *
     * @var float
     */
    public $standDiscountPrice;

    /**
     * @description The discount.
     *
     * @example 0
     *
     * @var float
     */
    public $standPrice;

    /**
     * @description The original price of the product.
     *
     * @example 0.0
     *
     * @var float
     */
    public $totalProductFee;

    /**
     * @description The price type.
     *
     * @example monthPrice
     *
     * @var string
     */
    public $priceType;

    /**
     * @description The unit of the price.
     *
     * @example xxxx
     *
     * @var string
     */
    public $priceUnit;
    protected $_name = [
        'contractActivity' => 'ContractActivity',
        'cycleFee' => 'CycleFee',
        'depreciateInfo' => 'DepreciateInfo',
        'discountFee' => 'DiscountFee',
        'moduleAttrs' => 'ModuleAttrs',
        'moduleCode' => 'ModuleCode',
        'moduleId' => 'ModuleId',
        'moduleName' => 'ModuleName',
        'needOrderPay' => 'NeedOrderPay',
        'payFee' => 'PayFee',
        'pricingModule' => 'PricingModule',
        'promDetailList' => 'PromDetailList',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice' => 'StandPrice',
        'totalProductFee' => 'TotalProductFee',
        'priceType' => 'priceType',
        'priceUnit' => 'priceUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = $this->contractActivity;
        }
        if (null !== $this->cycleFee) {
            $res['CycleFee'] = $this->cycleFee;
        }
        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toMap() : null;
        }
        if (null !== $this->discountFee) {
            $res['DiscountFee'] = $this->discountFee;
        }
        if (null !== $this->moduleAttrs) {
            $res['ModuleAttrs'] = null !== $this->moduleAttrs ? $this->moduleAttrs->toMap() : null;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->needOrderPay) {
            $res['NeedOrderPay'] = $this->needOrderPay;
        }
        if (null !== $this->payFee) {
            $res['PayFee'] = $this->payFee;
        }
        if (null !== $this->pricingModule) {
            $res['PricingModule'] = $this->pricingModule;
        }
        if (null !== $this->promDetailList) {
            $res['PromDetailList'] = null !== $this->promDetailList ? $this->promDetailList->toMap() : null;
        }
        if (null !== $this->standDiscountPrice) {
            $res['StandDiscountPrice'] = $this->standDiscountPrice;
        }
        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
        }
        if (null !== $this->totalProductFee) {
            $res['TotalProductFee'] = $this->totalProductFee;
        }
        if (null !== $this->priceType) {
            $res['priceType'] = $this->priceType;
        }
        if (null !== $this->priceUnit) {
            $res['priceUnit'] = $this->priceUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContractActivity'])) {
            $model->contractActivity = $map['ContractActivity'];
        }
        if (isset($map['CycleFee'])) {
            $model->cycleFee = $map['CycleFee'];
        }
        if (isset($map['DepreciateInfo'])) {
            $model->depreciateInfo = depreciateInfo::fromMap($map['DepreciateInfo']);
        }
        if (isset($map['DiscountFee'])) {
            $model->discountFee = $map['DiscountFee'];
        }
        if (isset($map['ModuleAttrs'])) {
            $model->moduleAttrs = moduleAttrs::fromMap($map['ModuleAttrs']);
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['NeedOrderPay'])) {
            $model->needOrderPay = $map['NeedOrderPay'];
        }
        if (isset($map['PayFee'])) {
            $model->payFee = $map['PayFee'];
        }
        if (isset($map['PricingModule'])) {
            $model->pricingModule = $map['PricingModule'];
        }
        if (isset($map['PromDetailList'])) {
            $model->promDetailList = promDetailList::fromMap($map['PromDetailList']);
        }
        if (isset($map['StandDiscountPrice'])) {
            $model->standDiscountPrice = $map['StandDiscountPrice'];
        }
        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }
        if (isset($map['TotalProductFee'])) {
            $model->totalProductFee = $map['TotalProductFee'];
        }
        if (isset($map['priceType'])) {
            $model->priceType = $map['priceType'];
        }
        if (isset($map['priceUnit'])) {
            $model->priceUnit = $map['priceUnit'];
        }

        return $model;
    }
}
