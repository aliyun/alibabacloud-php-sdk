<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;

class EstimateMonocularVideoDepthRequest extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxx/Estimate.mp4
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'sampleRate' => 'SampleRate',
        'videoURL'   => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateMonocularVideoDepthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
