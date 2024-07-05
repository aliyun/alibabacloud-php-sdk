<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\properties\streams\videoStreamList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\properties\streams\videoStreamList\videoStream\networkCost;
use AlibabaCloud\Tea\Model;

class videoStream extends Model
{
    /**
     * @description The average frame rate of the video stream.
     *
     * @example 23.976025
     *
     * @var string
     */
    public $avgFPS;

    /**
     * @description The bitrate of the video stream.
     *
     * @example 1496.46
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The full name of the codec.
     *
     * @example H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description The short name of the codec.
     *
     * @example h264
     *
     * @var string
     */
    public $codecName;

    /**
     * @description The tag of the codec.
     *
     * @example 0x31637661
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description The tag string of the codec.
     *
     * @example avc1
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description The codec time base.
     *
     * @example 1001/48000
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The display aspect ratio (DAR) of the video stream.
     *
     * @example 16:9
     *
     * @var string
     */
    public $dar;

    /**
     * @description The duration of the video stream.
     *
     * @example 17.225542
     *
     * @var string
     */
    public $duration;

    /**
     * @description The frame rate of the video stream.
     *
     * @example 23.976025
     *
     * @var string
     */
    public $fps;

    /**
     * @description Indicates whether the video stream contains B-frames.
     *
     * @example 2
     *
     * @var string
     */
    public $hasBFrames;

    /**
     * @description The height of the video stream in pixels.
     *
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The sequence number of the video stream. The value indicates the position of the video stream in all video streams.
     *
     * @example 0
     *
     * @var string
     */
    public $index;

    /**
     * @description The language of the video stream. For more information, see [FFmpeg documentation](https://www.ffmpeg.org/ffmpeg-all.html#Metadata) and [ISO 639](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).
     *
     * @example eng
     *
     * @var string
     */
    public $lang;

    /**
     * @description The codec level.
     *
     * @example 51
     *
     * @var string
     */
    public $level;

    /**
     * @description The network bandwidth that was consumed.
     *
     * @var networkCost
     */
    public $networkCost;

    /**
     * @description The total number of frames.
     *
     * @example 25
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description The pixel format of the video stream.
     *
     * @example yuv420p
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @description The codec profile.
     *
     * @example high
     *
     * @var string
     */
    public $profile;

    /**
     * @description The sample aspect ratio (SAR) of the video stream.
     *
     * @example 1:1
     *
     * @var string
     */
    public $sar;

    /**
     * @description The start time of the video stream.
     *
     * @example 0.000000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time base of the video stream.
     *
     * @example 1/24000
     *
     * @var string
     */
    public $timebase;

    /**
     * @description The width of the video stream in pixels.
     *
     * @example 1280
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
        'hasBFrames'     => 'HasBFrames',
        'height'         => 'Height',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'networkCost'    => 'NetworkCost',
        'numFrames'      => 'NumFrames',
        'pixFmt'         => 'PixFmt',
        'profile'        => 'Profile',
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
        if (null !== $this->networkCost) {
            $res['NetworkCost'] = null !== $this->networkCost ? $this->networkCost->toMap() : null;
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
     * @return videoStream
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
        if (isset($map['NetworkCost'])) {
            $model->networkCost = networkCost::fromMap($map['NetworkCost']);
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
