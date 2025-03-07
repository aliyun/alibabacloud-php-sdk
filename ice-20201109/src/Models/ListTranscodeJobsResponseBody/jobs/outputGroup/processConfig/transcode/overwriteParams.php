<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\audio;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\container;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\muxConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\video;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description The audio settings.
     *
     * @var audio
     */
    public $audio;

    /**
     * @description The encapsulation format settings.
     *
     * @var container
     */
    public $container;

    /**
     * @description The encapsulation settings.
     *
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @description The video settings.
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'audio'     => 'Audio',
        'container' => 'Container',
        'muxConfig' => 'MuxConfig',
        'tags'      => 'Tags',
        'video'     => 'Video',
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
