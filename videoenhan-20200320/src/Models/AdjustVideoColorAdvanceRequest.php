<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AdjustVideoColorAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var string
     */
    public $videoCodec;

    /**
     * @var string
     */
    public $videoFormat;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'mode'           => 'Mode',
        'videoBitrate'   => 'VideoBitrate',
        'videoCodec'     => 'VideoCodec',
        'videoFormat'    => 'VideoFormat',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrlObject) {
            $res['VideoUrlObject'] = $this->videoUrlObject;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustVideoColorAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
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

        return $model;
    }
}
