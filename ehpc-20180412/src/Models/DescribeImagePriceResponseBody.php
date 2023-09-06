<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagePriceResponseBody extends Model
{
    /**
     * @description The number of instances that are purchased.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The discount.
     *
     * @example 0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The ID of the custom image.
     *
     * @example m-bp198jigq7l1ga11****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The original price of the image.
     *
     * @example 0.8
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The request ID.
     *
     * @example 47ca3ac4-2a03-48f1-8bf2-ba6de0f3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The final price of the image.
     *
     * @example 0.8
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'amount'        => 'Amount',
        'discountPrice' => 'DiscountPrice',
        'imageId'       => 'ImageId',
        'originalPrice' => 'OriginalPrice',
        'requestId'     => 'RequestId',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeImagePriceResponseBody
     */
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
