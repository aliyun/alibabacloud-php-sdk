<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class audioStreamInfoList extends Model
{
    /**
     * @example 192.0
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example stereo
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @example 2
     *
     * @var string
     */
    public $channels;

    /**
     * @example AAC (Advanced Audio Coding)
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @example aac
     *
     * @var string
     */
    public $codecName;

    /**
     * @example 0x6134706d
     *
     * @var string
     */
    public $codecTag;

    /**
     * @example mp4a
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @example 1/44100
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @example 16.2
     *
     * @var string
     */
    public $duration;

    /**
     * @example 10
     *
     * @var string
     */
    public $fps;

    /**
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @example und
     *
     * @var string
     */
    public $lang;

    /**
     * @example 162
     *
     * @var string
     */
    public $numFrames;

    /**
     * @example High
     *
     * @var string
     */
    public $profile;

    /**
     * @example fltp
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @example 44100
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @example 0.000000
     *
     * @var string
     */
    public $startTime;

    /**
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
