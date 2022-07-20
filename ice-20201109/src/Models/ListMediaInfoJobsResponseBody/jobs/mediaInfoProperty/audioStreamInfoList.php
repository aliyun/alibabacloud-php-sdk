<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponseBody\jobs\mediaInfoProperty;

use AlibabaCloud\Tea\Model;

class audioStreamInfoList extends Model
{
    /**
     * @description 码率
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 声道布局
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description 声道数
     *
     * @var string
     */
    public $channels;

    /**
     * @description 编码格式名
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description 编码格式
     *
     * @var string
     */
    public $codecName;

    /**
     * @description 编码器标签
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description 编码器标签名
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description 编码器时间基
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description 时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 流序号
     *
     * @var string
     */
    public $index;

    /**
     * @description 语言
     *
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sampleFmt;

    /**
     * @description 采样率
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 时间基
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
