<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\audioPlaylist;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\subtitlePlaylist;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\videoPlaylist;
use AlibabaCloud\Tea\Model;

class GenerateVideoPlaylistResponseBody extends Model
{
    /**
     * @var audioPlaylist[]
     */
    public $audioPlaylist;

    /**
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFF*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var subtitlePlaylist[]
     */
    public $subtitlePlaylist;

    /**
     * @example 92376fbb-171f-4259-913f-705f7ee0****
     *
     * @var string
     */
    public $token;

    /**
     * @example oss://bucket_name.oss-cn-bejing.aliyuncs.com/output/media.m3u8
     *
     * @var string
     */
    public $URI;

    /**
     * @var videoPlaylist[]
     */
    public $videoPlaylist;
    protected $_name = [
        'audioPlaylist'    => 'AudioPlaylist',
        'requestId'        => 'RequestId',
        'subtitlePlaylist' => 'SubtitlePlaylist',
        'token'            => 'Token',
        'URI'              => 'URI',
        'videoPlaylist'    => 'VideoPlaylist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioPlaylist) {
            $res['AudioPlaylist'] = [];
            if (null !== $this->audioPlaylist && \is_array($this->audioPlaylist)) {
                $n = 0;
                foreach ($this->audioPlaylist as $item) {
                    $res['AudioPlaylist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subtitlePlaylist) {
            $res['SubtitlePlaylist'] = [];
            if (null !== $this->subtitlePlaylist && \is_array($this->subtitlePlaylist)) {
                $n = 0;
                foreach ($this->subtitlePlaylist as $item) {
                    $res['SubtitlePlaylist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->videoPlaylist) {
            $res['VideoPlaylist'] = [];
            if (null !== $this->videoPlaylist && \is_array($this->videoPlaylist)) {
                $n = 0;
                foreach ($this->videoPlaylist as $item) {
                    $res['VideoPlaylist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoPlaylistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioPlaylist'])) {
            if (!empty($map['AudioPlaylist'])) {
                $model->audioPlaylist = [];
                $n                    = 0;
                foreach ($map['AudioPlaylist'] as $item) {
                    $model->audioPlaylist[$n++] = null !== $item ? audioPlaylist::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubtitlePlaylist'])) {
            if (!empty($map['SubtitlePlaylist'])) {
                $model->subtitlePlaylist = [];
                $n                       = 0;
                foreach ($map['SubtitlePlaylist'] as $item) {
                    $model->subtitlePlaylist[$n++] = null !== $item ? subtitlePlaylist::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['VideoPlaylist'])) {
            if (!empty($map['VideoPlaylist'])) {
                $model->videoPlaylist = [];
                $n                    = 0;
                foreach ($map['VideoPlaylist'] as $item) {
                    $model->videoPlaylist[$n++] = null !== $item ? videoPlaylist::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
