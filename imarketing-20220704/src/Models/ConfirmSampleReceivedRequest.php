<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ConfirmSampleReceivedRequest extends Model
{
    /**
     * @example 665934690847195139
     *
     * @var string
     */
    public $channelId;

    /**
     * @example e293f3d3-1e51-4e60-a0bb-392a508b0c29
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
     * @return ConfirmSampleReceivedRequest
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
