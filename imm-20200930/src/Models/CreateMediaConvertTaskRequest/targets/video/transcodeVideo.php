<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\video;

use AlibabaCloud\Tea\Model;

class transcodeVideo extends Model
{
    /**
     * @var bool
     */
    public $adaptiveResolutionDirection;

    /**
     * @var int
     */
    public $BFrames;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var int
     */
    public $bufferSize;

    /**
     * @var float
     */
    public $CRF;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var float
     */
    public $frameRate;

    /**
     * @var int
     */
    public $GOPSize;

    /**
     * @var int
     */
    public $maxBitrate;

    /**
     * @var string
     */
    public $pixelFormat;

    /**
     * @var int
     */
    public $refs;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var int
     */
    public $rotation;

    /**
     * @var string
     */
    public $scaleType;
    protected $_name = [
        'adaptiveResolutionDirection' => 'AdaptiveResolutionDirection',
        'BFrames'                     => 'BFrames',
        'bitrate'                     => 'Bitrate',
        'bufferSize'                  => 'BufferSize',
        'CRF'                         => 'CRF',
        'codec'                       => 'Codec',
        'frameRate'                   => 'FrameRate',
        'GOPSize'                     => 'GOPSize',
        'maxBitrate'                  => 'MaxBitrate',
        'pixelFormat'                 => 'PixelFormat',
        'refs'                        => 'Refs',
        'resolution'                  => 'Resolution',
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
        if (isset($map['Rotation'])) {
            $model->rotation = $map['Rotation'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        return $model;
    }
}
