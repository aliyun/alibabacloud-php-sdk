<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode\overwriteParams\audio;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode\overwriteParams\container;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode\overwriteParams\muxConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode\overwriteParams\transConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode\overwriteParams\video;

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
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        if (null !== $this->muxConfig) {
            $this->muxConfig->validate();
        }
        if (null !== $this->transConfig) {
            $this->transConfig->validate();
        }
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toArray($noStream) : $this->audio;
        }

        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toArray($noStream) : $this->muxConfig;
        }

        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toArray($noStream) : $this->transConfig;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
