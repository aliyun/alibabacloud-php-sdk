<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataStepPriceMapValue;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\cycleList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\payModeList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\pricingModules;

class data extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $commodityId;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var cycleList[]
     */
    public $cycleList;

    /**
     * @var filterModules[]
     */
    public $filterModules;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var moduleMapList[]
     */
    public $moduleMapList;

    /**
     * @var payModeList[]
     */
    public $payModeList;

    /**
     * @var pricingModules[]
     */
    public $pricingModules;

    /**
     * @var string
     */
    public $spnCommodityCode;

    /**
     * @var string
     */
    public $spnCommodityName;

    /**
     * @var string
     */
    public $spnDiscountConfigType;

    /**
     * @var DataStepPriceMapValue[][]
     */
    public $stepPriceMap;
    protected $_name = [
        'activityId' => 'ActivityId',
        'commodityCode' => 'CommodityCode',
        'commodityId' => 'CommodityId',
        'commodityName' => 'CommodityName',
        'cycleList' => 'CycleList',
        'filterModules' => 'FilterModules',
        'itemCode' => 'ItemCode',
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
        'moduleMapList' => 'ModuleMapList',
        'payModeList' => 'PayModeList',
        'pricingModules' => 'PricingModules',
        'spnCommodityCode' => 'SpnCommodityCode',
        'spnCommodityName' => 'SpnCommodityName',
        'spnDiscountConfigType' => 'SpnDiscountConfigType',
        'stepPriceMap' => 'StepPriceMap',
    ];

    public function validate()
    {
        if (\is_array($this->cycleList)) {
            Model::validateArray($this->cycleList);
        }
        if (\is_array($this->filterModules)) {
            Model::validateArray($this->filterModules);
        }
        if (\is_array($this->moduleMapList)) {
            Model::validateArray($this->moduleMapList);
        }
        if (\is_array($this->payModeList)) {
            Model::validateArray($this->payModeList);
        }
        if (\is_array($this->pricingModules)) {
            Model::validateArray($this->pricingModules);
        }
        if (\is_array($this->stepPriceMap)) {
            Model::validateArray($this->stepPriceMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->cycleList) {
            if (\is_array($this->cycleList)) {
                $res['CycleList'] = [];
                $n1 = 0;
                foreach ($this->cycleList as $item1) {
                    $res['CycleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->filterModules) {
            if (\is_array($this->filterModules)) {
                $res['FilterModules'] = [];
                $n1 = 0;
                foreach ($this->filterModules as $item1) {
                    $res['FilterModules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->moduleMapList) {
            if (\is_array($this->moduleMapList)) {
                $res['ModuleMapList'] = [];
                $n1 = 0;
                foreach ($this->moduleMapList as $item1) {
                    $res['ModuleMapList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->payModeList) {
            if (\is_array($this->payModeList)) {
                $res['PayModeList'] = [];
                $n1 = 0;
                foreach ($this->payModeList as $item1) {
                    $res['PayModeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pricingModules) {
            if (\is_array($this->pricingModules)) {
                $res['PricingModules'] = [];
                $n1 = 0;
                foreach ($this->pricingModules as $item1) {
                    $res['PricingModules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->spnCommodityCode) {
            $res['SpnCommodityCode'] = $this->spnCommodityCode;
        }

        if (null !== $this->spnCommodityName) {
            $res['SpnCommodityName'] = $this->spnCommodityName;
        }

        if (null !== $this->spnDiscountConfigType) {
            $res['SpnDiscountConfigType'] = $this->spnDiscountConfigType;
        }

        if (null !== $this->stepPriceMap) {
            if (\is_array($this->stepPriceMap)) {
                $res['StepPriceMap'] = [];
                foreach ($this->stepPriceMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['StepPriceMap'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['StepPriceMap'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['CycleList'])) {
            if (!empty($map['CycleList'])) {
                $model->cycleList = [];
                $n1 = 0;
                foreach ($map['CycleList'] as $item1) {
                    $model->cycleList[$n1++] = cycleList::fromMap($item1);
                }
            }
        }

        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n1 = 0;
                foreach ($map['FilterModules'] as $item1) {
                    $model->filterModules[$n1++] = filterModules::fromMap($item1);
                }
            }
        }

        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['ModuleMapList'])) {
            if (!empty($map['ModuleMapList'])) {
                $model->moduleMapList = [];
                $n1 = 0;
                foreach ($map['ModuleMapList'] as $item1) {
                    $model->moduleMapList[$n1++] = moduleMapList::fromMap($item1);
                }
            }
        }

        if (isset($map['PayModeList'])) {
            if (!empty($map['PayModeList'])) {
                $model->payModeList = [];
                $n1 = 0;
                foreach ($map['PayModeList'] as $item1) {
                    $model->payModeList[$n1++] = payModeList::fromMap($item1);
                }
            }
        }

        if (isset($map['PricingModules'])) {
            if (!empty($map['PricingModules'])) {
                $model->pricingModules = [];
                $n1 = 0;
                foreach ($map['PricingModules'] as $item1) {
                    $model->pricingModules[$n1++] = pricingModules::fromMap($item1);
                }
            }
        }

        if (isset($map['SpnCommodityCode'])) {
            $model->spnCommodityCode = $map['SpnCommodityCode'];
        }

        if (isset($map['SpnCommodityName'])) {
            $model->spnCommodityName = $map['SpnCommodityName'];
        }

        if (isset($map['SpnDiscountConfigType'])) {
            $model->spnDiscountConfigType = $map['SpnDiscountConfigType'];
        }

        if (isset($map['StepPriceMap'])) {
            if (!empty($map['StepPriceMap'])) {
                $model->stepPriceMap = [];
                foreach ($map['StepPriceMap'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->stepPriceMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->stepPriceMap[$key1][$n2++] = DataStepPriceMapValue::fromMap($item2);
                        }
                    }
                }
            }
        }

        return $model;
    }
}
