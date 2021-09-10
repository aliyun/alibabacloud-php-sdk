<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreatePayUrlResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $redirectUrl;

    /**
     * @var string[]
     */
    public $payTradeIds;

    /**
     * @var string[]
     */
    public $lmOrderList;

    /**
     * @var string[]
     */
    public $orderIds;
    protected $_name = [
        'redirectUrl' => 'RedirectUrl',
        'payTradeIds' => 'PayTradeIds',
        'lmOrderList' => 'LmOrderList',
        'orderIds'    => 'OrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }
        if (null !== $this->payTradeIds) {
            $res['PayTradeIds'] = $this->payTradeIds;
        }
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = $this->lmOrderList;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
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
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }
        if (isset($map['PayTradeIds'])) {
            if (!empty($map['PayTradeIds'])) {
                $model->payTradeIds = $map['PayTradeIds'];
            }
        }
        if (isset($map['LmOrderList'])) {
            if (!empty($map['LmOrderList'])) {
                $model->lmOrderList = $map['LmOrderList'];
            }
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
