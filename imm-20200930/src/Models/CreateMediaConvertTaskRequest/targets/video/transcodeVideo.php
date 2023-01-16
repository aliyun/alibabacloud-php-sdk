<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\video;

use AlibabaCloud\Tea\Model;

class transcodeVideo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $adaptiveResolutionDirection;

    /**
     * @example 3
     *
     * @var int
     */
    public $BFrames;

    /**
     * @example 128000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @example fixed
     *
     * @var string
     */
    public $bitrateOption;

    /**
     * @example 4000000
     *
     * @var int
     */
    public $bufferSize;

    /**
     * @example 20
     *
     * @var float
     */
    public $CRF;

    /**
     * @example h264
     *
     * @var string
     */
    public $codec;

    /**
     * @example 25
     *
     * @var float
     */
    public $frameRate;

    /**
     * @example fixed
     *
     * @var string
     */
    public $frameRateOption;

    /**
     * @example 60
     *
     * @var int
     */
    public $GOPSize;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $maxBitrate;

    /**
     * @example yuv420p
     *
     * @var string
     */
    public $pixelFormat;

    /**
     * @example 2
     *
     * @var int
     */
    public $refs;

    /**
     * @example 640x480
     *
     * @var string
     */
    public $resolution;

    /**
     * @example fixed
     *
     * @var string
     */
    public $resolutionOption;

    /**
     * @example 0
     *
     * @var int
     */
    public $rotation;

    /**
     * @example stretch
     *
     * @var string
     */
    public $scaleType;
    protected $_name = [
        'adaptiveResolutionDirection' => 'AdaptiveResolutionDirection',
        'BFrames'                     => 'BFrames',
        'bitrate'                     => 'Bitrate',
        'bitrateOption'               => 'BitrateOption',
        'bufferSize'                  => 'BufferSize',
        'CRF'                         => 'CRF',
        'codec'                       => 'Codec',
        'frameRate'                   => 'FrameRate',
        'frameRateOption'             => 'FrameRateOption',
        'GOPSize'                     => 'GOPSize',
        'maxBitrate'                  => 'MaxBitrate',
        'pixelFormat'                 => 'PixelFormat',
        'refs'                        => 'Refs',
        'resolution'                  => 'Resolution',
        'resolutionOption'            => 'ResolutionOption',
        'rotation'                    => 'Rotation',
        'scaleType'                   => 'ScaleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptiveResolutionDirection) {
            $res['AdaptiveResolutionDirection'] = $this->adaptiveResolutionDirection;
        }
        if (null !== $this->BFrames) {
            $res['BFrames'] = $this->BFrames;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->bitrateOption) {
            $res['BitrateOption'] = $this->bitrateOption;
        }
        if (null !== $this->bufferSize) {
            $res['BufferSize'] = $this->bufferSize;
        }
        if (null !== $this->CRF) {
            $res['CRF'] = $this->CRF;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->frameRateOption) {
            $res['FrameRateOption'] = $this->frameRateOption;
        }
        if (null !== $this->GOPSize) {
            $res['GOPSize'] = $this->GOPSize;
        }
        if (null !== $this->maxBitrate) {
            $res['MaxBitrate'] = $this->maxBitrate;
        }
        if (null !== $this->pixelFormat) {
            $res['PixelFormat'] = $this->pixelFormat;
        }
        if (null !== $this->refs) {
            $res['Refs'] = $this->refs;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->resolutionOption) {
            $res['ResolutionOption'] = $this->resolutionOption;
        }
        if (null !== $this->rotation) {
            $res['Rotation'] = $this->rotation;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptiveResolutionDirection'])) {
            $model->adaptiveResolutionDirection = $map['AdaptiveResolutionDirection'];
        }
        if (isset($map['BFrames'])) {
            $model->BFrames = $map['BFrames'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['BitrateOption'])) {
            $model->bitrateOption = $map['BitrateOption'];
        }
        if (isset($map['BufferSize'])) {
            $model->bufferSize = $map['BufferSize'];
        }
        if (isset($map['CRF'])) {
            $model->CRF = $map['CRF'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['FrameRateOption'])) {
            $model->frameRateOption = $map['FrameRateOption'];
        }
        if (isset($map['GOPSize'])) {
            $model->GOPSize = $map['GOPSize'];
        }
        if (isset($map['MaxBitrate'])) {
            $model->maxBitrate = $map['MaxBitrate'];
        }
        if (isset($map['PixelFormat'])) {
            $model->pixelFormat = $map['PixelFormat'];
        }
        if (isset($map['Refs'])) {
            $model->refs = $map['Refs'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ResolutionOption'])) {
            $model->resolutionOption = $map['ResolutionOption'];
        }
        if (isset($map['Rotation'])) {
            $model->rotation = $map['Rotation'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        return $model;
    }
}
