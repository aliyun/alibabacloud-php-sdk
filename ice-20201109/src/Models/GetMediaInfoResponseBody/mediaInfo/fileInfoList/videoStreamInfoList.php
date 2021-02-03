<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class videoStreamInfoList extends Model
{
    /**
     * @description 视频流序号
     *
     * @var string
     */
    public $index;

    /**
     * @description 编码格式简述名
     *
     * @var string
     */
    public $codecName;

    /**
     * @description 编码格式长述名
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description 编码预置
     *
     * @var string
     */
    public $profile;

    /**
     * @description 编码时基
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description 编码格式标记文本
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description 编码格式标记
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description 宽
     *
     * @var string
     */
    public $width;

    /**
     * @description 高
     *
     * @var string
     */
    public $height;

    /**
     * @description 是否有B帧
     *
     * @var string
     */
    public $hasBFrames;

    /**
     * @description 编码信号分辨率比
     *
     * @var string
     */
    public $sar;

    /**
     * @description 编码显示分辨率比
     *
     * @var string
     */
    public $dar;

    /**
     * @description 像素格式
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @description 编码等级
     *
     * @var string
     */
    public $level;

    /**
     * @description 视频帧率
     *
     * @var string
     */
    public $fps;

    /**
     * @description 平均帧率
     *
     * @var string
     */
    public $avgFPS;

    /**
     * @description 时基
     *
     * @var string
     */
    public $timebase;

    /**
     * @description 起始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 码率
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 总帧数
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description 语言
     *
     * @var string
     */
    public $lang;

    /**
     * @description 旋转
     *
     * @var string
     */
    public $rotate;

    /**
     * @description 总帧数
     *
     * @var string
     */
    public $nbFrames;
    protected $_name = [
        'index'          => 'Index',
        'codecName'      => 'CodecName',
        'codecLongName'  => 'CodecLongName',
        'profile'        => 'Profile',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'width'          => 'Width',
        'height'         => 'Height',
        'hasBFrames'     => 'HasBFrames',
        'sar'            => 'Sar',
        'dar'            => 'Dar',
        'pixFmt'         => 'PixFmt',
        'level'          => 'Level',
        'fps'            => 'Fps',
        'avgFPS'         => 'AvgFPS',
        'timebase'       => 'Timebase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'bitrate'        => 'Bitrate',
        'numFrames'      => 'NumFrames',
        'lang'           => 'Lang',
        'rotate'         => 'Rotate',
        'nbFrames'       => 'Nb_frames',
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
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->hasBFrames) {
            $res['HasBFrames'] = $this->hasBFrames;
        }
        if (null !== $this->sar) {
            $res['Sar'] = $this->sar;
        }
        if (null !== $this->dar) {
            $res['Dar'] = $this->dar;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->avgFPS) {
            $res['AvgFPS'] = $this->avgFPS;
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
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->nbFrames) {
            $res['Nb_frames'] = $this->nbFrames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStreamInfoList
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
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
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
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
        }
        if (isset($map['Sar'])) {
            $model->sar = $map['Sar'];
        }
        if (isset($map['Dar'])) {
            $model->dar = $map['Dar'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['AvgFPS'])) {
            $model->avgFPS = $map['AvgFPS'];
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
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Nb_frames'])) {
            $model->nbFrames = $map['Nb_frames'];
        }

        return $model;
    }
}
