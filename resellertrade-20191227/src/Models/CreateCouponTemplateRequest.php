<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\CreateCouponTemplateRequest\currency;
use AlibabaCloud\Tea\Model;

class CreateCouponTemplateRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $activitySite;

    /**
     * @example 26888
     *
     * @var int
     */
    public $bid;

    /**
     * @example 200
     *
     * @var float
     */
    public $certainMoney;

    /**
     * @example UNIVERSAL
     *
     * @var string
     */
    public $clientType;

    /**
     * @example FULLSITE_SELF
     *
     * @var string
     */
    public $commodityType;

    /**
     * @example AMOUNT
     *
     * @var string
     */
    public $controlType;

    /**
     * @example 100
     *
     * @var float
     */
    public $couponAmount;

    /**
     * @example 1577851200
     *
     * @var string
     */
    public $couponEndTime;

    /**
     * @example FIXED
     *
     * @var string
     */
    public $couponFixedType;

    /**
     * @example 1577851200
     *
     * @var string
     */
    public $couponStartTime;

    /**
     * @example VOUCHER
     *
     * @var string
     */
    public $couponType;

    /**
     * @var currency
     */
    public $currency;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $discountRate;

    /**
     * @example 1577851200
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $extendsMap;

    /**
     * @example test
     *
     * @var string
     */
    public $fromApp;

    /**
     * @var string[]
     */
    public $itemCodeSet;

    /**
     * @example INTL
     *
     * @var string
     */
    public $market;

    /**
     * @example 9
     *
     * @var int
     */
    public $marketType;

    /**
     * @example 100
     *
     * @var float
     */
    public $maxRelease;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example xxx
     *
     * @var string
     */
    public $operator;

    /**
     * @var string[]
     */
    public $orderTypeSet;

    /**
     * @example 1
     *
     * @var int
     */
    public $perLimitNum;

    /**
     * @example 1231
     *
     * @var int
     */
    public $promotionId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 10
     *
     * @var int
     */
    public $relativeSecond;

    /**
     * @example vsdvnjwegiq
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $selectionIdSet;

    /**
     * @example 123123563464
     *
     * @var int
     */
    public $sellerId;

    /**
     * @example INTL
     *
     * @var string
     */
    public $site;

    /**
     * @example 123123
     *
     * @var int
     */
    public $spId;

    /**
     * @example 1577851200
     *
     * @var string
     */
    public $startTime;

    /**
     * @example APPLY
     *
     * @var string
     */
    public $type;

    /**
     * @example UNIVERSAL
     *
     * @var string
     */
    public $universalType;

    /**
     * @example 100
     *
     * @var float
     */
    public $upperLimit;

    /**
     * @example 0
     *
     * @var int
     */
    public $usageCount;

    /**
     * @example TEST
     *
     * @var string
     */
    public $useScene;

    /**
     * @example 12341234,100
     *
     * @var string
     */
    public $userPkAmount;

    /**
     * @example RELATIVE
     *
     * @var string
     */
    public $validityType;
    protected $_name = [
        'activitySite'    => 'ActivitySite',
        'bid'             => 'Bid',
        'certainMoney'    => 'CertainMoney',
        'clientType'      => 'ClientType',
        'commodityType'   => 'CommodityType',
        'controlType'     => 'ControlType',
        'couponAmount'    => 'CouponAmount',
        'couponEndTime'   => 'CouponEndTime',
        'couponFixedType' => 'CouponFixedType',
        'couponStartTime' => 'CouponStartTime',
        'couponType'      => 'CouponType',
        'currency'        => 'Currency',
        'description'     => 'Description',
        'discountRate'    => 'DiscountRate',
        'endTime'         => 'EndTime',
        'extendsMap'      => 'ExtendsMap',
        'fromApp'         => 'FromApp',
        'itemCodeSet'     => 'ItemCodeSet',
        'market'          => 'Market',
        'marketType'      => 'MarketType',
        'maxRelease'      => 'MaxRelease',
        'messageId'       => 'MessageId',
        'name'            => 'Name',
        'operator'        => 'Operator',
        'orderTypeSet'    => 'OrderTypeSet',
        'perLimitNum'     => 'PerLimitNum',
        'promotionId'     => 'PromotionId',
        'reason'          => 'Reason',
        'relativeSecond'  => 'RelativeSecond',
        'requestId'       => 'RequestId',
        'selectionIdSet'  => 'SelectionIdSet',
        'sellerId'        => 'SellerId',
        'site'            => 'Site',
        'spId'            => 'SpId',
        'startTime'       => 'StartTime',
        'type'            => 'Type',
        'universalType'   => 'UniversalType',
        'upperLimit'      => 'UpperLimit',
        'usageCount'      => 'UsageCount',
        'useScene'        => 'UseScene',
        'userPkAmount'    => 'UserPkAmount',
        'validityType'    => 'ValidityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activitySite) {
            $res['ActivitySite'] = $this->activitySite;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->certainMoney) {
            $res['CertainMoney'] = $this->certainMoney;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }
        if (null !== $this->controlType) {
            $res['ControlType'] = $this->controlType;
        }
        if (null !== $this->couponAmount) {
            $res['CouponAmount'] = $this->couponAmount;
        }
        if (null !== $this->couponEndTime) {
            $res['CouponEndTime'] = $this->couponEndTime;
        }
        if (null !== $this->couponFixedType) {
            $res['CouponFixedType'] = $this->couponFixedType;
        }
        if (null !== $this->couponStartTime) {
            $res['CouponStartTime'] = $this->couponStartTime;
        }
        if (null !== $this->couponType) {
            $res['CouponType'] = $this->couponType;
        }
        if (null !== $this->currency) {
            $res['Currency'] = null !== $this->currency ? $this->currency->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extendsMap) {
            $res['ExtendsMap'] = $this->extendsMap;
        }
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->itemCodeSet) {
            $res['ItemCodeSet'] = $this->itemCodeSet;
        }
        if (null !== $this->market) {
            $res['Market'] = $this->market;
        }
        if (null !== $this->marketType) {
            $res['MarketType'] = $this->marketType;
        }
        if (null !== $this->maxRelease) {
            $res['MaxRelease'] = $this->maxRelease;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->orderTypeSet) {
            $res['OrderTypeSet'] = $this->orderTypeSet;
        }
        if (null !== $this->perLimitNum) {
            $res['PerLimitNum'] = $this->perLimitNum;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->relativeSecond) {
            $res['RelativeSecond'] = $this->relativeSecond;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->selectionIdSet) {
            $res['SelectionIdSet'] = $this->selectionIdSet;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->spId) {
            $res['SpId'] = $this->spId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->universalType) {
            $res['UniversalType'] = $this->universalType;
        }
        if (null !== $this->upperLimit) {
            $res['UpperLimit'] = $this->upperLimit;
        }
        if (null !== $this->usageCount) {
            $res['UsageCount'] = $this->usageCount;
        }
        if (null !== $this->useScene) {
            $res['UseScene'] = $this->useScene;
        }
        if (null !== $this->userPkAmount) {
            $res['UserPkAmount'] = $this->userPkAmount;
        }
        if (null !== $this->validityType) {
            $res['ValidityType'] = $this->validityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCouponTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivitySite'])) {
            $model->activitySite = $map['ActivitySite'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['CertainMoney'])) {
            $model->certainMoney = $map['CertainMoney'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }
        if (isset($map['ControlType'])) {
            $model->controlType = $map['ControlType'];
        }
        if (isset($map['CouponAmount'])) {
            $model->couponAmount = $map['CouponAmount'];
        }
        if (isset($map['CouponEndTime'])) {
            $model->couponEndTime = $map['CouponEndTime'];
        }
        if (isset($map['CouponFixedType'])) {
            $model->couponFixedType = $map['CouponFixedType'];
        }
        if (isset($map['CouponStartTime'])) {
            $model->couponStartTime = $map['CouponStartTime'];
        }
        if (isset($map['CouponType'])) {
            $model->couponType = $map['CouponType'];
        }
        if (isset($map['Currency'])) {
            $model->currency = currency::fromMap($map['Currency']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtendsMap'])) {
            $model->extendsMap = $map['ExtendsMap'];
        }
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['ItemCodeSet'])) {
            if (!empty($map['ItemCodeSet'])) {
                $model->itemCodeSet = $map['ItemCodeSet'];
            }
        }
        if (isset($map['Market'])) {
            $model->market = $map['Market'];
        }
        if (isset($map['MarketType'])) {
            $model->marketType = $map['MarketType'];
        }
        if (isset($map['MaxRelease'])) {
            $model->maxRelease = $map['MaxRelease'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OrderTypeSet'])) {
            if (!empty($map['OrderTypeSet'])) {
                $model->orderTypeSet = $map['OrderTypeSet'];
            }
        }
        if (isset($map['PerLimitNum'])) {
            $model->perLimitNum = $map['PerLimitNum'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RelativeSecond'])) {
            $model->relativeSecond = $map['RelativeSecond'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SelectionIdSet'])) {
            if (!empty($map['SelectionIdSet'])) {
                $model->selectionIdSet = $map['SelectionIdSet'];
            }
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['SpId'])) {
            $model->spId = $map['SpId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UniversalType'])) {
            $model->universalType = $map['UniversalType'];
        }
        if (isset($map['UpperLimit'])) {
            $model->upperLimit = $map['UpperLimit'];
        }
        if (isset($map['UsageCount'])) {
            $model->usageCount = $map['UsageCount'];
        }
        if (isset($map['UseScene'])) {
            $model->useScene = $map['UseScene'];
        }
        if (isset($map['UserPkAmount'])) {
            $model->userPkAmount = $map['UserPkAmount'];
        }
        if (isset($map['ValidityType'])) {
            $model->validityType = $map['ValidityType'];
        }

        return $model;
    }
}
