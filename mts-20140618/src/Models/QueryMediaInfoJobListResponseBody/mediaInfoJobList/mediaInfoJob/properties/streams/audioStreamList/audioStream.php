<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\streams\audioStreamList;

use AlibabaCloud\Tea\Model;

class audioStream extends Model
{
    /**
     * @var string
     */
    public $timebase;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $sampleFmt;

    /**
     * @var string
     */
    public $channelLayout;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $samplerate;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var string
     */
    public $channels;

    /**
     * @var string
     */
    public $numFrames;

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
    public $startTime;

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
    protected $_name = [
        'timebase'       => 'Timebase',
        'index'          => 'Index',
        'sampleFmt'      => 'SampleFmt',
        'channelLayout'  => 'ChannelLayout',
        'lang'           => 'Lang',
        'samplerate'     => 'Samplerate',
        'codecLongName'  => 'CodecLongName',
        'channels'       => 'Channels',
        'numFrames'      => 'NumFrames',
        'bitrate'        => 'Bitrate',
        'codecTagString' => 'CodecTagString',
        'startTime'      => 'StartTime',
        'codecName'      => 'CodecName',
        'duration'       => 'Duration',
        'codecTag'       => 'CodecTag',
        'codecTimeBase'  => 'CodecTimeBase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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

        return $model;
    }
}
