<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponseBody;

use AlibabaCloud\Tea\Model;

class tradeOrderSettleResponse extends Model
{
    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'outRequestNo' => 'OutRequestNo',
        'tradeNo'      => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
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
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
