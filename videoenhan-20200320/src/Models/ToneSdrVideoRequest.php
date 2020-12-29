<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ToneSdrVideoRequest extends Model
{
    /**
     * @var string
     */
    public $videoURL;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $recolorModel;
    protected $_name = [
        'videoURL'     => 'VideoURL',
        'async'        => 'Async',
        'bitrate'      => 'Bitrate',
        'recolorModel' => 'RecolorModel',
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
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->recolorModel) {
            $res['RecolorModel'] = $this->recolorModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ToneSdrVideoRequest
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['RecolorModel'])) {
            $model->recolorModel = $map['RecolorModel'];
        }

        return $model;
    }
}
