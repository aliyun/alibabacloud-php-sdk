<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupWithOutInventoryResponseBody;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var string
     */
    public $reservePrice;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $whitePicUrl;
    protected $_name = [
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'itemId'                 => 'ItemId',
        'itemTitle'              => 'ItemTitle',
        'itemUrl'                => 'ItemUrl',
        'lmItemId'               => 'LmItemId',
        'mainPicUrl'             => 'MainPicUrl',
        'pointPrice'             => 'PointPrice',
        'points'                 => 'Points',
        'pointsAmount'           => 'PointsAmount',
        'priceCent'              => 'PriceCent',
        'reservePrice'           => 'ReservePrice',
        'tags'                   => 'Tags',
        'whitePicUrl'            => 'WhitePicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->whitePicUrl) {
            $res['WhitePicUrl'] = $this->whitePicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['WhitePicUrl'])) {
            $model->whitePicUrl = $map['WhitePicUrl'];
        }

        return $model;
    }
}
