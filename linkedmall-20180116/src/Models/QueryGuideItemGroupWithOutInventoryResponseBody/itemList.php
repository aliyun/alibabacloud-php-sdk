<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupWithOutInventoryResponseBody;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $whitePicUrl;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $points;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var string
     */
    public $reservePrice;

    /**
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'itemTitle'              => 'ItemTitle',
        'priceCent'              => 'PriceCent',
        'lmItemId'               => 'LmItemId',
        'pointPrice'             => 'PointPrice',
        'itemId'                 => 'ItemId',
        'whitePicUrl'            => 'WhitePicUrl',
        'mainPicUrl'             => 'MainPicUrl',
        'points'                 => 'Points',
        'itemUrl'                => 'ItemUrl',
        'pointsAmount'           => 'PointsAmount',
        'reservePrice'           => 'ReservePrice',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->whitePicUrl) {
            $res['WhitePicUrl'] = $this->whitePicUrl;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['WhitePicUrl'])) {
            $model->whitePicUrl = $map['WhitePicUrl'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
