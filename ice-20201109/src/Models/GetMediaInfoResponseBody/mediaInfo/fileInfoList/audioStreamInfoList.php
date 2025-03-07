<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class audioStreamInfoList extends Model
{
    /**
     * @description The bitrate.
     *
     * @example 127.794
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The output layout of sound channels.
     *
     * @example stereo
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description The number of sound channels.
     *
     * @example 2
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
     * @description The time base of the codec.
     *
     * @example 1/24000
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The duration.
     *
     * @example 16.200998
     *
     * @var string
     */
    public $duration;

    /**
     * @description The audio frame rate.
     *
     * @example 8
     *
     * @var string
     */
    public $fps;

    /**
     * @description The sequence number of the audio track.
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
     * @description The number of frames.
     *
     * @example 10
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description The codec profile.
     *
     * @example High
     *
     * @var string
     */
    public $profile;

    /**
     * @description The sampling format.
     *
     * @example fltp
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @description The sampling rate.
     *
     * @example 44100
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @description The start time.
     *
     * @example 0.000000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time base.
     *
     * @example 1/44100
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
        'fps'            => 'Fps',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'numFrames'      => 'NumFrames',
        'profile'        => 'Profile',
        'sampleFmt'      => 'SampleFmt',
        'sampleRate'     => 'SampleRate',
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
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
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
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
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
     * @return audioStreamInfoList
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
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
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
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
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
