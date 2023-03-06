<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOutDiscountOrderWithDesignatedTbUidResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mixed[][]
     */
    public $allIdsMap;

    /**
     * @example lin***app
     *
     * @var string
     */
    public $app;

    /**
     * @var string[]
     */
    public $lmOrderIds;

    /**
     * @var string[]
     */
    public $orderIds;

    /**
     * @var string[]
     */
    public $payTradeIds;

    /**
     * @example https://aliyundoc.com
     *
     * @var string
     */
    public $redirectUrl;
    protected $_name = [
        'allIdsMap'   => 'AllIdsMap',
        'app'         => 'App',
        'lmOrderIds'  => 'LmOrderIds',
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
        if (null !== $this->allIdsMap) {
            $res['AllIdsMap'] = $this->allIdsMap;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->lmOrderIds) {
            $res['LmOrderIds'] = $this->lmOrderIds;
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
        if (isset($map['AllIdsMap'])) {
            $model->allIdsMap = $map['AllIdsMap'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['LmOrderIds'])) {
            if (!empty($map['LmOrderIds'])) {
                $model->lmOrderIds = $map['LmOrderIds'];
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
