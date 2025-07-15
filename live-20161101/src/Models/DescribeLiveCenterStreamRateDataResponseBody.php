<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterStreamRateDataResponseBody\rateDatas;
use AlibabaCloud\Tea\Model;

class DescribeLiveCenterStreamRateDataResponseBody extends Model
{
    /**
     * @description The list of frame rates and bitrates.
     *
     * @var rateDatas[]
     */
    public $rateDatas;

    /**
     * @description The request ID.
     *
     * @example B6E125BE-E9B8-1103-8684-A3585CB632F1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rateDatas' => 'RateDatas',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rateDatas) {
            $res['RateDatas'] = [];
            if (null !== $this->rateDatas && \is_array($this->rateDatas)) {
                $n = 0;
                foreach ($this->rateDatas as $item) {
                    $res['RateDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCenterStreamRateDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RateDatas'])) {
            if (!empty($map['RateDatas'])) {
                $model->rateDatas = [];
                $n = 0;
                foreach ($map['RateDatas'] as $item) {
                    $model->rateDatas[$n++] = null !== $item ? rateDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
