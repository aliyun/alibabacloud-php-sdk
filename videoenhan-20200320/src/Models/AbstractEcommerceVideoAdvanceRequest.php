<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class AbstractEcommerceVideoAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'height' => 'Height',
        'videoUrlObject' => 'VideoUrl',
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

        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
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
            $model->videoUrlObject = $map['VideoUrl'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
