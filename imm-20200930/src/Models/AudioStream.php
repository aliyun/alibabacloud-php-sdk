<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AudioStream extends Model
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
     * @description SampleFormat
     *
     * @var string
     */
    public $sampleFormat;

    /**
     * @description SampleRate
     *
     * @var int
     */
    public $sampleRate;

    /**
     * @description Channels
     *
     * @var int
     */
    public $channels;

    /**
     * @description ChannelLayout
     *
     * @var string
     */
    public $channelLayout;

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
     * @description Lyric
     *
     * @var string
     */
    public $lyric;
    protected $_name = [
        'index'          => 'Index',
        'language'       => 'Language',
        'codecName'      => 'CodecName',
        'codecLongName'  => 'CodecLongName',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'sampleFormat'   => 'SampleFormat',
        'sampleRate'     => 'SampleRate',
        'channels'       => 'Channels',
        'channelLayout'  => 'ChannelLayout',
        'timeBase'       => 'TimeBase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'bitrate'        => 'Bitrate',
        'lyric'          => 'Lyric',
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
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->sampleFormat) {
            $res['SampleFormat'] = $this->sampleFormat;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
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
        if (null !== $this->lyric) {
            $res['Lyric'] = $this->lyric;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AudioStream
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
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['SampleFormat'])) {
            $model->sampleFormat = $map['SampleFormat'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
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
        if (isset($map['Lyric'])) {
            $model->lyric = $map['Lyric'];
        }

        return $model;
    }
}
