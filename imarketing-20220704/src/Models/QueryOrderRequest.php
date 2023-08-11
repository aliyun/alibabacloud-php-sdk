<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderRequest extends Model
{
    /**
     * @example 665934690847195139
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 202308101
     *
     * @var string
     */
    public $channelTradeId;

    /**
     * @example bb7b39c7-4982-41af-8158-1a694b40cf2a
     *
     * @var string
     */
    public $tradeId;
    protected $_name = [
        'channelId'      => 'ChannelId',
        'channelTradeId' => 'ChannelTradeId',
        'tradeId'        => 'TradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelTradeId) {
            $res['ChannelTradeId'] = $this->channelTradeId;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelTradeId'])) {
            $model->channelTradeId = $map['ChannelTradeId'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }

        return $model;
    }
}
