<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ToneSdrVideoAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'recolorModel'   => 'RecolorModel',
        'videoURLObject' => 'VideoURL',
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
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ToneSdrVideoAdvanceRequest
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
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
