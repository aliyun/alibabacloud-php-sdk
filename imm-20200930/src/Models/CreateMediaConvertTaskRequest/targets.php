<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\segment;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;

class targets extends Model
{
    /**
     * @var TargetAudio
     */
    public $audio;

    /**
     * @var string
     */
    public $container;

    /**
     * @var TargetImage
     */
    public $image;

    /**
     * @var segment
     */
    public $segment;

    /**
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
     * @var string
     */
    public $URI;

    /**
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio' => 'Audio',
        'container' => 'Container',
        'image' => 'Image',
        'segment' => 'Segment',
        'speed' => 'Speed',
        'stripMetadata' => 'StripMetadata',
        'subtitle' => 'Subtitle',
        'URI' => 'URI',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->segment) {
            $this->segment->validate();
        }
        if (null !== $this->subtitle) {
            $this->subtitle->validate();
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
            $res['Container'] = $this->container;
        }

        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toArray($noStream) : $this->segment;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->stripMetadata) {
            $res['StripMetadata'] = $this->stripMetadata;
        }

        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toArray($noStream) : $this->subtitle;
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

        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }

        if (isset($map['Image'])) {
            $model->image = TargetImage::fromMap($map['Image']);
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
