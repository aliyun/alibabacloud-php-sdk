<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @var TargetAudio
     */
    public $audio;

    /**
     * @example 5
     *
     * @var float
     */
    public $duration;

    /**
     * @var float[]
     */
    public $initialSegments;

    /**
     * @example 30.0
     *
     * @var float
     */
    public $initialTranscode;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $speed;

    /**
     * @var TargetSubtitle
     */
    public $subtitle;

    /**
     * @example 3
     *
     * @var int
     */
    public $transcodeAhead;

    /**
     * @example oss://imm-test/testcases/video
     *
     * @var string
     */
    public $URI;

    /**
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio'            => 'Audio',
        'duration'         => 'Duration',
        'initialSegments'  => 'InitialSegments',
        'initialTranscode' => 'InitialTranscode',
        'speed'            => 'Speed',
        'subtitle'         => 'Subtitle',
        'transcodeAhead'   => 'TranscodeAhead',
        'URI'              => 'URI',
        'video'            => 'Video',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->initialSegments) {
            $res['InitialSegments'] = $this->initialSegments;
        }
        if (null !== $this->initialTranscode) {
            $res['InitialTranscode'] = $this->initialTranscode;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toMap() : null;
        }
        if (null !== $this->transcodeAhead) {
            $res['TranscodeAhead'] = $this->transcodeAhead;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
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
                $model->initialSegments = $map['InitialSegments'];
            }
        }
        if (isset($map['InitialTranscode'])) {
            $model->initialTranscode = $map['InitialTranscode'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = TargetSubtitle::fromMap($map['Subtitle']);
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
