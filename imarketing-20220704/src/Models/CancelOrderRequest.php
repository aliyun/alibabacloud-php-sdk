<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class CancelOrderRequest extends Model
{
    /**
     * @example 665934690847195139
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 172df1fb-e3f0-4561-be77-7aa6cd12dcc9
     *
     * @var string
     */
    public $tradeId;
    protected $_name = [
        'channelId' => 'ChannelId',
        'tradeId'   => 'TradeId',
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
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }

        return $model;
    }
}
