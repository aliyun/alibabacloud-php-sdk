<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\audio;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\container;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\muxConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\transcode\overwriteParams\video;

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
     * @var string[]
     */
    public $tags;
    /**
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
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        if (null !== $this->muxConfig) {
            $this->muxConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
