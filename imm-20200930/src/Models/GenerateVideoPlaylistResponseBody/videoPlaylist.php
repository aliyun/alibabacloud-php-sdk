<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class videoPlaylist extends Model
{
    /**
     * @description The video frame rate.
     *
     * @example 25/1
     *
     * @var string
     */
    public $frameRate;

    /**
     * @description The video resolution.
     *
     * @example 640x480
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The token of the video media playlist. You can use this parameter to generate the path of a TS file.
     *
     * >  You can generate the path of a transcoded TS file based on the value of this parameter. The path must be in the oss://${Bucket}/${Object}-${Token}-${Index}.ts format. oss://${Bucket}/${Object} specifies the URI specified by input parameters for output files. ${Token} specifies the returned token, and ${Index} specifies the serial number of a TS file.
     * @example affe0c6042f09722fec95a21b8b******
     *
     * @var string
     */
    public $token;

    /**
     * @description The OSS path of the video media playlist.
     *
     * @example oss://imm-test/testcases/video.m3u8
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'frameRate'  => 'FrameRate',
        'resolution' => 'Resolution',
        'token'      => 'Token',
        'URI'        => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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
     * @return videoPlaylist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
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
