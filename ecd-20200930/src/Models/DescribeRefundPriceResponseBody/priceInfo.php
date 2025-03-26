<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRefundPriceResponseBody;

use AlibabaCloud\Dara\Model;

class priceInfo extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $refundFee;
    protected $_name = [
        'currency' => 'Currency',
        'refundFee' => 'RefundFee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
