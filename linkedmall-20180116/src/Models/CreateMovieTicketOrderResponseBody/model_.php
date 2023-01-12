<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody\model\orderIds;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody\model\payTradeIds;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var orderIds
     */
    public $orderIds;

    /**
     * @var payTradeIds
     */
    public $payTradeIds;

    /**
     * @example ""
     *
     * @var string
     */
    public $redirectUrl;
    protected $_name = [
        'orderIds'    => 'OrderIds',
        'payTradeIds' => 'PayTradeIds',
        'redirectUrl' => 'RedirectUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIds) {
            $res['OrderIds'] = null !== $this->orderIds ? $this->orderIds->toMap() : null;
        }
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = null !== $this->payTradeIds ? $this->payTradeIds->toMap() : null;
        }
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
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
        if (isset($map['OrderIds'])) {
            $model->orderIds = orderIds::fromMap($map['OrderIds']);
        }
        if (isset($map['PayTradeIds'])) {
            $model->payTradeIds = payTradeIds::fromMap($map['PayTradeIds']);
        }
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }

        return $model;
    }
}
