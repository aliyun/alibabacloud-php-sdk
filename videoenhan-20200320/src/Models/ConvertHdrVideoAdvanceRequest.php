<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ConvertHdrVideoAdvanceRequest extends Model
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
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
        'videoURLObject' => 'VideoURL',
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
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHdrVideoAdvanceRequest
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
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
