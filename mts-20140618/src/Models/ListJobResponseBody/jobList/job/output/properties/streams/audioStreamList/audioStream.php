<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\properties\streams\audioStreamList;

use AlibabaCloud\Tea\Model;

class audioStream extends Model
{
    /**
     * @description The bitrate of the audio stream.
     *
     * @example 64.136
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The output layout of the sound channels.
     *
     * @example mono
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description The number of sound channels.
     *
     * @example 1
     *
     * @var string
     */
    public $channels;

    /**
     * @description The full name of the codec.
     *
     * @example AAC (Advanced Audio Coding)
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description The short name of the codec.
     *
     * @example aac
     *
     * @var string
     */
    public $codecName;

    /**
     * @description The tag of the codec.
     *
     * @example 0x6134706d
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description The tag string of the codec.
     *
     * @example mp4a
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description The codec time base.
     *
     * @example 1/32000
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The duration of the audio stream.
     *
     * @example 17.223562
     *
     * @var string
     */
    public $duration;

    /**
     * @description The sequence number of the audio stream. The value indicates the position of the audio stream in all audio streams.
     *
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @description The language of the audio stream. For more information, see [FFmpeg documentation](https://www.ffmpeg.org/ffmpeg-all.html#Metadata) and [ISO 639](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).
     *
     * @example und
     *
     * @var string
     */
    public $lang;

    /**
     * @description The total number of frames.
     *
     * @example 30
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description The sampling format.
     *
     * @example fltp
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @description The sampling rate of the audio stream.
     *
     * @example 32000
     *
     * @var string
     */
    public $samplerate;

    /**
     * @description The start time.
     *
     * @example 0.000000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time base of the audio stream.
     *
     * @example 1/32000
     *
     * @var string
     */
    public $timebase;
    protected $_name = [
        'bitrate'        => 'Bitrate',
        'channelLayout'  => 'ChannelLayout',
        'channels'       => 'Channels',
        'codecLongName'  => 'CodecLongName',
        'codecName'      => 'CodecName',
        'codecTag'       => 'CodecTag',
        'codecTagString' => 'CodecTagString',
        'codecTimeBase'  => 'CodecTimeBase',
        'duration'       => 'Duration',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'numFrames'      => 'NumFrames',
        'sampleFmt'      => 'SampleFmt',
        'samplerate'     => 'Samplerate',
        'startTime'      => 'StartTime',
        'timebase'       => 'Timebase',
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
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }

        return $model;
    }
}
