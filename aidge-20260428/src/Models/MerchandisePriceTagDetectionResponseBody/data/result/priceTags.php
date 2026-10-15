<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data\result\priceTags\location;

class priceTags extends Model
{
    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $skuCode;

    /**
     * @var string
     */
    public $skuName;
    protected $_name = [
        'location' => 'Location',
        'originalPrice' => 'OriginalPrice',
        'price' => 'Price',
        'skuCode' => 'SkuCode',
        'skuName' => 'SkuName',
    ];

    public function validate()
    {
        if (null !== $this->location) {
            $this->location->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }

        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
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
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }

        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }

        return $model;
    }
}
