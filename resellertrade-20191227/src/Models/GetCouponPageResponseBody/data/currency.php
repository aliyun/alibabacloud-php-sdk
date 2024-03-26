<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCouponPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class currency extends Model
{
    /**
     * @var string
     */
    public $currencyCode;
    protected $_name = [
        'currencyCode' => 'CurrencyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currency
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }

        return $model;
    }
}
