<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ConvertHdrVideoRequest extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $bitrate;

    /**
     * @example HLG
     *
     * @var string
     */
    public $HDRFormat;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxIlluminance;

    /**
     * @description This parameter is required.
     *
     * @example https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/test_for_api/xxxx.mp4
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
        'videoURL'       => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->HDRFormat) {
            $res['HDRFormat'] = $this->HDRFormat;
        }
        if (null !== $this->maxIlluminance) {
            $res['MaxIlluminance'] = $this->maxIlluminance;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHdrVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['HDRFormat'])) {
            $model->HDRFormat = $map['HDRFormat'];
        }
        if (isset($map['MaxIlluminance'])) {
            $model->maxIlluminance = $map['MaxIlluminance'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
