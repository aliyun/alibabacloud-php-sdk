<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result;

use AlibabaCloud\Tea\Model;

class playUrlInfoList extends Model
{
    /**
     * @description 直播拉取分辨率 -1:lld 1:lsd 2:lhd 3:lud
     *
     * @var int
     */
    public $codeLevel;

    /**
     * @description flv拉流地址
     *
     * @var string
     */
    public $flvUrl;

    /**
     * @description hls拉流地址
     *
     * @var string
     */
    public $hlsUrl;

    /**
     * @description rtmp拉流地址
     *
     * @var string
     */
    public $rtmpUrl;
    protected $_name = [
        'codeLevel' => 'CodeLevel',
        'flvUrl'    => 'FlvUrl',
        'hlsUrl'    => 'HlsUrl',
        'rtmpUrl'   => 'RtmpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeLevel) {
            $res['CodeLevel'] = $this->codeLevel;
        }
        if (null !== $this->flvUrl) {
            $res['FlvUrl'] = $this->flvUrl;
        }
        if (null !== $this->hlsUrl) {
            $res['HlsUrl'] = $this->hlsUrl;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playUrlInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeLevel'])) {
            $model->codeLevel = $map['CodeLevel'];
        }
        if (isset($map['FlvUrl'])) {
            $model->flvUrl = $map['FlvUrl'];
        }
        if (isset($map['HlsUrl'])) {
            $model->hlsUrl = $map['HlsUrl'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }

        return $model;
    }
}
