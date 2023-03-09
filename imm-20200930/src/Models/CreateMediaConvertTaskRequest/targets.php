<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\segment;
use AlibabaCloud\SDK\Imm\V20200930\Models\PresetReference;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage;
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
     * @example mp4
     *
     * @var string
     */
    public $container;

    /**
     * @var TargetImage
     */
    public $image;

    /**
     * @var PresetReference
     */
    public $preset;

    /**
     * @var segment
     */
    public $segment;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $speed;

    /**
     * @var bool
     */
    public $stripMetadata;

    /**
     * @var TargetSubtitle
     */
    public $subtitle;

    /**
     * @example oss://test-bucket/targets
     *
     * @var string
     */
    public $URI;

    /**
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio'         => 'Audio',
        'container'     => 'Container',
        'image'         => 'Image',
        'preset'        => 'Preset',
        'segment'       => 'Segment',
        'speed'         => 'Speed',
        'stripMetadata' => 'StripMetadata',
        'subtitle'      => 'Subtitle',
        'URI'           => 'URI',
        'video'         => 'Video',
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
            $res['Container'] = $this->container;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->preset) {
            $res['Preset'] = null !== $this->preset ? $this->preset->toMap() : null;
        }
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->stripMetadata) {
            $res['StripMetadata'] = $this->stripMetadata;
        }
        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toMap() : null;
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
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Image'])) {
            $model->image = TargetImage::fromMap($map['Image']);
        }
        if (isset($map['Preset'])) {
            $model->preset = PresetReference::fromMap($map['Preset']);
        }
        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['StripMetadata'])) {
            $model->stripMetadata = $map['StripMetadata'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = TargetSubtitle::fromMap($map['Subtitle']);
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
