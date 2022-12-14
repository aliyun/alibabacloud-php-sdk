<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EnhanceVideoQualityAdvanceRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $bitrate;

    /**
     * @example 50
     *
     * @var int
     */
    public $frameRate;

    /**
     * @example PQ
     *
     * @var string
     */
    public $HDRFormat;

    /**
     * @example 600
     *
     * @var int
     */
    public $maxIlluminance;

    /**
     * @example 200
     *
     * @var int
     */
    public $outPutHeight;

    /**
     * @example 200
     *
     * @var int
     */
    public $outPutWidth;

    /**
     * @example https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/test_for_api/xxxx.mp4
     *
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'frameRate'      => 'FrameRate',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
        'outPutHeight'   => 'OutPutHeight',
        'outPutWidth'    => 'OutPutWidth',
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
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->HDRFormat) {
            $res['HDRFormat'] = $this->HDRFormat;
        }
        if (null !== $this->maxIlluminance) {
            $res['MaxIlluminance'] = $this->maxIlluminance;
        }
        if (null !== $this->outPutHeight) {
            $res['OutPutHeight'] = $this->outPutHeight;
        }
        if (null !== $this->outPutWidth) {
            $res['OutPutWidth'] = $this->outPutWidth;
        }
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnhanceVideoQualityAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['HDRFormat'])) {
            $model->HDRFormat = $map['HDRFormat'];
        }
        if (isset($map['MaxIlluminance'])) {
            $model->maxIlluminance = $map['MaxIlluminance'];
        }
        if (isset($map['OutPutHeight'])) {
            $model->outPutHeight = $map['OutPutHeight'];
        }
        if (isset($map['OutPutWidth'])) {
            $model->outPutWidth = $map['OutPutWidth'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
