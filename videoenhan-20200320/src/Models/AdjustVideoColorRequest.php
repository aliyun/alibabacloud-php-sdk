<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class AdjustVideoColorRequest extends Model
{
    /**
     * @example LogC
     *
     * @var string
     */
    public $mode;

    /**
     * @example 20
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @example h264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @example mp4
     *
     * @var string
     */
    public $videoFormat;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/AdjustVideoColor/AdjustVideoColor1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'mode'         => 'Mode',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec'   => 'VideoCodec',
        'videoFormat'  => 'VideoFormat',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustVideoColorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
