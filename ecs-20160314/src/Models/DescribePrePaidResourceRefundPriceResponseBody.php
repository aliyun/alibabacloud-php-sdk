<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DescribePrePaidResourceRefundPriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $refunds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'currency'  => 'Currency',
        'refunds'   => 'Refunds',
        'requestId' => 'RequestId',
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
        if (null !== $this->refunds) {
            $res['Refunds'] = $this->refunds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrePaidResourceRefundPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Refunds'])) {
            $model->refunds = $map['Refunds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
