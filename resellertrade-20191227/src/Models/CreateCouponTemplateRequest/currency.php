<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\CreateCouponTemplateRequest;

use AlibabaCloud\Tea\Model;

class currency extends Model
{
    /**
     * @example USD
     *
     * @var string
     */
    public $currencyCode;

    /**
     * @var int
     */
    public $defaultFractionDigits;

    /**
     * @var int
     */
    public $numericCode;
    protected $_name = [
        'currencyCode'          => 'CurrencyCode',
        'defaultFractionDigits' => 'DefaultFractionDigits',
        'numericCode'           => 'NumericCode',
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
        if (null !== $this->defaultFractionDigits) {
            $res['DefaultFractionDigits'] = $this->defaultFractionDigits;
        }
        if (null !== $this->numericCode) {
            $res['NumericCode'] = $this->numericCode;
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
        if (isset($map['DefaultFractionDigits'])) {
            $model->defaultFractionDigits = $map['DefaultFractionDigits'];
        }
        if (isset($map['NumericCode'])) {
            $model->numericCode = $map['NumericCode'];
        }

        return $model;
    }
}
