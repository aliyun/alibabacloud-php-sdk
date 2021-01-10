<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataResponseBody\frameRateAndBitRateInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamBitRateDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var frameRateAndBitRateInfos
     */
    public $frameRateAndBitRateInfos;
    protected $_name = [
        'requestId'                => 'RequestId',
        'frameRateAndBitRateInfos' => 'FrameRateAndBitRateInfos',
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
        if (null !== $this->frameRateAndBitRateInfos) {
            $res['FrameRateAndBitRateInfos'] = null !== $this->frameRateAndBitRateInfos ? $this->frameRateAndBitRateInfos->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FrameRateAndBitRateInfos'])) {
            $model->frameRateAndBitRateInfos = frameRateAndBitRateInfos::fromMap($map['FrameRateAndBitRateInfos']);
        }

        return $model;
    }
}
