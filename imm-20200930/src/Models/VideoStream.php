<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class VideoStream extends Model
{
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
     * @description CodecName
     *
     * @var string
     */
    public $codecName;

    /**
     * @description CodecLongName
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description Profile
     *
     * @var string
     */
    public $profile;

    /**
     * @description CodecTimeBase
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description CodecTagString
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description CodecTag
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description Width
     *
     * @var int
     */
    public $width;

    /**
     * @description Height
     *
     * @var int
     */
    public $height;

    /**
     * @description HasBFrames
     *
     * @var string
     */
    public $hasBFrames;

    /**
     * @description SampleAspectRatio
     *
     * @var string
     */
    public $sampleAspectRatio;

    /**
     * @description DisplayAspectRatio
     *
     * @var string
     */
    public $displayAspectRatio;

    /**
     * @description PixelFormat
     *
     * @var string
     */
    public $pixelFormat;

    /**
     * @description Level
     *
     * @var int
     */
    public $level;

    /**
     * @description FrameRate
     *
     * @var float
     */
    public $frameRate;

    /**
     * @description AverageFrameRate
     *
     * @var float
     */
    public $averageFrameRate;

    /**
     * @description TimeBase
     *
     * @var string
     */
    public $timeBase;

    /**
     * @description StartTime
     *
     * @var float
     */
    public $startTime;

    /**
     * @description Duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description Bitrate
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description FrameCount
     *
     * @var int
     */
    public $frameCount;
    protected $_name = [
        'index'              => 'Index',
        'language'           => 'Language',
        'codecName'          => 'CodecName',
        'codecLongName'      => 'CodecLongName',
        'profile'            => 'Profile',
        'codecTimeBase'      => 'CodecTimeBase',
        'codecTagString'     => 'CodecTagString',
        'codecTag'           => 'CodecTag',
        'width'              => 'Width',
        'height'             => 'Height',
        'hasBFrames'         => 'HasBFrames',
        'sampleAspectRatio'  => 'SampleAspectRatio',
        'displayAspectRatio' => 'DisplayAspectRatio',
        'pixelFormat'        => 'PixelFormat',
        'level'              => 'Level',
        'frameRate'          => 'FrameRate',
        'averageFrameRate'   => 'AverageFrameRate',
        'timeBase'           => 'TimeBase',
        'startTime'          => 'StartTime',
        'duration'           => 'Duration',
        'bitrate'            => 'Bitrate',
        'frameCount'         => 'FrameCount',
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
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->hasBFrames) {
            $res['HasBFrames'] = $this->hasBFrames;
        }
        if (null !== $this->sampleAspectRatio) {
            $res['SampleAspectRatio'] = $this->sampleAspectRatio;
        }
        if (null !== $this->displayAspectRatio) {
            $res['DisplayAspectRatio'] = $this->displayAspectRatio;
        }
        if (null !== $this->pixelFormat) {
            $res['PixelFormat'] = $this->pixelFormat;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->averageFrameRate) {
            $res['AverageFrameRate'] = $this->averageFrameRate;
        }
        if (null !== $this->timeBase) {
            $res['TimeBase'] = $this->timeBase;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->frameCount) {
            $res['FrameCount'] = $this->frameCount;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
        }
        if (isset($map['SampleAspectRatio'])) {
            $model->sampleAspectRatio = $map['SampleAspectRatio'];
        }
        if (isset($map['DisplayAspectRatio'])) {
            $model->displayAspectRatio = $map['DisplayAspectRatio'];
        }
        if (isset($map['PixelFormat'])) {
            $model->pixelFormat = $map['PixelFormat'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['AverageFrameRate'])) {
            $model->averageFrameRate = $map['AverageFrameRate'];
        }
        if (isset($map['TimeBase'])) {
            $model->timeBase = $map['TimeBase'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['FrameCount'])) {
            $model->frameCount = $map['FrameCount'];
        }

        return $model;
    }
}
