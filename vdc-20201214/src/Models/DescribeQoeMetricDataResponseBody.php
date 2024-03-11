<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataResponseBody\audioData;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataResponseBody\videoData;
use AlibabaCloud\Tea\Model;

class DescribeQoeMetricDataResponseBody extends Model
{
    /**
     * @var audioData[]
     */
    public $audioData;

    /**
     * @example 963F15CA-9D61-4341-B9D0-123E97229829
     *
     * @var string
     */
    public $requestId;

    /**
     * @var videoData[]
     */
    public $videoData;
    protected $_name = [
        'audioData' => 'AudioData',
        'requestId' => 'RequestId',
        'videoData' => 'VideoData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioData) {
            $res['AudioData'] = [];
            if (null !== $this->audioData && \is_array($this->audioData)) {
                $n = 0;
                foreach ($this->audioData as $item) {
                    $res['AudioData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoData) {
            $res['VideoData'] = [];
            if (null !== $this->videoData && \is_array($this->videoData)) {
                $n = 0;
                foreach ($this->videoData as $item) {
                    $res['VideoData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQoeMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioData'])) {
            if (!empty($map['AudioData'])) {
                $model->audioData = [];
                $n                = 0;
                foreach ($map['AudioData'] as $item) {
                    $model->audioData[$n++] = null !== $item ? audioData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoData'])) {
            if (!empty($map['VideoData'])) {
                $model->videoData = [];
                $n                = 0;
                foreach ($map['VideoData'] as $item) {
                    $model->videoData[$n++] = null !== $item ? videoData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
