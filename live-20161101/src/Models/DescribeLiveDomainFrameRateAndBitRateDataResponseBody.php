<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;

class DescribeLiveDomainFrameRateAndBitRateDataResponseBody extends Model
{
    /**
     * @var frameRateAndBitRateInfos
     */
    public $frameRateAndBitRateInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'frameRateAndBitRateInfos' => 'FrameRateAndBitRateInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->frameRateAndBitRateInfos) {
            $this->frameRateAndBitRateInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRateAndBitRateInfos) {
            $res['FrameRateAndBitRateInfos'] = null !== $this->frameRateAndBitRateInfos ? $this->frameRateAndBitRateInfos->toArray($noStream) : $this->frameRateAndBitRateInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FrameRateAndBitRateInfos'])) {
            $model->frameRateAndBitRateInfos = frameRateAndBitRateInfos::fromMap($map['FrameRateAndBitRateInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
