<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EstimateMonocularVideoDepthAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'sampleRate'     => 'SampleRate',
        'videoURLObject' => 'VideoURL',
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
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateMonocularVideoDepthAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
