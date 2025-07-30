<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\depreciateInfo;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\moduleAttrs;
use AlibabaCloud\Tea\Model;

class moduleInstance extends Model
{
    /**
     * @description Indicates whether eligibility for the contracted discount is met.
     *
     * @example ****
     *
     * @var bool
     */
    public $contractActivity;

    /**
     * @description The price reduction information.
     *
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @description The discount.
     *
     * @example ****
     *
     * @var float
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
     * @example ****
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The module ID.
     *
     * @example ****
     *
     * @var string
     */
    public $moduleId;

    /**
     * @description The module name.
     *
     * @example ****
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
     * @example ****
     *
     * @var bool
     */
    public $pricingModule;

    /**
     * @description The discounted price.
     *
     * @example ****
     *
     * @var float
     */
    public $standPrice;

    /**
     * @description The original price of the instance.
     *
     * @example 0.0
     *
     * @var float
     */
    public $totalProductFee;
    protected $_name = [
        'contractActivity' => 'ContractActivity',
        'depreciateInfo' => 'DepreciateInfo',
        'discountFee' => 'DiscountFee',
        'moduleAttrs' => 'ModuleAttrs',
        'moduleCode' => 'ModuleCode',
        'moduleId' => 'ModuleId',
        'moduleName' => 'ModuleName',
        'needOrderPay' => 'NeedOrderPay',
        'payFee' => 'PayFee',
        'pricingModule' => 'PricingModule',
        'standPrice' => 'StandPrice',
        'totalProductFee' => 'TotalProductFee',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = $this->contractActivity;
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
        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
        }
        if (null !== $this->totalProductFee) {
            $res['TotalProductFee'] = $this->totalProductFee;
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
        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }
        if (isset($map['TotalProductFee'])) {
            $model->totalProductFee = $map['TotalProductFee'];
        }

        return $model;
    }
}
