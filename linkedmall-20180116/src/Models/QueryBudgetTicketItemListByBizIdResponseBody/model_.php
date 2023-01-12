<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBudgetTicketItemListByBizIdResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $invalid;

    /**
     * @example 65******0310
     *
     * @var int
     */
    public $itemId;

    /**
     * @example ""
     *
     * @var string
     */
    public $poCode;

    /**
     * @example 68442******012
     *
     * @var string
     */
    public $promotionId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $remnantAmount;

    /**
     * @example c26be******86e5a61cc710cdb
     *
     * @var string
     */
    public $securityCode;

    /**
     * @example 100
     *
     * @var int
     */
    public $settlementPrice;

    /**
     * @example 47******76529
     *
     * @var int
     */
    public $skuId;

    /**
     * @example 10
     *
     * @var int
     */
    public $subsidyAmount;
    protected $_name = [
        'invalid'         => 'Invalid',
        'itemId'          => 'ItemId',
        'poCode'          => 'PoCode',
        'promotionId'     => 'PromotionId',
        'remnantAmount'   => 'RemnantAmount',
        'securityCode'    => 'SecurityCode',
        'settlementPrice' => 'SettlementPrice',
        'skuId'           => 'SkuId',
        'subsidyAmount'   => 'SubsidyAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalid) {
            $res['Invalid'] = $this->invalid;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->poCode) {
            $res['PoCode'] = $this->poCode;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->remnantAmount) {
            $res['RemnantAmount'] = $this->remnantAmount;
        }
        if (null !== $this->securityCode) {
            $res['SecurityCode'] = $this->securityCode;
        }
        if (null !== $this->settlementPrice) {
            $res['SettlementPrice'] = $this->settlementPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->subsidyAmount) {
            $res['SubsidyAmount'] = $this->subsidyAmount;
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
        if (isset($map['Invalid'])) {
            $model->invalid = $map['Invalid'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['PoCode'])) {
            $model->poCode = $map['PoCode'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RemnantAmount'])) {
            $model->remnantAmount = $map['RemnantAmount'];
        }
        if (isset($map['SecurityCode'])) {
            $model->securityCode = $map['SecurityCode'];
        }
        if (isset($map['SettlementPrice'])) {
            $model->settlementPrice = $map['SettlementPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SubsidyAmount'])) {
            $model->subsidyAmount = $map['SubsidyAmount'];
        }

        return $model;
    }
}
