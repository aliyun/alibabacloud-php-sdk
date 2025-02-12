<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQoeMetricDataResponseBody\audioData;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQoeMetricDataResponseBody\videoData;

class DescribeQoeMetricDataResponseBody extends Model
{
    /**
     * @var audioData[]
     */
    public $audioData;
    /**
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
        if (\is_array($this->audioData)) {
            Model::validateArray($this->audioData);
        }
        if (\is_array($this->videoData)) {
            Model::validateArray($this->videoData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioData) {
            if (\is_array($this->audioData)) {
                $res['AudioData'] = [];
                $n1               = 0;
                foreach ($this->audioData as $item1) {
                    $res['AudioData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->videoData) {
            if (\is_array($this->videoData)) {
                $res['VideoData'] = [];
                $n1               = 0;
                foreach ($this->videoData as $item1) {
                    $res['VideoData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AudioData'])) {
            if (!empty($map['AudioData'])) {
                $model->audioData = [];
                $n1               = 0;
                foreach ($map['AudioData'] as $item1) {
                    $model->audioData[$n1++] = audioData::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VideoData'])) {
            if (!empty($map['VideoData'])) {
                $model->videoData = [];
                $n1               = 0;
                foreach ($map['VideoData'] as $item1) {
                    $model->videoData[$n1++] = videoData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
