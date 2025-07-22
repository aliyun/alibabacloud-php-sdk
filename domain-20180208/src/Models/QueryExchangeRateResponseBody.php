<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryExchangeRateResponseBody extends Model
{
    /**
     * @example 7.12
     *
     * @var float
     */
    public $exchangeRate;

    /**
     * @example D200000-C0B9-4CD3-B92A-9B44A000000
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exchangeRate' => 'ExchangeRate',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exchangeRate) {
            $res['ExchangeRate'] = $this->exchangeRate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExchangeRateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExchangeRate'])) {
            $model->exchangeRate = $map['ExchangeRate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
