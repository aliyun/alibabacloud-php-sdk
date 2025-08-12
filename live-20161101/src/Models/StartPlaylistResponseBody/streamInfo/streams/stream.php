<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;

use AlibabaCloud\Dara\Model;

class stream extends Model
{
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

    /**
     * @var string
     */
    public $quality;
    protected $_name = [
        'pullFlvUrl' => 'PullFlvUrl',
        'pullM3U8Url' => 'PullM3U8Url',
        'pullRtmpUrl' => 'PullRtmpUrl',
        'quality' => 'Quality',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
