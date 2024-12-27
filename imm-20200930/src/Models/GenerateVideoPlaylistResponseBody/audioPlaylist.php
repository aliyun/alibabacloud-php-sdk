<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class audioPlaylist extends Model
{
    /**
     * @description The number of audio channels.
     *
     * @example 1
     *
     * @var int
     */
    public $channels;

    /**
     * @description The token of the audio media playlist. You can use this parameter to generate the path of a TS file.
     *
     * @example affe0c6042f09722fec95a21b8b******
     *
     * @var string
     */
    public $token;

    /**
     * @description The OSS path of the audio media playlist.
     *
     * @example oss://imm-test/testcases/video.m3u8
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'channels' => 'Channels',
        'token'    => 'Token',
        'URI'      => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioPlaylist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
