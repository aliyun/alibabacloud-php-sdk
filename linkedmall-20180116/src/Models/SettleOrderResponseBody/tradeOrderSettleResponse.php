<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponseBody;

use AlibabaCloud\Tea\Model;

class tradeOrderSettleResponse extends Model
{
    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $outRequestNo;
    protected $_name = [
        'tradeNo'      => 'TradeNo',
        'outRequestNo' => 'OutRequestNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tradeOrderSettleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }

        return $model;
    }
}
