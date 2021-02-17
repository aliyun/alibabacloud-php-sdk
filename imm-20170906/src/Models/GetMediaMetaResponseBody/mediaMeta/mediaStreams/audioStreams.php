<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams;

use AlibabaCloud\Tea\Model;

class audioStreams extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $channelLayout;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var int
     */
    public $channels;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $codecTagString;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $sampleFormat;

    /**
     * @var string
     */
    public $frames;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var string
     */
    public $duration;

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
    protected $_name = [
        'index'          => 'Index',
        'sampleRate'     => 'SampleRate',
        'channelLayout'  => 'ChannelLayout',
        'codecLongName'  => 'CodecLongName',
        'channels'       => 'Channels',
        'bitrate'        => 'Bitrate',
        'codecTagString' => 'CodecTagString',
        'language'       => 'Language',
        'startTime'      => 'StartTime',
        'sampleFormat'   => 'SampleFormat',
        'frames'         => 'Frames',
        'codecName'      => 'CodecName',
        'duration'       => 'Duration',
        'codecTag'       => 'CodecTag',
        'codecTimeBase'  => 'CodecTimeBase',
        'timeBase'       => 'TimeBase',
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
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->sampleFormat) {
            $res['SampleFormat'] = $this->sampleFormat;
        }
        if (null !== $this->frames) {
            $res['Frames'] = $this->frames;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SampleFormat'])) {
            $model->sampleFormat = $map['SampleFormat'];
        }
        if (isset($map['Frames'])) {
            $model->frames = $map['Frames'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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

        return $model;
    }
}
