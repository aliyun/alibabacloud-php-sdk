<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoMediaVideoStream extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $frameCount;
    protected $_name = [
        'bitrate' => 'bitrate',
        'codeName' => 'code_name',
        'duration' => 'duration',
        'frameCount' => 'frame_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['bitrate'] = $this->bitrate;
        }

        if (null !== $this->codeName) {
            $res['code_name'] = $this->codeName;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->frameCount) {
            $res['frame_count'] = $this->frameCount;
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
        if (isset($map['bitrate'])) {
            $model->bitrate = $map['bitrate'];
        }

        if (isset($map['code_name'])) {
            $model->codeName = $map['code_name'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['frame_count'])) {
            $model->frameCount = $map['frame_count'];
        }

        return $model;
    }
}
