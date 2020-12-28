<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagePriceRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $skuCode;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'imageId'   => 'ImageId',
        'priceUnit' => 'PriceUnit',
        'skuCode'   => 'SkuCode',
        'period'    => 'Period',
        'amount'    => 'Amount',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
