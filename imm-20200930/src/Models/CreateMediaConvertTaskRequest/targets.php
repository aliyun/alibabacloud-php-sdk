<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\audio;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\image;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\segment;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\subtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\video;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $container;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $presetId;

    /**
     * @var segment
     */
    public $segment;

    /**
     * @var float
     */
    public $speed;

    /**
     * @var subtitle
     */
    public $subtitle;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'audio'     => 'Audio',
        'container' => 'Container',
        'image'     => 'Image',
        'presetId'  => 'PresetId',
        'segment'   => 'Segment',
        'speed'     => 'Speed',
        'subtitle'  => 'Subtitle',
        'URI'       => 'URI',
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
            $res['Container'] = $this->container;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }
        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = subtitle::fromMap($map['Subtitle']);
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
