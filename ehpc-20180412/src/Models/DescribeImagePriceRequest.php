<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagePriceRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $skuCode;
    protected $_name = [
        'amount'    => 'Amount',
        'imageId'   => 'ImageId',
        'orderType' => 'OrderType',
        'period'    => 'Period',
        'priceUnit' => 'PriceUnit',
        'skuCode'   => 'SkuCode',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }

        return $model;
    }
}
