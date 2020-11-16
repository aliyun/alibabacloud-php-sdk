<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse\casterStreams;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse\casterStreams\casterStream\streamInfos;
use AlibabaCloud\Tea\Model;

class casterStream extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $streamUrl;

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
    protected $_name = [
        'sceneId'     => 'SceneId',
        'streamUrl'   => 'StreamUrl',
        'rtmpUrl'     => 'RtmpUrl',
        'outputType'  => 'OutputType',
        'streamInfos' => 'StreamInfos',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('rtmpUrl', $this->rtmpUrl, true);
        Model::validateRequired('outputType', $this->outputType, true);
        Model::validateRequired('streamInfos', $this->streamInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
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
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }

        return $model;
    }
}
