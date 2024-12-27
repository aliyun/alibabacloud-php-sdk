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
     * @description The audio media playlist files.
     *
     * @var audioPlaylist[]
     */
    public $audioPlaylist;

    /**
     * @description The total duration of the generated video.
     *
     * @example 1082
     *
     * @var float
     */
    public $duration;

    /**
     * @description The OSS path of the master playlist.
     *
     * @example oss://test-bucket/test-object/master.m3u8
     *
     * @var string
     */
    public $masterURI;

    /**
     * @description The request ID.
     *
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFF*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The subtitle media playlist files.
     *
     * @var subtitlePlaylist[]
     */
    public $subtitlePlaylist;

    /**
     * @description The token of the master playlist.
     *
     * @example 92376fbb-171f-4259-913f-705f7ee0****
     *
     * @var string
     */
    public $token;

    /**
     * @description The video media playlist files.
     *
     * @var videoPlaylist[]
     */
    public $videoPlaylist;
    protected $_name = [
        'audioPlaylist'    => 'AudioPlaylist',
        'duration'         => 'Duration',
        'masterURI'        => 'MasterURI',
        'requestId'        => 'RequestId',
        'subtitlePlaylist' => 'SubtitlePlaylist',
        'token'            => 'Token',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MasterURI'])) {
            $model->masterURI = $map['MasterURI'];
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
