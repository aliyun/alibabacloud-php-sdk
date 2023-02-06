<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody\spotPrices;
use AlibabaCloud\Tea\Model;

class DescribeSpotPriceHistoryResponseBody extends Model
{
    /**
     * @description The currency unit of the price.
     *
     * Alibaba Cloud International site (alibabacloud.com): USD.
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The start row of the next page. It is the value of the `Offset` parameter.
     *
     * @example 1000
     *
     * @var int
     */
    public $nextOffset;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the spot prices.
     *
     * @var spotPrices
     */
    public $spotPrices;
    protected $_name = [
        'currency'   => 'Currency',
        'nextOffset' => 'NextOffset',
        'requestId'  => 'RequestId',
        'spotPrices' => 'SpotPrices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->nextOffset) {
            $res['NextOffset'] = $this->nextOffset;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spotPrices) {
            $res['SpotPrices'] = null !== $this->spotPrices ? $this->spotPrices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotPriceHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['NextOffset'])) {
            $model->nextOffset = $map['NextOffset'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpotPrices'])) {
            $model->spotPrices = spotPrices::fromMap($map['SpotPrices']);
        }

        return $model;
    }
}
