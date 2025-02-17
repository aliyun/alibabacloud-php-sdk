<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody\spotPrices;

class DescribeSpotPriceHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $currency;
    /**
     * @var int
     */
    public $nextOffset;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->spotPrices) {
            $this->spotPrices->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SpotPrices'] = null !== $this->spotPrices ? $this->spotPrices->toArray($noStream) : $this->spotPrices;
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
