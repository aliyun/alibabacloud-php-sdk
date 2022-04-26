<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class VideoStream extends Model
{
    /**
     * @description AverageFrameRate
     *
     * @var string
     */
    public $averageFrameRate;

    /**
     * @description BitDepth
     *
     * @var int
     */
    public $bitDepth;

    /**
     * @description Bitrate
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description CodecLongName
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description CodecName
     *
     * @var string
     */
    public $codecName;

    /**
     * @description CodecTag
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description CodecTagString
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description CodecTimeBase
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description ColorPrimaries
     *
     * @var string
     */
    public $colorPrimaries;

    /**
     * @description ColorRange
     *
     * @var string
     */
    public $colorRange;

    /**
     * @description ColorSpace
     *
     * @var string
     */
    public $colorSpace;

    /**
     * @description ColorTransfer
     *
     * @var string
     */
    public $colorTransfer;

    /**
     * @description DisplayAspectRatio
     *
     * @var string
     */
    public $displayAspectRatio;

    /**
     * @description Duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description FrameCount
     *
     * @var int
     */
    public $frameCount;

    /**
     * @description FrameRate
     *
     * @var string
     */
    public $frameRate;

    /**
     * @description HasBFrames
     *
     * @var int
     */
    public $hasBFrames;

    /**
     * @description Height
     *
     * @var int
     */
    public $height;

    /**
     * @description Index
     *
     * @var int
     */
    public $index;

    /**
     * @description Language
     *
     * @var string
     */
    public $language;

    /**
     * @description Level
     *
     * @var int
     */
    public $level;

    /**
     * @description PixelFormat
     *
     * @var string
     */
    public $pixelFormat;

    /**
     * @description Profile
     *
     * @var string
     */
    public $profile;

    /**
     * @description Rotate
     *
     * @var string
     */
    public $rotate;

    /**
     * @description SampleAspectRatio
     *
     * @var string
     */
    public $sampleAspectRatio;

    /**
     * @description StartTime
     *
     * @var float
     */
    public $startTime;

    /**
     * @description TimeBase
     *
     * @var string
     */
    public $timeBase;

    /**
     * @description Width
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'averageFrameRate'   => 'AverageFrameRate',
        'bitDepth'           => 'BitDepth',
        'bitrate'            => 'Bitrate',
        'codecLongName'      => 'CodecLongName',
        'codecName'          => 'CodecName',
        'codecTag'           => 'CodecTag',
        'codecTagString'     => 'CodecTagString',
        'codecTimeBase'      => 'CodecTimeBase',
        'colorPrimaries'     => 'ColorPrimaries',
        'colorRange'         => 'ColorRange',
        'colorSpace'         => 'ColorSpace',
        'colorTransfer'      => 'ColorTransfer',
        'displayAspectRatio' => 'DisplayAspectRatio',
        'duration'           => 'Duration',
        'frameCount'         => 'FrameCount',
        'frameRate'          => 'FrameRate',
        'hasBFrames'         => 'HasBFrames',
        'height'             => 'Height',
        'index'              => 'Index',
        'language'           => 'Language',
        'level'              => 'Level',
        'pixelFormat'        => 'PixelFormat',
        'profile'            => 'Profile',
        'rotate'             => 'Rotate',
        'sampleAspectRatio'  => 'SampleAspectRatio',
        'startTime'          => 'StartTime',
        'timeBase'           => 'TimeBase',
        'width'              => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageFrameRate) {
            $res['AverageFrameRate'] = $this->averageFrameRate;
        }
        if (null !== $this->bitDepth) {
            $res['BitDepth'] = $this->bitDepth;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->colorPrimaries) {
            $res['ColorPrimaries'] = $this->colorPrimaries;
        }
        if (null !== $this->colorRange) {
            $res['ColorRange'] = $this->colorRange;
        }
        if (null !== $this->colorSpace) {
            $res['ColorSpace'] = $this->colorSpace;
        }
        if (null !== $this->colorTransfer) {
            $res['ColorTransfer'] = $this->colorTransfer;
        }
        if (null !== $this->displayAspectRatio) {
            $res['DisplayAspectRatio'] = $this->displayAspectRatio;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->frameCount) {
            $res['FrameCount'] = $this->frameCount;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->hasBFrames) {
            $res['HasBFrames'] = $this->hasBFrames;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pixelFormat) {
            $res['PixelFormat'] = $this->pixelFormat;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->sampleAspectRatio) {
            $res['SampleAspectRatio'] = $this->sampleAspectRatio;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeBase) {
            $res['TimeBase'] = $this->timeBase;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageFrameRate'])) {
            $model->averageFrameRate = $map['AverageFrameRate'];
        }
        if (isset($map['BitDepth'])) {
            $model->bitDepth = $map['BitDepth'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['ColorPrimaries'])) {
            $model->colorPrimaries = $map['ColorPrimaries'];
        }
        if (isset($map['ColorRange'])) {
            $model->colorRange = $map['ColorRange'];
        }
        if (isset($map['ColorSpace'])) {
            $model->colorSpace = $map['ColorSpace'];
        }
        if (isset($map['ColorTransfer'])) {
            $model->colorTransfer = $map['ColorTransfer'];
        }
        if (isset($map['DisplayAspectRatio'])) {
            $model->displayAspectRatio = $map['DisplayAspectRatio'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FrameCount'])) {
            $model->frameCount = $map['FrameCount'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PixelFormat'])) {
            $model->pixelFormat = $map['PixelFormat'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['SampleAspectRatio'])) {
            $model->sampleAspectRatio = $map['SampleAspectRatio'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeBase'])) {
            $model->timeBase = $map['TimeBase'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
