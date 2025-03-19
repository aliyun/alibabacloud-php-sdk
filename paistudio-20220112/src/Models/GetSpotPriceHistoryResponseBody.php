<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetSpotPriceHistoryResponseBody extends Model
{
    /**
     * @example 8BDA4440-DD3C-5F4B-BBDD-94A9CE1E75C7
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SpotPriceItem[]
     */
    public $spotPriceHistory;

    /**
     * @example 194
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'spotPriceHistory' => 'SpotPriceHistory',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spotPriceHistory) {
            $res['SpotPriceHistory'] = [];
            if (null !== $this->spotPriceHistory && \is_array($this->spotPriceHistory)) {
                $n = 0;
                foreach ($this->spotPriceHistory as $item) {
                    $res['SpotPriceHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpotPriceHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpotPriceHistory'])) {
            if (!empty($map['SpotPriceHistory'])) {
                $model->spotPriceHistory = [];
                $n = 0;
                foreach ($map['SpotPriceHistory'] as $item) {
                    $model->spotPriceHistory[$n++] = null !== $item ? SpotPriceItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
