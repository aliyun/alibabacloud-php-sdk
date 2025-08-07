<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder\moduleInstance\moduleAttrs;

class moduleInstance extends Model
{
    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $totalProductFee;

    /**
     * @var float
     */
    public $discountFee;

    /**
     * @var float
     */
    public $payFee;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var bool
     */
    public $isPricingModule;

    /**
     * @var bool
     */
    public $needOrderPay;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var moduleAttrs[]
     */
    public $moduleAttrs;

    /**
     * @var string
     */
    public $moduleNameEn;

    /**
     * @var string
     */
    public $priceUnitEn;
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
        'moduleNameEn' => 'ModuleNameEn',
        'priceUnitEn' => 'PriceUnitEn',
    ];

    public function validate()
    {
        if (\is_array($this->moduleAttrs)) {
            Model::validateArray($this->moduleAttrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->moduleAttrs)) {
                $res['ModuleAttrs'] = [];
                $n1 = 0;
                foreach ($this->moduleAttrs as $item1) {
                    $res['ModuleAttrs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->moduleNameEn) {
            $res['ModuleNameEn'] = $this->moduleNameEn;
        }

        if (null !== $this->priceUnitEn) {
            $res['PriceUnitEn'] = $this->priceUnitEn;
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
                $n1 = 0;
                foreach ($map['ModuleAttrs'] as $item1) {
                    $model->moduleAttrs[$n1] = moduleAttrs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModuleNameEn'])) {
            $model->moduleNameEn = $map['ModuleNameEn'];
        }

        if (isset($map['PriceUnitEn'])) {
            $model->priceUnitEn = $map['PriceUnitEn'];
        }

        return $model;
    }
}
