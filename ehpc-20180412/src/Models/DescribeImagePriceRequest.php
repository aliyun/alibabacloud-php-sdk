<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagePriceRequest extends Model
{
    /**
     * @description The number of images that you want to purchase. Valid values: 1 to 1000.
     *
     * Default value: 1
     * @example 2
     *
     * @var int
     */
    public $amount;

    /**
     * @description The ID of the image.
     *
     * @example m-bp198jigq7l1ga11****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the order. The order can be set only as a purchase order. Valid value: INSTANCE-BUY.
     *
     * @example INSTANCE-BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The subscription duration. Valid values:
     *
     *   If PriceUnit is set to Day, the valid values of the Period parameter are 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, and 30.
     *   If PriceUnit is set to Month, the valid values of the Period parameter are 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   If PriceUnit is set to Year, the valid values of the Period parameter are 1, 2, and 3.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Day
     *   Month
     *   Year
     *
     * Default value: Day
     * @example Day
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description The stock keeping unit (SKU) of the image. Valid value: package.
     *
     * @example package
     *
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
