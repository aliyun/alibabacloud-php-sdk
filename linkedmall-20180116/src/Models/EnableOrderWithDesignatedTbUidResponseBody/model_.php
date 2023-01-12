<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderWithDesignatedTbUidResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderWithDesignatedTbUidResponseBody\model\lmOrderList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var lmOrderList[]
     */
    public $lmOrderList;

    /**
     * @var string[]
     */
    public $orderIds;

    /**
     * @var string[]
     */
    public $payTradeIds;

    /**
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
            $res['LmOrderList'] = [];
            if (null !== $this->lmOrderList && \is_array($this->lmOrderList)) {
                $n = 0;
                foreach ($this->lmOrderList as $item) {
                    $res['LmOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = $this->payTradeIds;
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
            if (!empty($map['LmOrderList'])) {
                $model->lmOrderList = [];
                $n                  = 0;
                foreach ($map['LmOrderList'] as $item) {
                    $model->lmOrderList[$n++] = null !== $item ? lmOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }
        if (isset($map['PayTradeIds'])) {
            if (!empty($map['PayTradeIds'])) {
                $model->payTradeIds = $map['PayTradeIds'];
            }
        }
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }

        return $model;
    }
}
