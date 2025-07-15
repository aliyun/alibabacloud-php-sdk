<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody extends Model
{
    /**
     * @description The audio and video frame rates and bitrates at each time granularity.
     *
     * @var frameRateAndBitRateInfos[]
     */
    public $frameRateAndBitRateInfos;

    /**
     * @description The request ID.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
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
            $res['FrameRateAndBitRateInfos'] = [];
            if (null !== $this->frameRateAndBitRateInfos && \is_array($this->frameRateAndBitRateInfos)) {
                $n = 0;
                foreach ($this->frameRateAndBitRateInfos as $item) {
                    $res['FrameRateAndBitRateInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameRateAndBitRateInfos'])) {
            if (!empty($map['FrameRateAndBitRateInfos'])) {
                $model->frameRateAndBitRateInfos = [];
                $n = 0;
                foreach ($map['FrameRateAndBitRateInfos'] as $item) {
                    $model->frameRateAndBitRateInfos[$n++] = null !== $item ? frameRateAndBitRateInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
