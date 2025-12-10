<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncCreateClipsTaskRequest;

use AlibabaCloud\Dara\Model;

class stickers extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $dyncFrames;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $timelineIn;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $width;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'duration' => 'Duration',
        'dyncFrames' => 'DyncFrames',
        'height' => 'Height',
        'timelineIn' => 'TimelineIn',
        'url' => 'Url',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->dyncFrames) {
            $res['DyncFrames'] = $this->dyncFrames;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->timelineIn) {
            $res['TimelineIn'] = $this->timelineIn;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['DyncFrames'])) {
            $model->dyncFrames = $map['DyncFrames'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['TimelineIn'])) {
            $model->timelineIn = $map['TimelineIn'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
