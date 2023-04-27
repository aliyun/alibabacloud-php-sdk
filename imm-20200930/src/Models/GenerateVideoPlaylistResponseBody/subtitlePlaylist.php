<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class subtitlePlaylist extends Model
{
    /**
     * @description 字幕流编号，从0开始。
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description 视频源中字幕流的语言。
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description 转码生成的Token。用于LiveTranscoding访问的参数。
     *
     * @example affe0c6042f09722fec95a21b8b******
     *
     * @var string
     */
    public $token;

    /**
     * @description 输出m3u8的OSS地址。地址规则为 Target.URI + “_” + Index + ".m3u8“， 其中Target.URI为输入参数中视频转码输出地址前缀。
     *
     * @example oss://imm-test/testcases/vide_0.m3u8
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'index'    => 'Index',
        'language' => 'Language',
        'token'    => 'Token',
        'URI'      => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
     * @return subtitlePlaylist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
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
