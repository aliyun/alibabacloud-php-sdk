<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataResponseBody\frameRateAndBitRateInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamBitRateDataResponseBody extends Model
{
    /**
     * @description The frame rates and bitrates of the live stream.
     *
     * @var frameRateAndBitRateInfos
     */
    public $frameRateAndBitRateInfos;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
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
     * @return DescribeLiveStreamBitRateDataResponseBody
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
