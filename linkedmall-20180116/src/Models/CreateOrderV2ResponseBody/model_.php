<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2ResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2ResponseBody\model\lmOrderList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2ResponseBody\model\orderIds;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2ResponseBody\model\payTradeIds;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var lmOrderList
     */
    public $lmOrderList;

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
        'lmOrderList' => 'LmOrderList',
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
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = null !== $this->lmOrderList ? $this->lmOrderList->toMap() : null;
        }
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
        if (isset($map['LmOrderList'])) {
            $model->lmOrderList = lmOrderList::fromMap($map['LmOrderList']);
        }
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
