<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;

class EstimateStereoVideoDepthRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $videoURL;

    /**
     * @var string
     */
    public $sampleRate;
    protected $_name = [
        'videoURL'   => 'VideoURL',
        'sampleRate' => 'SampleRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateStereoVideoDepthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
