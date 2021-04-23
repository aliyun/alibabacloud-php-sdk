<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @var string
     */
    public $quality;

    /**
     * @var string
     */
    public $pullFlvUrl;

    /**
     * @var string
     */
    public $pullM3U8Url;

    /**
     * @var string
     */
    public $pullRtmpUrl;
    protected $_name = [
        'quality'     => 'Quality',
        'pullFlvUrl'  => 'PullFlvUrl',
        'pullM3U8Url' => 'PullM3U8Url',
        'pullRtmpUrl' => 'PullRtmpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->pullFlvUrl) {
            $res['PullFlvUrl'] = $this->pullFlvUrl;
        }
        if (null !== $this->pullM3U8Url) {
            $res['PullM3U8Url'] = $this->pullM3U8Url;
        }
        if (null !== $this->pullRtmpUrl) {
            $res['PullRtmpUrl'] = $this->pullRtmpUrl;
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
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['PullFlvUrl'])) {
            $model->pullFlvUrl = $map['PullFlvUrl'];
        }
        if (isset($map['PullM3U8Url'])) {
            $model->pullM3U8Url = $map['PullM3U8Url'];
        }
        if (isset($map['PullRtmpUrl'])) {
            $model->pullRtmpUrl = $map['PullRtmpUrl'];
        }

        return $model;
    }
}
