<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\properties\streams\audioStreamList;

use AlibabaCloud\Tea\Model;

class audioStream extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var string
     */
    public $codecTimeBase;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var string
     */
    public $codecTagString;

    /**
     * @var string
     */
    public $codecTag;

    /**
     * @var string
     */
    public $sampleFmt;

    /**
     * @var string
     */
    public $samplerate;

    /**
     * @var string
     */
    public $channels;

    /**
     * @var string
     */
    public $channelLayout;

    /**
     * @var string
     */
    public $timebase;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $numFrames;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'index'          => 'Index',
        'codecName'      => 'CodecName',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecLongName'  => 'CodecLongName',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'sampleFmt'      => 'SampleFmt',
        'samplerate'     => 'Samplerate',
        'channels'       => 'Channels',
        'channelLayout'  => 'ChannelLayout',
        'timebase'       => 'Timebase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'bitrate'        => 'Bitrate',
        'numFrames'      => 'NumFrames',
        'lang'           => 'Lang',
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
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
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
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
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
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
