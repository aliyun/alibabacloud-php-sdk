<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceResponseBody\model\skuModels;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string
     */
    public $guideRetailPriceScope;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var string
     */
    public $reservedPriceScope;

    /**
     * @var skuModels[]
     */
    public $skuModels;
    protected $_name = [
        'distributionMallId'    => 'DistributionMallId',
        'guideRetailPriceScope' => 'GuideRetailPriceScope',
        'itemId'                => 'ItemId',
        'itemTitle'             => 'ItemTitle',
        'lmItemId'              => 'LmItemId',
        'reservedPrice'         => 'ReservedPrice',
        'reservedPriceScope'    => 'ReservedPriceScope',
        'skuModels'             => 'SkuModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->guideRetailPriceScope) {
            $res['GuideRetailPriceScope'] = $this->guideRetailPriceScope;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->reservedPriceScope) {
            $res['ReservedPriceScope'] = $this->reservedPriceScope;
        }
        if (null !== $this->skuModels) {
            $res['SkuModels'] = [];
            if (null !== $this->skuModels && \is_array($this->skuModels)) {
                $n = 0;
                foreach ($this->skuModels as $item) {
                    $res['SkuModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['GuideRetailPriceScope'])) {
            $model->guideRetailPriceScope = $map['GuideRetailPriceScope'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['ReservedPriceScope'])) {
            $model->reservedPriceScope = $map['ReservedPriceScope'];
        }
        if (isset($map['SkuModels'])) {
            if (!empty($map['SkuModels'])) {
                $model->skuModels = [];
                $n                = 0;
                foreach ($map['SkuModels'] as $item) {
                    $model->skuModels[$n++] = null !== $item ? skuModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
