<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams;

use AlibabaCloud\Tea\Model;

class videoStreams extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $sampleAspectRatio;

    /**
     * @var string
     */
    public $averageFrameRate;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var string
     */
    public $codecTagString;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $hasBFrames;

    /**
     * @var string
     */
    public $frameRrate;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $frames;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $displayAspectRatio;

    /**
     * @var string
     */
    public $codecTag;

    /**
     * @var string
     */
    public $codecTimeBase;

    /**
     * @var string
     */
    public $timeBase;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $pixelFormat;
    protected $_name = [
        'index'              => 'Index',
        'codecLongName'      => 'CodecLongName',
        'height'             => 'Height',
        'sampleAspectRatio'  => 'SampleAspectRatio',
        'averageFrameRate'   => 'AverageFrameRate',
        'bitrate'            => 'Bitrate',
        'rotate'             => 'Rotate',
        'codecTagString'     => 'CodecTagString',
        'language'           => 'Language',
        'hasBFrames'         => 'HasBFrames',
        'frameRrate'         => 'FrameRrate',
        'profile'            => 'Profile',
        'startTime'          => 'StartTime',
        'frames'             => 'Frames',
        'codecName'          => 'CodecName',
        'width'              => 'Width',
        'duration'           => 'Duration',
        'displayAspectRatio' => 'DisplayAspectRatio',
        'codecTag'           => 'CodecTag',
        'codecTimeBase'      => 'CodecTimeBase',
        'timeBase'           => 'TimeBase',
        'level'              => 'Level',
        'pixelFormat'        => 'PixelFormat',
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
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->sampleAspectRatio) {
            $res['SampleAspectRatio'] = $this->sampleAspectRatio;
        }
        if (null !== $this->averageFrameRate) {
            $res['AverageFrameRate'] = $this->averageFrameRate;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->hasBFrames) {
            $res['HasBFrames'] = $this->hasBFrames;
        }
        if (null !== $this->frameRrate) {
            $res['FrameRrate'] = $this->frameRrate;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->frames) {
            $res['Frames'] = $this->frames;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->displayAspectRatio) {
            $res['DisplayAspectRatio'] = $this->displayAspectRatio;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->timeBase) {
            $res['TimeBase'] = $this->timeBase;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pixelFormat) {
            $res['PixelFormat'] = $this->pixelFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['SampleAspectRatio'])) {
            $model->sampleAspectRatio = $map['SampleAspectRatio'];
        }
        if (isset($map['AverageFrameRate'])) {
            $model->averageFrameRate = $map['AverageFrameRate'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
        }
        if (isset($map['FrameRrate'])) {
            $model->frameRrate = $map['FrameRrate'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Frames'])) {
            $model->frames = $map['Frames'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DisplayAspectRatio'])) {
            $model->displayAspectRatio = $map['DisplayAspectRatio'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['TimeBase'])) {
            $model->timeBase = $map['TimeBase'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PixelFormat'])) {
            $model->pixelFormat = $map['PixelFormat'];
        }

        return $model;
    }
}
