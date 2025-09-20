<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;

class targets extends Model
{
    /**
     * @var TargetAudio
     */
    public $audio;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var float[]
     */
    public $initialSegments;

    /**
     * @var float
     */
    public $initialTranscode;

    /**
     * @var TargetSubtitle
     */
    public $subtitle;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var int
     */
    public $transcodeAhead;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio' => 'Audio',
        'duration' => 'Duration',
        'initialSegments' => 'InitialSegments',
        'initialTranscode' => 'InitialTranscode',
        'subtitle' => 'Subtitle',
        'tags' => 'Tags',
        'transcodeAhead' => 'TranscodeAhead',
        'URI' => 'URI',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (\is_array($this->initialSegments)) {
            Model::validateArray($this->initialSegments);
        }
        if (null !== $this->subtitle) {
            $this->subtitle->validate();
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

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->initialSegments) {
            if (\is_array($this->initialSegments)) {
                $res['InitialSegments'] = [];
                $n1 = 0;
                foreach ($this->initialSegments as $item1) {
                    $res['InitialSegments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->initialTranscode) {
            $res['InitialTranscode'] = $this->initialTranscode;
        }

        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toArray($noStream) : $this->subtitle;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->transcodeAhead) {
            $res['TranscodeAhead'] = $this->transcodeAhead;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
            $model->audio = TargetAudio::fromMap($map['Audio']);
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['InitialSegments'])) {
            if (!empty($map['InitialSegments'])) {
                $model->initialSegments = [];
                $n1 = 0;
                foreach ($map['InitialSegments'] as $item1) {
                    $model->initialSegments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InitialTranscode'])) {
            $model->initialTranscode = $map['InitialTranscode'];
        }

        if (isset($map['Subtitle'])) {
            $model->subtitle = TargetSubtitle::fromMap($map['Subtitle']);
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['TranscodeAhead'])) {
            $model->transcodeAhead = $map['TranscodeAhead'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        if (isset($map['Video'])) {
            $model->video = TargetVideo::fromMap($map['Video']);
        }

        return $model;
    }
}
