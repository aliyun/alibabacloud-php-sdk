<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class UpdateLiveMPUTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $mixMode;

    /**
     * @var string
     */
    public $multiStreamURLShrink;

    /**
     * @var string
     */
    public $seiParamsShrink;

    /**
     * @var string
     */
    public $singleSubParamsShrink;

    /**
     * @var string
     */
    public $streamURL;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $transcodeParamsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'mixMode' => 'MixMode',
        'multiStreamURLShrink' => 'MultiStreamURL',
        'seiParamsShrink' => 'SeiParams',
        'singleSubParamsShrink' => 'SingleSubParams',
        'streamURL' => 'StreamURL',
        'taskId' => 'TaskId',
        'transcodeParamsShrink' => 'TranscodeParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->mixMode) {
            $res['MixMode'] = $this->mixMode;
        }

        if (null !== $this->multiStreamURLShrink) {
            $res['MultiStreamURL'] = $this->multiStreamURLShrink;
        }

        if (null !== $this->seiParamsShrink) {
            $res['SeiParams'] = $this->seiParamsShrink;
        }

        if (null !== $this->singleSubParamsShrink) {
            $res['SingleSubParams'] = $this->singleSubParamsShrink;
        }

        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->transcodeParamsShrink) {
            $res['TranscodeParams'] = $this->transcodeParamsShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['MixMode'])) {
            $model->mixMode = $map['MixMode'];
        }

        if (isset($map['MultiStreamURL'])) {
            $model->multiStreamURLShrink = $map['MultiStreamURL'];
        }

        if (isset($map['SeiParams'])) {
            $model->seiParamsShrink = $map['SeiParams'];
        }

        if (isset($map['SingleSubParams'])) {
            $model->singleSubParamsShrink = $map['SingleSubParams'];
        }

        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TranscodeParams'])) {
            $model->transcodeParamsShrink = $map['TranscodeParams'];
        }

        return $model;
    }
}
