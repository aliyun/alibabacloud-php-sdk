<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Insights extends Model
{
    /**
     * @var ImageInsight
     */
    public $image;

    /**
     * @var VideoInsight
     */
    public $video;
    protected $_name = [
        'image' => 'Image',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
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
        if (isset($map['Image'])) {
            $model->image = ImageInsight::fromMap($map['Image']);
        }

        if (isset($map['Video'])) {
            $model->video = VideoInsight::fromMap($map['Video']);
        }

        return $model;
    }
}
