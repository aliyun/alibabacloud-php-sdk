<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @description The streaming URL in the Flash Video (FLV) format.
     *
     * @example http://aliyundoc.com/caster/liveStream****.flv?auth_key=1612772224-0-0-3632be7cd9907169e8b09e91099c****
     *
     * @var string
     */
    public $pullFlvUrl;

    /**
     * @description The streaming URL in the Real-Time Messaging Protocol (RTMP) format.
     *
     * @example rtmp:///aliyundoc.com/caster/liveStream****?auth_key=1612772224-0-0-4404ca59c0246226d49d01f734b1****
     *
     * @var string
     */
    public $pullM3U8Url;

    /**
     * @description The streaming URL in the M3U8 format.
     *
     * @example http://aliyundoc.com/caster/liveStream****.m3u8?auth_key=1612772224-0-0-919a023a127156fe82e3562c3b3b****
     *
     * @var string
     */
    public $pullRtmpUrl;

    /**
     * @description The video quality of the live stream. Valid values: **original**: original quality
     *
     * @example original
     *
     * @var string
     */
    public $quality;
    protected $_name = [
        'pullFlvUrl' => 'PullFlvUrl',
        'pullM3U8Url' => 'PullM3U8Url',
        'pullRtmpUrl' => 'PullRtmpUrl',
        'quality' => 'Quality',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pullFlvUrl) {
            $res['PullFlvUrl'] = $this->pullFlvUrl;
        }
        if (null !== $this->pullM3U8Url) {
            $res['PullM3U8Url'] = $this->pullM3U8Url;
        }
        if (null !== $this->pullRtmpUrl) {
            $res['PullRtmpUrl'] = $this->pullRtmpUrl;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PullFlvUrl'])) {
            $model->pullFlvUrl = $map['PullFlvUrl'];
        }
        if (isset($map['PullM3U8Url'])) {
            $model->pullM3U8Url = $map['PullM3U8Url'];
        }
        if (isset($map['PullRtmpUrl'])) {
            $model->pullRtmpUrl = $map['PullRtmpUrl'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        return $model;
    }
}
