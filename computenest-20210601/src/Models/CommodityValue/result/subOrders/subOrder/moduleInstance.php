<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder\moduleInstance\moduleAttrs;
use AlibabaCloud\Tea\Model;

class moduleInstance extends Model
{
    /**
     * @description 模块ID。
     *
     * @example 1234
     *
     * @var int
     */
    public $moduleId;

    /**
     * @description 模块名称。
     *
     * @example Rds
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description 模块代码。
     *
     * @example rds_dbtype
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description 产品原价（元）。
     *
     * @example 10.00
     *
     * @var float
     */
    public $totalProductFee;

    /**
     * @description 折扣费用（元）。
     *
     * @example 1.99
     *
     * @var float
     */
    public $discountFee;

    /**
     * @description 实付金额（元）。
     *
     * @example 8.01
     *
     * @var float
     */
    public $payFee;

    /**
     * @description 价格单位。
     *
     * @example 元/GB/小时
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description 是否计价项。
     *
     * @example true
     *
     * @var bool
     */
    public $isPricingModule;

    /**
     * @description 在订单中是否需要支付。
     *
     * @example true
     *
     * @var bool
     */
    public $needOrderPay;

    /**
     * @description 定价类型。
     *
     * @example hourPrice
     *
     * @var string
     */
    public $priceType;

    /**
     * @description 模块属性。
     *
     * @var moduleAttrs[]
     */
    public $moduleAttrs;
    protected $_name = [
        'moduleId' => 'ModuleId',
        'moduleName' => 'ModuleName',
        'moduleCode' => 'ModuleCode',
        'totalProductFee' => 'TotalProductFee',
        'discountFee' => 'DiscountFee',
        'payFee' => 'PayFee',
        'priceUnit' => 'PriceUnit',
        'isPricingModule' => 'IsPricingModule',
        'needOrderPay' => 'NeedOrderPay',
        'priceType' => 'PriceType',
        'moduleAttrs' => 'ModuleAttrs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->totalProductFee) {
            $res['TotalProductFee'] = $this->totalProductFee;
        }
        if (null !== $this->discountFee) {
            $res['DiscountFee'] = $this->discountFee;
        }
        if (null !== $this->payFee) {
            $res['PayFee'] = $this->payFee;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->isPricingModule) {
            $res['IsPricingModule'] = $this->isPricingModule;
        }
        if (null !== $this->needOrderPay) {
            $res['NeedOrderPay'] = $this->needOrderPay;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->moduleAttrs) {
            $res['ModuleAttrs'] = [];
            if (null !== $this->moduleAttrs && \is_array($this->moduleAttrs)) {
                $n = 0;
                foreach ($this->moduleAttrs as $item) {
                    $res['ModuleAttrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['TotalProductFee'])) {
            $model->totalProductFee = $map['TotalProductFee'];
        }
        if (isset($map['DiscountFee'])) {
            $model->discountFee = $map['DiscountFee'];
        }
        if (isset($map['PayFee'])) {
            $model->payFee = $map['PayFee'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['IsPricingModule'])) {
            $model->isPricingModule = $map['IsPricingModule'];
        }
        if (isset($map['NeedOrderPay'])) {
            $model->needOrderPay = $map['NeedOrderPay'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['ModuleAttrs'])) {
            if (!empty($map['ModuleAttrs'])) {
                $model->moduleAttrs = [];
                $n = 0;
                foreach ($map['ModuleAttrs'] as $item) {
                    $model->moduleAttrs[$n++] = null !== $item ? moduleAttrs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
