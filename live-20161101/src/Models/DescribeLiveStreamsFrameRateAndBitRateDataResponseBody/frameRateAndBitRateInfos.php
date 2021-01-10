<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsFrameRateAndBitRateDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos\frameRateAndBitRateInfo;
use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfos extends Model
{
    /**
     * @var frameRateAndBitRateInfo[]
     */
    public $frameRateAndBitRateInfo;
    protected $_name = [
        'frameRateAndBitRateInfo' => 'FrameRateAndBitRateInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameRateAndBitRateInfo) {
            $res['FrameRateAndBitRateInfo'] = [];
            if (null !== $this->frameRateAndBitRateInfo && \is_array($this->frameRateAndBitRateInfo)) {
                $n = 0;
                foreach ($this->frameRateAndBitRateInfo as $item) {
                    $res['FrameRateAndBitRateInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameRateAndBitRateInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameRateAndBitRateInfo'])) {
            if (!empty($map['FrameRateAndBitRateInfo'])) {
                $model->frameRateAndBitRateInfo = [];
                $n                              = 0;
                foreach ($map['FrameRateAndBitRateInfo'] as $item) {
                    $model->frameRateAndBitRateInfo[$n++] = null !== $item ? frameRateAndBitRateInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
