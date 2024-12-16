<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRefundPriceResponseBody;

use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 3990.75
     *
     * @var float
     */
    public $refundFee;
    protected $_name = [
        'currency'  => 'Currency',
        'refundFee' => 'RefundFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->refundFee) {
            $res['RefundFee'] = $this->refundFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['RefundFee'])) {
            $model->refundFee = $map['RefundFee'];
        }

        return $model;
    }
}
