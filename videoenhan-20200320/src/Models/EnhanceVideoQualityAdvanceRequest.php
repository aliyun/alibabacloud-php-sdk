<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EnhanceVideoQualityAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

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
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'bitrate'        => 'Bitrate',
        'frameRate'      => 'FrameRate',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
        'outPutHeight'   => 'OutPutHeight',
        'outPutWidth'    => 'OutPutWidth',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
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
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
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

        return $model;
    }
}
