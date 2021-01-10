<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams\casterStream\streamInfos;
use AlibabaCloud\Tea\Model;

class casterStream extends Model
{
    /**
     * @var string
     */
    public $rtmpUrl;

    /**
     * @var int
     */
    public $outputType;

    /**
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'rtmpUrl'     => 'RtmpUrl',
        'outputType'  => 'OutputType',
        'streamInfos' => 'StreamInfos',
        'sceneId'     => 'SceneId',
        'streamUrl'   => 'StreamUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
