<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams\casterStream\streamInfos;
use AlibabaCloud\Tea\Model;

class casterStream extends Model
{
    /**
     * @description Indicates whether the output stream is in preview mode or program mode.
     *
     *   **0**: indicates that the output videos of the scene are in preview mode.
     *   **1**: indicates that the output videos of the scene are in program mode.
     *
     * @example 1
     *
     * @var int
     */
    public $outputType;

    /**
     * @description The Real Time Messaging Protocol (RTMP) URL.
     *
     * @example rtmp://live/caster/example.edu
     *
     * @var string
     */
    public $rtmpUrl;

    /**
     * @description The ID of the scene.
     *
     * @example 23ca74e0-aca3-4e7a-8561-9d96f525****
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description The information about the stream.
     *
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @description The streaming URL.
     *
     * @example http://live/caster/example.org
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'outputType' => 'OutputType',
        'rtmpUrl' => 'RtmpUrl',
        'sceneId' => 'SceneId',
        'streamInfos' => 'StreamInfos',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return casterStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
