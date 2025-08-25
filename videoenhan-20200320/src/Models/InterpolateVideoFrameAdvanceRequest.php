<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class InterpolateVideoFrameAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'frameRate' => 'FrameRate',
        'videoURLObject' => 'VideoURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }

        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
