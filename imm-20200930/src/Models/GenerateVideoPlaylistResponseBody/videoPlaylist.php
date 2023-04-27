<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class videoPlaylist extends Model
{
    /**
     * @description 转码生成的Token。用于LiveTranscoding访问的参数。
     *
     * @example affe0c6042f09722fec95a21b8b******
     *
     * @var string
     */
    public $token;

    /**
     * @description 输出m3u8的OSS地址。地址规则为 Target.URI + ".m3u8“， 其中Target.URI为输入参数中视频转码输出地址前缀。
     *
     * @example oss://imm-test/testcases/video.m3u8
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'token' => 'Token',
        'URI'   => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return videoPlaylist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
