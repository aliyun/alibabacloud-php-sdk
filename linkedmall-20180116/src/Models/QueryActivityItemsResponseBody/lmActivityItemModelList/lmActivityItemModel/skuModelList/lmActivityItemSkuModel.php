<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList;

use AlibabaCloud\Tea\Model;

class lmActivityItemSkuModel extends Model
{
    /**
     * @var int
     */
    public $activityPrice;

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
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'activityPrice'  => 'ActivityPrice',
        'activityStatus' => 'ActivityStatus',
        'bizId'          => 'BizId',
        'itemId'         => 'ItemId',
        'lmActivityId'   => 'LmActivityId',
        'lmItemId'       => 'LmItemId',
        'reservedPrice'  => 'ReservedPrice',
        'skuId'          => 'SkuId',
        'skuPicUrl'      => 'SkuPicUrl',
        'skuTitle'       => 'SkuTitle',
        'tips'           => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityPrice) {
            $res['ActivityPrice'] = $this->activityPrice;
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
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
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
        if (isset($map['ActivityPrice'])) {
            $model->activityPrice = $map['ActivityPrice'];
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
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
