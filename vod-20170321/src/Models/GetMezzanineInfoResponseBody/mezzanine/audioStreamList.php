<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine;

use AlibabaCloud\Tea\Model;

class audioStreamList extends Model
{
    /**
     * @description The information about the video stream.
     *
     * @example 62.885
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The target frame rate.
     *
     * @example mono
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description The width of the video resolution.
     *
     * @example 1
     *
     * @var string
     */
    public $channels;

    /**
     * @description The time when the file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example AAC (Advanced Audio Coding)
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description The duration of the video stream.
     *
     * @example aac
     *
     * @var string
     */
    public $codecName;

    /**
     * @description The sequence number of the audio stream, which specifies the position of the audio stream in all audio streams.
     *
     * @example 0x6134706d
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description The tag of the codec format.
     *
     * @example mp4a
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description The full name of the codec format.
     *
     * @example 1/44100
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The name of the file.
     *
     * @example 3.227574
     *
     * @var string
     */
    public $duration;

    /**
     * @description The short name of the codec format.
     *
     * @example 0
     *
     * @var string
     */
    public $index;

    /**
     * @description The bitrate of the file. Unit: Kbit/s.
     *
     * @example und
     *
     * @var string
     */
    public $lang;

    /**
     * @description The codec profile.
     *
     * @example 1
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description The status of the file. Valid values:
     *
     *   **Uploading**: The file is being uploaded. This is the initial status.
     *   **Normal**: The file is uploaded.
     *   **UploadFail**: The file fails to be uploaded.
     *   **Deleted**: The file is deleted.
     *
     * @example fltp
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @description The size of the file. Unit: byte.
     *
     * @example 44100
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @description The sample rate.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the video.
     *
     * @example 0.000000
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
     * @return audioStreamList
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
