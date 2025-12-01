<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBuyerDomainTradeRecordsResponseBody\module;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $deliveryTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var string
     */
    public $tradeType;
    protected $_name = [
        'bizId' => 'BizId',
        'currency' => 'Currency',
        'deliveryTime' => 'DeliveryTime',
        'domainName' => 'DomainName',
        'payTime' => 'PayTime',
        'status' => 'Status',
        'tradeId' => 'TradeId',
        'tradePrice' => 'TradePrice',
        'tradeType' => 'TradeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        if (null !== $this->tradeType) {
            $res['TradeType'] = $this->tradeType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        if (isset($map['TradeType'])) {
            $model->tradeType = $map['TradeType'];
        }

        return $model;
    }
}
