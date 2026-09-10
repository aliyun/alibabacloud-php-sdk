<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\PriceComponentsValue\modules;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\PriceComponentsValue\usageCharges;

class PriceComponentsValue extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $moduleSum;

    /**
     * @var float
     */
    public $effectiveModuleSum;

    /**
     * @var float
     */
    public $quantity;

    /**
     * @var string
     */
    public $pricingUnit;

    /**
     * @var modules[]
     */
    public $modules;

    /**
     * @var usageCharges[]
     */
    public $usageCharges;

    /**
     * @var string
     */
    public $chargeComposition;
    protected $_name = [
        'currency' => 'currency',
        'tradePrice' => 'tradePrice',
        'originalPrice' => 'originalPrice',
        'moduleSum' => 'moduleSum',
        'effectiveModuleSum' => 'effectiveModuleSum',
        'quantity' => 'quantity',
        'pricingUnit' => 'pricingUnit',
        'modules' => 'modules',
        'usageCharges' => 'usageCharges',
        'chargeComposition' => 'chargeComposition',
    ];

    public function validate()
    {
        if (\is_array($this->modules)) {
            Model::validateArray($this->modules);
        }
        if (\is_array($this->usageCharges)) {
            Model::validateArray($this->usageCharges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->tradePrice) {
            $res['tradePrice'] = $this->tradePrice;
        }

        if (null !== $this->originalPrice) {
            $res['originalPrice'] = $this->originalPrice;
        }

        if (null !== $this->moduleSum) {
            $res['moduleSum'] = $this->moduleSum;
        }

        if (null !== $this->effectiveModuleSum) {
            $res['effectiveModuleSum'] = $this->effectiveModuleSum;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->pricingUnit) {
            $res['pricingUnit'] = $this->pricingUnit;
        }

        if (null !== $this->modules) {
            if (\is_array($this->modules)) {
                $res['modules'] = [];
                $n1 = 0;
                foreach ($this->modules as $item1) {
                    $res['modules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->chargeComposition) {
            $res['chargeComposition'] = $this->chargeComposition;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['tradePrice'])) {
            $model->tradePrice = $map['tradePrice'];
        }

        if (isset($map['originalPrice'])) {
            $model->originalPrice = $map['originalPrice'];
        }

        if (isset($map['moduleSum'])) {
            $model->moduleSum = $map['moduleSum'];
        }

        if (isset($map['effectiveModuleSum'])) {
            $model->effectiveModuleSum = $map['effectiveModuleSum'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['pricingUnit'])) {
            $model->pricingUnit = $map['pricingUnit'];
        }

        if (isset($map['modules'])) {
            if (!empty($map['modules'])) {
                $model->modules = [];
                $n1 = 0;
                foreach ($map['modules'] as $item1) {
                    $model->modules[$n1] = modules::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['chargeComposition'])) {
            $model->chargeComposition = $map['chargeComposition'];
        }

        return $model;
    }
}
