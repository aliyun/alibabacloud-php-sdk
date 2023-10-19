<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoMediaVideoStream extends Model
{
    /**
     * @example 108420
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example h264
     *
     * @var string
     */
    public $codeName;

    /**
     * @example 22.88
     *
     * @var string
     */
    public $duration;

    /**
     * @example 90
     *
     * @var string
     */
    public $frameCount;
    protected $_name = [
        'bitrate'    => 'bitrate',
        'codeName'   => 'code_name',
        'duration'   => 'duration',
        'frameCount' => 'frame_count',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return VideoMediaVideoStream
     */
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
