<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class InterpolateVideoFrameRequest extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'bitrate'   => 'Bitrate',
        'frameRate' => 'FrameRate',
        'videoURL'  => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InterpolateVideoFrameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
