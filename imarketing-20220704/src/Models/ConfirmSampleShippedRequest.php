<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ConfirmSampleShippedRequest extends Model
{
    /**
     * @var string
     */
    public $buyerAddress;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @example 13988888888
     *
     * @var string
     */
    public $buyerPhoneNumber;

    /**
     * @example 665934690847195139
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 8607f977-20eb-438f-957e-72d6df43ef8f
     *
     * @var string
     */
    public $tradeId;
    protected $_name = [
        'buyerAddress'     => 'BuyerAddress',
        'buyerName'        => 'BuyerName',
        'buyerPhoneNumber' => 'BuyerPhoneNumber',
        'channelId'        => 'ChannelId',
        'tradeId'          => 'TradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerAddress) {
            $res['BuyerAddress'] = $this->buyerAddress;
        }
        if (null !== $this->buyerName) {
            $res['BuyerName'] = $this->buyerName;
        }
        if (null !== $this->buyerPhoneNumber) {
            $res['BuyerPhoneNumber'] = $this->buyerPhoneNumber;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmSampleShippedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerAddress'])) {
            $model->buyerAddress = $map['BuyerAddress'];
        }
        if (isset($map['BuyerName'])) {
            $model->buyerName = $map['BuyerName'];
        }
        if (isset($map['BuyerPhoneNumber'])) {
            $model->buyerPhoneNumber = $map['BuyerPhoneNumber'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }

        return $model;
    }
}
