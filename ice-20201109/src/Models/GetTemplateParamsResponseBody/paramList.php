<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsResponseBody;

use AlibabaCloud\Dara\Model;

class paramList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $mediaUrl;

    /**
     * @var float
     */
    public $timelineIn;

    /**
     * @var float
     */
    public $timelineOut;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $x;

    /**
     * @var int
     */
    public $y;
    protected $_name = [
        'content' => 'Content',
        'coverUrl' => 'CoverUrl',
        'height' => 'Height',
        'key' => 'Key',
        'mediaUrl' => 'MediaUrl',
        'timelineIn' => 'TimelineIn',
        'timelineOut' => 'TimelineOut',
        'type' => 'Type',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }

        if (null !== $this->timelineIn) {
            $res['TimelineIn'] = $this->timelineIn;
        }

        if (null !== $this->timelineOut) {
            $res['TimelineOut'] = $this->timelineOut;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }

        if (isset($map['TimelineIn'])) {
            $model->timelineIn = $map['TimelineIn'];
        }

        if (isset($map['TimelineOut'])) {
            $model->timelineOut = $map['TimelineOut'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
