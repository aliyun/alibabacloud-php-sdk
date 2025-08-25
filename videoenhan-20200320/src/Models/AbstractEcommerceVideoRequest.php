<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;

class AbstractEcommerceVideoRequest extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'height' => 'Height',
        'videoUrl' => 'VideoUrl',
        'width' => 'Width',
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

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
