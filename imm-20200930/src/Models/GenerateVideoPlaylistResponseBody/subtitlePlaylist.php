<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class subtitlePlaylist extends Model
{
    /**
     * @description The serial number of the subtitle stream. The value starts from 0.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The language of the subtitle stream.
     *
     * >  The language is derived from the subtitle stream information in the OSS path specified by the SourceURI parameter for a source video. If no language information exists in the source video, null is returned.
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The token of the subtitle media playlist. You can use this parameter to generate the path of a subtitle file.
     *
     * >  You can generate the path of a transcoded subtitle file based on the returned token value. The path must be in the oss://${Bucket}/${Object}-${Token}_${Index}.ts format. oss://${Bucket}/${Object} specifies the URI specified by input parameters for output files. ${Token} specifies the returned token value, and ${Index} specifies the serial number of a subtitle file.
     * @example affe0c6042f09722fec95a21b8b******
     *
     * @var string
     */
    public $token;

    /**
     * @description The OSS path of the subtitle media playlist.
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
