<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityShrinkRequest;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityShrinkRequest\fusionPromotionParamList\moduleInfoParamList;
use AlibabaCloud\Tea\Model;

class fusionPromotionParamList extends Model
{
    /**
     * @var string[]
     */
    public $commodityCodeList;

    /**
     * @var float
     */
    public $promotionValue;

    /**
     * @var string[]
     */
    public $restrictedRegionList;

    /**
     * @var moduleInfoParamList[]
     */
    public $moduleInfoParamList;
    protected $_name = [
        'commodityCodeList'    => 'CommodityCodeList',
        'promotionValue'       => 'PromotionValue',
        'restrictedRegionList' => 'RestrictedRegionList',
        'moduleInfoParamList'  => 'moduleInfoParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCodeList) {
            $res['CommodityCodeList'] = $this->commodityCodeList;
        }
        if (null !== $this->promotionValue) {
            $res['PromotionValue'] = $this->promotionValue;
        }
        if (null !== $this->restrictedRegionList) {
            $res['RestrictedRegionList'] = $this->restrictedRegionList;
        }
        if (null !== $this->moduleInfoParamList) {
            $res['moduleInfoParamList'] = [];
            if (null !== $this->moduleInfoParamList && \is_array($this->moduleInfoParamList)) {
                $n = 0;
                foreach ($this->moduleInfoParamList as $item) {
                    $res['moduleInfoParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fusionPromotionParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCodeList'])) {
            if (!empty($map['CommodityCodeList'])) {
                $model->commodityCodeList = $map['CommodityCodeList'];
            }
        }
        if (isset($map['PromotionValue'])) {
            $model->promotionValue = $map['PromotionValue'];
        }
        if (isset($map['RestrictedRegionList'])) {
            if (!empty($map['RestrictedRegionList'])) {
                $model->restrictedRegionList = $map['RestrictedRegionList'];
            }
        }
        if (isset($map['moduleInfoParamList'])) {
            if (!empty($map['moduleInfoParamList'])) {
                $model->moduleInfoParamList = [];
                $n                          = 0;
                foreach ($map['moduleInfoParamList'] as $item) {
                    $model->moduleInfoParamList[$n++] = null !== $item ? moduleInfoParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
