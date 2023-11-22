<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\audio;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\container;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\muxConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\transConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\video;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @var audio
     */
    public $audio;

    /**
     * @var container
     */
    public $container;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'audio'       => 'Audio',
        'container'   => 'Container',
        'muxConfig'   => 'MuxConfig',
        'transConfig' => 'TransConfig',
        'video'       => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overwriteParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
