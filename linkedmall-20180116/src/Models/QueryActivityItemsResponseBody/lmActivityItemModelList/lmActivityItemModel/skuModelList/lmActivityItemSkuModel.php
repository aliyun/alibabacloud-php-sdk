<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList;

use AlibabaCloud\Tea\Model;

class lmActivityItemSkuModel extends Model
{
    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $activityStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var int
     */
    public $activityPrice;

    /**
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'reservedPrice'  => 'ReservedPrice',
        'tips'           => 'Tips',
        'lmItemId'       => 'LmItemId',
        'skuId'          => 'SkuId',
        'lmActivityId'   => 'LmActivityId',
        'activityStatus' => 'ActivityStatus',
        'bizId'          => 'BizId',
        'itemId'         => 'ItemId',
        'skuPicUrl'      => 'SkuPicUrl',
        'activityPrice'  => 'ActivityPrice',
        'skuTitle'       => 'SkuTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->activityStatus) {
            $res['ActivityStatus'] = $this->activityStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->activityPrice) {
            $res['ActivityPrice'] = $this->activityPrice;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityItemSkuModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['ActivityStatus'])) {
            $model->activityStatus = $map['ActivityStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['ActivityPrice'])) {
            $model->activityPrice = $map['ActivityPrice'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }

        return $model;
    }
}
