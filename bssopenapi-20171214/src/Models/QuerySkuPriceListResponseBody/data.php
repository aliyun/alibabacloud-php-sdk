<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage;

class data extends Model
{
    /**
     * @var skuPricePage
     */
    public $skuPricePage;
    protected $_name = [
        'skuPricePage' => 'SkuPricePage',
    ];

    public function validate()
    {
        if (null !== $this->skuPricePage) {
            $this->skuPricePage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skuPricePage) {
            $res['SkuPricePage'] = null !== $this->skuPricePage ? $this->skuPricePage->toArray($noStream) : $this->skuPricePage;
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
        if (isset($map['SkuPricePage'])) {
            $model->skuPricePage = skuPricePage::fromMap($map['SkuPricePage']);
        }

        return $model;
    }
}
