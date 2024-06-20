<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Tea\Model;

class GetMonthAmountResponseBody extends Model
{
    /**
     * @var int
     */
    public $backgroundAmount;

    /**
     * @var int
     */
    public $postpayAmount;

    /**
     * @var int
     */
    public $prepayAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalAmount;
    protected $_name = [
        'backgroundAmount' => 'BackgroundAmount',
        'postpayAmount'    => 'PostpayAmount',
        'prepayAmount'     => 'PrepayAmount',
        'requestId'        => 'RequestId',
        'totalAmount'      => 'TotalAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundAmount) {
            $res['BackgroundAmount'] = $this->backgroundAmount;
        }
        if (null !== $this->postpayAmount) {
            $res['PostpayAmount'] = $this->postpayAmount;
        }
        if (null !== $this->prepayAmount) {
            $res['PrepayAmount'] = $this->prepayAmount;
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
     * @return GetMonthAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundAmount'])) {
            $model->backgroundAmount = $map['BackgroundAmount'];
        }
        if (isset($map['PostpayAmount'])) {
            $model->postpayAmount = $map['PostpayAmount'];
        }
        if (isset($map['PrepayAmount'])) {
            $model->prepayAmount = $map['PrepayAmount'];
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
