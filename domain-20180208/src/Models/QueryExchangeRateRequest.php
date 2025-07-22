<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryExchangeRateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example USD
     *
     * @var string
     */
    public $fromCurrency;

    /**
     * @description This parameter is required.
     *
     * @example CNY
     *
     * @var string
     */
    public $toCurrency;
    protected $_name = [
        'fromCurrency' => 'FromCurrency',
        'toCurrency' => 'ToCurrency',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromCurrency) {
            $res['FromCurrency'] = $this->fromCurrency;
        }
        if (null !== $this->toCurrency) {
            $res['ToCurrency'] = $this->toCurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExchangeRateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromCurrency'])) {
            $model->fromCurrency = $map['FromCurrency'];
        }
        if (isset($map['ToCurrency'])) {
            $model->toCurrency = $map['ToCurrency'];
        }

        return $model;
    }
}
