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
     * @var bool
     */
    public $contractActivity;

    /**
     * @var string
     */
    public $cycleFee;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @var string
     */
    public $discountFee;

    /**
     * @var moduleAttrs
     */
    public $moduleAttrs;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var bool
     */
    public $needOrderPay;

    /**
     * @var float
     */
    public $payFee;

    /**
     * @var bool
     */
    public $pricingModule;

    /**
     * @var promDetailList
     */
    public $promDetailList;

    /**
     * @var float
     */
    public $standPrice;

    /**
     * @var float
     */
    public $totalProductFee;
    protected $_name = [
        'contractActivity' => 'ContractActivity',
        'cycleFee'         => 'CycleFee',
        'depreciateInfo'   => 'DepreciateInfo',
        'discountFee'      => 'DiscountFee',
        'moduleAttrs'      => 'ModuleAttrs',
        'moduleCode'       => 'ModuleCode',
        'moduleId'         => 'ModuleId',
        'moduleName'       => 'ModuleName',
        'needOrderPay'     => 'NeedOrderPay',
        'payFee'           => 'PayFee',
        'pricingModule'    => 'PricingModule',
        'promDetailList'   => 'PromDetailList',
        'standPrice'       => 'StandPrice',
        'totalProductFee'  => 'TotalProductFee',
    ];

    public function validate()
    {
    }

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
        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }
        if (isset($map['TotalProductFee'])) {
            $model->totalProductFee = $map['TotalProductFee'];
        }

        return $model;
    }
}
