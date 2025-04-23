<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class DescribeImagePriceResponseBody extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'amount' => 'Amount',
        'discountPrice' => 'DiscountPrice',
        'imageId' => 'ImageId',
        'originalPrice' => 'OriginalPrice',
        'requestId' => 'RequestId',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
