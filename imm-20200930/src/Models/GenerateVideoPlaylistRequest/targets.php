<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\audio;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\subtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video;
use AlibabaCloud\SDK\Imm\V20200930\Models\PresetReference;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @var audio
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
     * @var PresetReference
     */
    public $presetId;

    /**
     * @var float
     */
    public $speed;

    /**
     * @var subtitle
     */
    public $subtitle;

    /**
     * @var int
     */
    public $transcodeAhead;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'audio'            => 'Audio',
        'duration'         => 'Duration',
        'initialSegments'  => 'InitialSegments',
        'initialTranscode' => 'InitialTranscode',
        'presetId'         => 'PresetId',
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
        if (null !== $this->presetId) {
            $res['PresetId'] = null !== $this->presetId ? $this->presetId->toMap() : null;
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
            $model->audio = audio::fromMap($map['Audio']);
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
        if (isset($map['PresetId'])) {
            $model->presetId = PresetReference::fromMap($map['PresetId']);
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = subtitle::fromMap($map['Subtitle']);
        }
        if (isset($map['TranscodeAhead'])) {
            $model->transcodeAhead = $map['TranscodeAhead'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
