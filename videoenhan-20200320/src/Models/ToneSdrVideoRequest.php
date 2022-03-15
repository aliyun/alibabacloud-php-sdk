<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ToneSdrVideoRequest extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $recolorModel;

    /**
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'bitrate'      => 'Bitrate',
        'recolorModel' => 'RecolorModel',
        'videoURL'     => 'VideoURL',
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
        if (null !== $this->recolorModel) {
            $res['RecolorModel'] = $this->recolorModel;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['RecolorModel'])) {
            $model->recolorModel = $map['RecolorModel'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
