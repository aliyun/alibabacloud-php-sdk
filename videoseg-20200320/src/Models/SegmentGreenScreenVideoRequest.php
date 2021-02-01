<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SegmentGreenScreenVideoRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $videoURL;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'videoURL' => 'VideoURL',
        'async'    => 'Async',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentGreenScreenVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
