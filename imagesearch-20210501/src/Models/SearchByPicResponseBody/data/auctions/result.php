<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data\auctions;

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
    public $pic;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $promotionPrice;

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
    public $sellerId;

    /**
     * @var int
     */
    public $monthSellCount;

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
    public $calTkRate;

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
    public $shortUrl;
    protected $_name = [
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'pic'                  => 'Pic',
        'price'                => 'Price',
        'promotionPrice'       => 'PromotionPrice',
        'priceAfterCoupon'     => 'PriceAfterCoupon',
        'userType'             => 'UserType',
        'provcity'             => 'Provcity',
        'sellerNickName'       => 'SellerNickName',
        'sellerId'             => 'SellerId',
        'monthSellCount'       => 'MonthSellCount',
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
        'calTkRate'            => 'CalTkRate',
        'couponShareUrl'       => 'CouponShareUrl',
        'clickUrl'             => 'ClickUrl',
        'shortUrl'             => 'ShortUrl',
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
        if (null !== $this->pic) {
            $res['Pic'] = $this->pic;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->promotionPrice) {
            $res['PromotionPrice'] = $this->promotionPrice;
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
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->monthSellCount) {
            $res['MonthSellCount'] = $this->monthSellCount;
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
        if (null !== $this->calTkRate) {
            $res['CalTkRate'] = $this->calTkRate;
        }
        if (null !== $this->couponShareUrl) {
            $res['CouponShareUrl'] = $this->couponShareUrl;
        }
        if (null !== $this->clickUrl) {
            $res['ClickUrl'] = $this->clickUrl;
        }
        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
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
        if (isset($map['Pic'])) {
            $model->pic = $map['Pic'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['PromotionPrice'])) {
            $model->promotionPrice = $map['PromotionPrice'];
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
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['MonthSellCount'])) {
            $model->monthSellCount = $map['MonthSellCount'];
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
        if (isset($map['CalTkRate'])) {
            $model->calTkRate = $map['CalTkRate'];
        }
        if (isset($map['CouponShareUrl'])) {
            $model->couponShareUrl = $map['CouponShareUrl'];
        }
        if (isset($map['ClickUrl'])) {
            $model->clickUrl = $map['ClickUrl'];
        }
        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }

        return $model;
    }
}
