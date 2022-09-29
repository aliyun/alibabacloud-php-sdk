<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EnhanceVideoQualityAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var string
     */
    public $HDRFormat;

    /**
     * @var int
     */
    public $maxIlluminance;

    /**
     * @var int
     */
    public $outPutHeight;

    /**
     * @var int
     */
    public $outPutWidth;

    /**
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
