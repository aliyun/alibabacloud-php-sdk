<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos\lmItemInfos;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos\lmItemInfos\itemPromInstVOS\availableItems;
use AlibabaCloud\Tea\Model;

class itemPromInstVOS extends Model
{
    /**
     * @var availableItems[]
     */
    public $availableItems;

    /**
     * @var bool
     */
    public $canUse;

    /**
     * @var int
     */
    public $discountPrice;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $promotionName;

    /**
     * @var string
     */
    public $promotionType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $selected;

    /**
     * @var int[]
     */
    public $skuIds;

    /**
     * @var int
     */
    public $specialPrice;

    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var int
     */
    public $tbSellerId;

    /**
     * @var int
     */
    public $thresholdPrice;

    /**
     * @var int
     */
    public $useStartTime;
    protected $_name = [
        'availableItems' => 'AvailableItems',
        'canUse'         => 'CanUse',
        'discountPrice'  => 'DiscountPrice',
        'expireTime'     => 'ExpireTime',
        'instanceId'     => 'InstanceId',
        'level'          => 'Level',
        'lmItemId'       => 'LmItemId',
        'promotionName'  => 'PromotionName',
        'promotionType'  => 'PromotionType',
        'reason'         => 'Reason',
        'selected'       => 'Selected',
        'skuIds'         => 'SkuIds',
        'specialPrice'   => 'SpecialPrice',
        'subBizCode'     => 'SubBizCode',
        'tbSellerId'     => 'TbSellerId',
        'thresholdPrice' => 'ThresholdPrice',
        'useStartTime'   => 'UseStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableItems) {
            $res['AvailableItems'] = [];
            if (null !== $this->availableItems && \is_array($this->availableItems)) {
                $n = 0;
                foreach ($this->availableItems as $item) {
                    $res['AvailableItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->canUse) {
            $res['CanUse'] = $this->canUse;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->promotionType) {
            $res['PromotionType'] = $this->promotionType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }
        if (null !== $this->skuIds) {
            $res['SkuIds'] = $this->skuIds;
        }
        if (null !== $this->specialPrice) {
            $res['SpecialPrice'] = $this->specialPrice;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->tbSellerId) {
            $res['TbSellerId'] = $this->tbSellerId;
        }
        if (null !== $this->thresholdPrice) {
            $res['ThresholdPrice'] = $this->thresholdPrice;
        }
        if (null !== $this->useStartTime) {
            $res['UseStartTime'] = $this->useStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemPromInstVOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableItems'])) {
            if (!empty($map['AvailableItems'])) {
                $model->availableItems = [];
                $n                     = 0;
                foreach ($map['AvailableItems'] as $item) {
                    $model->availableItems[$n++] = null !== $item ? availableItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CanUse'])) {
            $model->canUse = $map['CanUse'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['PromotionType'])) {
            $model->promotionType = $map['PromotionType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }
        if (isset($map['SkuIds'])) {
            if (!empty($map['SkuIds'])) {
                $model->skuIds = $map['SkuIds'];
            }
        }
        if (isset($map['SpecialPrice'])) {
            $model->specialPrice = $map['SpecialPrice'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['TbSellerId'])) {
            $model->tbSellerId = $map['TbSellerId'];
        }
        if (isset($map['ThresholdPrice'])) {
            $model->thresholdPrice = $map['ThresholdPrice'];
        }
        if (isset($map['UseStartTime'])) {
            $model->useStartTime = $map['UseStartTime'];
        }

        return $model;
    }
}
