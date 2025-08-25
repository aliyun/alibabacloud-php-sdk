<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;

class AdjustVideoColorRequest extends Model
{
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

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'mode' => 'Mode',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec' => 'VideoCodec',
        'videoFormat' => 'VideoFormat',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
