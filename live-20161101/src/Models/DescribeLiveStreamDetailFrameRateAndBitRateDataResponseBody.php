<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;

class DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody extends Model
{
    /**
     * @var frameRateAndBitRateInfos[]
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
        if (\is_array($this->frameRateAndBitRateInfos)) {
            Model::validateArray($this->frameRateAndBitRateInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRateAndBitRateInfos) {
            if (\is_array($this->frameRateAndBitRateInfos)) {
                $res['FrameRateAndBitRateInfos'] = [];
                $n1 = 0;
                foreach ($this->frameRateAndBitRateInfos as $item1) {
                    $res['FrameRateAndBitRateInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['FrameRateAndBitRateInfos'])) {
                $model->frameRateAndBitRateInfos = [];
                $n1 = 0;
                foreach ($map['FrameRateAndBitRateInfos'] as $item1) {
                    $model->frameRateAndBitRateInfos[$n1] = frameRateAndBitRateInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
