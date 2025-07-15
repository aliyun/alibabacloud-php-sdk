<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainFrameRateAndBitRateDataResponseBody extends Model
{
    /**
     * @description The frame rates and bitrates of the live streams that were queried.
     *
     * @var frameRateAndBitRateInfos
     */
    public $frameRateAndBitRateInfos;

    /**
     * @description The request ID.
     *
     * @example C3F2C2C4-59BB-4B62-81FF-345BE557E3E3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'frameRateAndBitRateInfos' => 'FrameRateAndBitRateInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameRateAndBitRateInfos) {
            $res['FrameRateAndBitRateInfos'] = null !== $this->frameRateAndBitRateInfos ? $this->frameRateAndBitRateInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainFrameRateAndBitRateDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameRateAndBitRateInfos'])) {
            $model->frameRateAndBitRateInfos = frameRateAndBitRateInfos::fromMap($map['FrameRateAndBitRateInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
