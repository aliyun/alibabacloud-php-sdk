<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody\spotPrices;
use AlibabaCloud\Tea\Model;

class DescribeSpotPriceHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $nextOffset;

    /**
     * @var spotPrices[]
     */
    public $spotPrices;
    protected $_name = [
        'requestId'  => 'RequestId',
        'currency'   => 'Currency',
        'nextOffset' => 'NextOffset',
        'spotPrices' => 'SpotPrices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->nextOffset) {
            $res['NextOffset'] = $this->nextOffset;
        }
        if (null !== $this->spotPrices) {
            $res['SpotPrices'] = [];
            if (null !== $this->spotPrices && \is_array($this->spotPrices)) {
                $n = 0;
                foreach ($this->spotPrices as $item) {
                    $res['SpotPrices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['NextOffset'])) {
            $model->nextOffset = $map['NextOffset'];
        }
        if (isset($map['SpotPrices'])) {
            if (!empty($map['SpotPrices'])) {
                $model->spotPrices = [];
                $n                 = 0;
                foreach ($map['SpotPrices'] as $item) {
                    $model->spotPrices[$n++] = null !== $item ? spotPrices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
