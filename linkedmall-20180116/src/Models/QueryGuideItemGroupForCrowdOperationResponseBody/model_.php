<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupForCrowdOperationResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $atmospherePicUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @var string[]
     */
    public $customizedAttributeMap;

    /**
     * @example 65******0310
     *
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example https://******.aliyun-inc.com/#/assistant?targetTab=TAB_GM_FAIL&regionId=9&startTime=2022-08-22%2000:00:00&endTime=2022-08-22%2018:06:01&appIds=408
     *
     * @var string
     */
    public $itemUrl;

    /**
     * @example 10000102-630292778855
     *
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
     * @example 3980
     *
     * @var int
     */
    public $points;

    /**
     * @example 8000
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 780
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example 1035
     *
     * @var string
     */
    public $reservePrice;

    /**
     * @var int[]
     */
    public $tags;

    /**
     * @var string
     */
    public $whitePicUrl;
    protected $_name = [
        'atmospherePicUrl'       => 'AtmospherePicUrl',
        'canSell'                => 'CanSell',
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
        if (null !== $this->atmospherePicUrl) {
            $res['AtmospherePicUrl'] = $this->atmospherePicUrl;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
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
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtmospherePicUrl'])) {
            $model->atmospherePicUrl = $map['AtmospherePicUrl'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
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
