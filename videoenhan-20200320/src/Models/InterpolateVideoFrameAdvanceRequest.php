<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class InterpolateVideoFrameAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var int
     */
    public $frameRate;
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'bitrate'        => 'Bitrate',
        'frameRate'      => 'FrameRate',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InterpolateVideoFrameAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        return $model;
    }
}
