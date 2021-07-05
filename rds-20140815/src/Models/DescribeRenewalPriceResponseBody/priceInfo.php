<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo\activityInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo\coupons;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo\ruleIds;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var coupons
     */
    public $coupons;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var activityInfo
     */
    public $activityInfo;
    protected $_name = [
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'currency'      => 'Currency',
        'tradePrice'    => 'TradePrice',
        'coupons'       => 'Coupons',
        'ruleIds'       => 'RuleIds',
        'activityInfo'  => 'ActivityInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->activityInfo) {
            $res['ActivityInfo'] = null !== $this->activityInfo ? $this->activityInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['ActivityInfo'])) {
            $model->activityInfo = activityInfo::fromMap($map['ActivityInfo']);
        }

        return $model;
    }
}
