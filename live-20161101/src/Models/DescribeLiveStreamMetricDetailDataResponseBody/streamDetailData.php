<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponseBody\streamDetailData\streamData;
use AlibabaCloud\Tea\Model;

class streamDetailData extends Model
{
    /**
     * @var streamData[]
     */
    public $streamData;
    protected $_name = [
        'streamData' => 'StreamData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamData) {
            $res['StreamData'] = [];
            if (null !== $this->streamData && \is_array($this->streamData)) {
                $n = 0;
                foreach ($this->streamData as $item) {
                    $res['StreamData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamDetailData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamData'])) {
            if (!empty($map['StreamData'])) {
                $model->streamData = [];
                $n                 = 0;
                foreach ($map['StreamData'] as $item) {
                    $model->streamData[$n++] = null !== $item ? streamData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
