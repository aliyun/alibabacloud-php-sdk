<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataStepPriceMapValue;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\cycleList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\payModeList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\pricingModules;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['CycleList'] = [];
            if (null !== $this->cycleList && \is_array($this->cycleList)) {
                $n = 0;
                foreach ($this->cycleList as $item) {
                    $res['CycleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->filterModules) {
            $res['FilterModules'] = [];
            if (null !== $this->filterModules && \is_array($this->filterModules)) {
                $n = 0;
                foreach ($this->filterModules as $item) {
                    $res['FilterModules'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ModuleMapList'] = [];
            if (null !== $this->moduleMapList && \is_array($this->moduleMapList)) {
                $n = 0;
                foreach ($this->moduleMapList as $item) {
                    $res['ModuleMapList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payModeList) {
            $res['PayModeList'] = [];
            if (null !== $this->payModeList && \is_array($this->payModeList)) {
                $n = 0;
                foreach ($this->payModeList as $item) {
                    $res['PayModeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pricingModules) {
            $res['PricingModules'] = [];
            if (null !== $this->pricingModules && \is_array($this->pricingModules)) {
                $n = 0;
                foreach ($this->pricingModules as $item) {
                    $res['PricingModules'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['StepPriceMap'] = $this->stepPriceMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['CycleList'] as $item) {
                    $model->cycleList[$n++] = null !== $item ? cycleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n = 0;
                foreach ($map['FilterModules'] as $item) {
                    $model->filterModules[$n++] = null !== $item ? filterModules::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['ModuleMapList'] as $item) {
                    $model->moduleMapList[$n++] = null !== $item ? moduleMapList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PayModeList'])) {
            if (!empty($map['PayModeList'])) {
                $model->payModeList = [];
                $n = 0;
                foreach ($map['PayModeList'] as $item) {
                    $model->payModeList[$n++] = null !== $item ? payModeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PricingModules'])) {
            if (!empty($map['PricingModules'])) {
                $model->pricingModules = [];
                $n = 0;
                foreach ($map['PricingModules'] as $item) {
                    $model->pricingModules[$n++] = null !== $item ? pricingModules::fromMap($item) : $item;
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
            $model->stepPriceMap = $map['StepPriceMap'];
        }

        return $model;
    }
}
