<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine;

use AlibabaCloud\Tea\Model;

class videoStreamList extends Model
{
    /**
     * @description The average frame rate.
     *
     * @example 30.0
     *
     * @var string
     */
    public $avgFPS;

    /**
     * @description The bitrate. Unit: Kbit/s.
     *
     * @example 500
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The full name of the encoding format.
     *
     * @example H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description The short name of the encoding format.
     *
     * @example h264
     *
     * @var string
     */
    public $codecName;

    /**
     * @description The tag of the encoding format.
     *
     * @example 0x31637661
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description The tag string of the encoding format.
     *
     * @example avc1
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description The codec time base.
     *
     * @example 1/60
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The display aspect ratio (DAR) of the video stream.
     *
     * @example 0:1
     *
     * @var string
     */
    public $dar;

    /**
     * @description The duration of the audio file.
     *
     * @example 3.166667
     *
     * @var string
     */
    public $duration;

    /**
     * @description The frame rate of the output file.
     *
     * @example 30.0
     *
     * @var string
     */
    public $fps;

    /**
     * @description The HDR type of the video stream.
     *
     * @example HDR
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description Indicates whether the video stream contains B-frames.
     *
     * @example 0
     *
     * @var string
     */
    public $hasBFrames;

    /**
     * @description The height of the video stream.
     *
     * @example 320
     *
     * @var string
     */
    public $height;

    /**
     * @description The sequence number of the video stream. The value indicates the position of the video stream in all video streams.
     *
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @description The language.
     *
     * @example und
     *
     * @var string
     */
    public $lang;

    /**
     * @description The codec level.
     *
     * @example 30
     *
     * @var string
     */
    public $level;

    /**
     * @description The total number of frames.
     *
     * @example 0
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description The pixel format.
     *
     * @example yuv420p
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @description The codec profile.
     *
     * @example Main
     *
     * @var string
     */
    public $profile;

    /**
     * @description The rotation angle of the video. Valid values: **\[0,360)**.
     *
     * @example 90
     *
     * @var string
     */
    public $rotate;

    /**
     * @description The sample aspect ratio (SAR) of the video stream.
     *
     * @example 0:1
     *
     * @var string
     */
    public $sar;

    /**
     * @description The beginning of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time base of the audio stream.
     *
     * @example 0.000000
     *
     * @var string
     */
    public $timebase;

    /**
     * @description The width of the video in pixels.
     *
     * @example 568
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'avgFPS'         => 'AvgFPS',
        'bitrate'        => 'Bitrate',
        'codecLongName'  => 'CodecLongName',
        'codecName'      => 'CodecName',
        'codecTag'       => 'CodecTag',
        'codecTagString' => 'CodecTagString',
        'codecTimeBase'  => 'CodecTimeBase',
        'dar'            => 'Dar',
        'duration'       => 'Duration',
        'fps'            => 'Fps',
        'HDRType'        => 'HDRType',
        'hasBFrames'     => 'HasBFrames',
        'height'         => 'Height',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'numFrames'      => 'NumFrames',
        'pixFmt'         => 'PixFmt',
        'profile'        => 'Profile',
        'rotate'         => 'Rotate',
        'sar'            => 'Sar',
        'startTime'      => 'StartTime',
        'timebase'       => 'Timebase',
        'width'          => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgFPS) {
            $res['AvgFPS'] = $this->avgFPS;
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
        if (null !== $this->dar) {
            $res['Dar'] = $this->dar;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->HDRType) {
            $res['HDRType'] = $this->HDRType;
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->sar) {
            $res['Sar'] = $this->sar;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgFPS'])) {
            $model->avgFPS = $map['AvgFPS'];
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
        if (isset($map['Dar'])) {
            $model->dar = $map['Dar'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['HDRType'])) {
            $model->HDRType = $map['HDRType'];
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Sar'])) {
            $model->sar = $map['Sar'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
