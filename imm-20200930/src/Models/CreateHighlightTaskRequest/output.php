<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\output\segment;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;

class output extends Model
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
     * @var float
     */
    public $maxDuration;

    /**
     * @var segment
     */
    public $segment;

    /**
     * @var float
     */
    public $speed;

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
        'maxDuration' => 'MaxDuration',
        'segment' => 'Segment',
        'speed' => 'Speed',
        'URI' => 'URI',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->segment) {
            $this->segment->validate();
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

        if (null !== $this->maxDuration) {
            $res['MaxDuration'] = $this->maxDuration;
        }

        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toArray($noStream) : $this->segment;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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

        if (isset($map['MaxDuration'])) {
            $model->maxDuration = $map['MaxDuration'];
        }

        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
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
