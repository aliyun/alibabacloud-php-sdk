<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data\auctions;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data\auctions\result\maxCommission;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $pic;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $promotionPrice;

    /**
     * @var string
     */
    public $zkFinalPrice;

    /**
     * @var string
     */
    public $priceAfterCoupon;

    /**
     * @var int
     */
    public $userType;

    /**
     * @var string
     */
    public $provcity;

    /**
     * @var string
     */
    public $sellerNickName;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $sellerId;

    /**
     * @var int
     */
    public $monthSellCount;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var string
     */
    public $levelOneCategoryName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $couponActivityId;

    /**
     * @var string
     */
    public $couponTotalCount;

    /**
     * @var string
     */
    public $couponSendCount;

    /**
     * @var int
     */
    public $couponRemainCount;

    /**
     * @var string
     */
    public $couponStartTime;

    /**
     * @var string
     */
    public $couponEndTime;

    /**
     * @var string
     */
    public $couponStartFee;

    /**
     * @var int
     */
    public $couponAmount;

    /**
     * @var string
     */
    public $couponSaleTextInfo;

    /**
     * @var string
     */
    public $couponInfo;

    /**
     * @var int
     */
    public $tkMktRate;

    /**
     * @var int
     */
    public $tkRate;

    /**
     * @var string
     */
    public $commissionRate;

    /**
     * @var string
     */
    public $couponShareUrl;

    /**
     * @var string
     */
    public $clickUrl;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $shortUrl;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $shopTitle;

    /**
     * @var maxCommission
     */
    public $maxCommission;
    protected $_name = [
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'title'                => 'Title',
        'pic'                  => 'Pic',
        'picUrl'               => 'PicUrl',
        'price'                => 'Price',
        'reservePrice'         => 'ReservePrice',
        'promotionPrice'       => 'PromotionPrice',
        'zkFinalPrice'         => 'ZkFinalPrice',
        'priceAfterCoupon'     => 'PriceAfterCoupon',
        'userType'             => 'UserType',
        'provcity'             => 'Provcity',
        'sellerNickName'       => 'SellerNickName',
        'nick'                 => 'Nick',
        'sellerId'             => 'SellerId',
        'monthSellCount'       => 'MonthSellCount',
        'volume'               => 'Volume',
        'levelOneCategoryName' => 'LevelOneCategoryName',
        'categoryName'         => 'CategoryName',
        'couponActivityId'     => 'CouponActivityId',
        'couponTotalCount'     => 'CouponTotalCount',
        'couponSendCount'      => 'CouponSendCount',
        'couponRemainCount'    => 'CouponRemainCount',
        'couponStartTime'      => 'CouponStartTime',
        'couponEndTime'        => 'CouponEndTime',
        'couponStartFee'       => 'CouponStartFee',
        'couponAmount'         => 'CouponAmount',
        'couponSaleTextInfo'   => 'CouponSaleTextInfo',
        'couponInfo'           => 'CouponInfo',
        'tkMktRate'            => 'TkMktRate',
        'tkRate'               => 'TkRate',
        'commissionRate'       => 'CommissionRate',
        'couponShareUrl'       => 'CouponShareUrl',
        'clickUrl'             => 'ClickUrl',
        'url'                  => 'Url',
        'shortUrl'             => 'ShortUrl',
        'key'                  => 'Key',
        'shopTitle'            => 'ShopTitle',
        'maxCommission'        => 'MaxCommission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->pic) {
            $res['Pic'] = $this->pic;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->promotionPrice) {
            $res['PromotionPrice'] = $this->promotionPrice;
        }
        if (null !== $this->zkFinalPrice) {
            $res['ZkFinalPrice'] = $this->zkFinalPrice;
        }
        if (null !== $this->priceAfterCoupon) {
            $res['PriceAfterCoupon'] = $this->priceAfterCoupon;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->provcity) {
            $res['Provcity'] = $this->provcity;
        }
        if (null !== $this->sellerNickName) {
            $res['SellerNickName'] = $this->sellerNickName;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->monthSellCount) {
            $res['MonthSellCount'] = $this->monthSellCount;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->levelOneCategoryName) {
            $res['LevelOneCategoryName'] = $this->levelOneCategoryName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->couponActivityId) {
            $res['CouponActivityId'] = $this->couponActivityId;
        }
        if (null !== $this->couponTotalCount) {
            $res['CouponTotalCount'] = $this->couponTotalCount;
        }
        if (null !== $this->couponSendCount) {
            $res['CouponSendCount'] = $this->couponSendCount;
        }
        if (null !== $this->couponRemainCount) {
            $res['CouponRemainCount'] = $this->couponRemainCount;
        }
        if (null !== $this->couponStartTime) {
            $res['CouponStartTime'] = $this->couponStartTime;
        }
        if (null !== $this->couponEndTime) {
            $res['CouponEndTime'] = $this->couponEndTime;
        }
        if (null !== $this->couponStartFee) {
            $res['CouponStartFee'] = $this->couponStartFee;
        }
        if (null !== $this->couponAmount) {
            $res['CouponAmount'] = $this->couponAmount;
        }
        if (null !== $this->couponSaleTextInfo) {
            $res['CouponSaleTextInfo'] = $this->couponSaleTextInfo;
        }
        if (null !== $this->couponInfo) {
            $res['CouponInfo'] = $this->couponInfo;
        }
        if (null !== $this->tkMktRate) {
            $res['TkMktRate'] = $this->tkMktRate;
        }
        if (null !== $this->tkRate) {
            $res['TkRate'] = $this->tkRate;
        }
        if (null !== $this->commissionRate) {
            $res['CommissionRate'] = $this->commissionRate;
        }
        if (null !== $this->couponShareUrl) {
            $res['CouponShareUrl'] = $this->couponShareUrl;
        }
        if (null !== $this->clickUrl) {
            $res['ClickUrl'] = $this->clickUrl;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->shopTitle) {
            $res['ShopTitle'] = $this->shopTitle;
        }
        if (null !== $this->maxCommission) {
            $res['MaxCommission'] = null !== $this->maxCommission ? $this->maxCommission->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Pic'])) {
            $model->pic = $map['Pic'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['PromotionPrice'])) {
            $model->promotionPrice = $map['PromotionPrice'];
        }
        if (isset($map['ZkFinalPrice'])) {
            $model->zkFinalPrice = $map['ZkFinalPrice'];
        }
        if (isset($map['PriceAfterCoupon'])) {
            $model->priceAfterCoupon = $map['PriceAfterCoupon'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Provcity'])) {
            $model->provcity = $map['Provcity'];
        }
        if (isset($map['SellerNickName'])) {
            $model->sellerNickName = $map['SellerNickName'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['MonthSellCount'])) {
            $model->monthSellCount = $map['MonthSellCount'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['LevelOneCategoryName'])) {
            $model->levelOneCategoryName = $map['LevelOneCategoryName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CouponActivityId'])) {
            $model->couponActivityId = $map['CouponActivityId'];
        }
        if (isset($map['CouponTotalCount'])) {
            $model->couponTotalCount = $map['CouponTotalCount'];
        }
        if (isset($map['CouponSendCount'])) {
            $model->couponSendCount = $map['CouponSendCount'];
        }
        if (isset($map['CouponRemainCount'])) {
            $model->couponRemainCount = $map['CouponRemainCount'];
        }
        if (isset($map['CouponStartTime'])) {
            $model->couponStartTime = $map['CouponStartTime'];
        }
        if (isset($map['CouponEndTime'])) {
            $model->couponEndTime = $map['CouponEndTime'];
        }
        if (isset($map['CouponStartFee'])) {
            $model->couponStartFee = $map['CouponStartFee'];
        }
        if (isset($map['CouponAmount'])) {
            $model->couponAmount = $map['CouponAmount'];
        }
        if (isset($map['CouponSaleTextInfo'])) {
            $model->couponSaleTextInfo = $map['CouponSaleTextInfo'];
        }
        if (isset($map['CouponInfo'])) {
            $model->couponInfo = $map['CouponInfo'];
        }
        if (isset($map['TkMktRate'])) {
            $model->tkMktRate = $map['TkMktRate'];
        }
        if (isset($map['TkRate'])) {
            $model->tkRate = $map['TkRate'];
        }
        if (isset($map['CommissionRate'])) {
            $model->commissionRate = $map['CommissionRate'];
        }
        if (isset($map['CouponShareUrl'])) {
            $model->couponShareUrl = $map['CouponShareUrl'];
        }
        if (isset($map['ClickUrl'])) {
            $model->clickUrl = $map['ClickUrl'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ShopTitle'])) {
            $model->shopTitle = $map['ShopTitle'];
        }
        if (isset($map['MaxCommission'])) {
            $model->maxCommission = maxCommission::fromMap($map['MaxCommission']);
        }

        return $model;
    }
}
