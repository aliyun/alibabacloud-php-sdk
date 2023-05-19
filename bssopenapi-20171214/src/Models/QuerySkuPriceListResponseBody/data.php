<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The SKUs of the pricing object.
     *
     * @var skuPricePage
     */
    public $skuPricePage;
    protected $_name = [
        'skuPricePage' => 'SkuPricePage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skuPricePage) {
            $res['SkuPricePage'] = null !== $this->skuPricePage ? $this->skuPricePage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkuPricePage'])) {
            $model->skuPricePage = skuPricePage::fromMap($map['SkuPricePage']);
        }

        return $model;
    }
}
