<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetSmartAccessGatewayUseLimitResponseBody extends Model
{
    /**
     * @var int
     */
    public $usedAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalAmount;
    protected $_name = [
        'usedAmount'  => 'UsedAmount',
        'requestId'   => 'RequestId',
        'totalAmount' => 'TotalAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmartAccessGatewayUseLimitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        return $model;
    }
}
