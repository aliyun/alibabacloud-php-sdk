<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta;

use AlibabaCloud\Tea\Model;

class videoStreamInfoList extends Model
{
    /**
     * @example 25.0
     *
     * @var string
     */
    public $avgFps;

    /**
     * @example 888.563
     *
     * @var string
     */
    public $bitRate;

    /**
     * @example H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @example h264
     *
     * @var string
     */
    public $codecName;

    /**
     * @example 0x001b
     *
     * @var string
     */
    public $codecTag;

    /**
     * @example [27][0][0][0]
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @example 1/50
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @example 16:9
     *
     * @var string
     */
    public $dar;

    /**
     * @example 403.039989
     *
     * @var string
     */
    public $duration;

    /**
     * @example 25.0
     *
     * @var string
     */
    public $fps;

    /**
     * @example 2
     *
     * @var string
     */
    public $hasBFrames;

    /**
     * @example 478
     *
     * @var string
     */
    public $height;

    /**
     * @example 0
     *
     * @var string
     */
    public $index;

    /**
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @example 31
     *
     * @var string
     */
    public $level;

    /**
     * @example 10040
     *
     * @var string
     */
    public $numFrames;

    /**
     * @example yuv420p
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @example High
     *
     * @var string
     */
    public $profile;

    /**
     * @example 0
     *
     * @var string
     */
    public $rotate;

    /**
     * @example 478:477
     *
     * @var string
     */
    public $sar;

    /**
     * @example 1.473556
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1/90000
     *
     * @var string
     */
    public $timeBase;

    /**
     * @example 848
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'avgFps'         => 'Avg_fps',
        'bitRate'        => 'Bit_rate',
        'codecLongName'  => 'Codec_long_name',
        'codecName'      => 'Codec_name',
        'codecTag'       => 'Codec_tag',
        'codecTagString' => 'Codec_tag_string',
        'codecTimeBase'  => 'Codec_time_base',
        'dar'            => 'Dar',
        'duration'       => 'Duration',
        'fps'            => 'Fps',
        'hasBFrames'     => 'Has_b_frames',
        'height'         => 'Height',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'numFrames'      => 'NumFrames',
        'pixFmt'         => 'PixFmt',
        'profile'        => 'Profile',
        'rotate'         => 'Rotate',
        'sar'            => 'Sar',
        'startTime'      => 'Start_time',
        'timeBase'       => 'Time_base',
        'width'          => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgFps) {
            $res['Avg_fps'] = $this->avgFps;
        }
        if (null !== $this->bitRate) {
            $res['Bit_rate'] = $this->bitRate;
        }
        if (null !== $this->codecLongName) {
            $res['Codec_long_name'] = $this->codecLongName;
        }
        if (null !== $this->codecName) {
            $res['Codec_name'] = $this->codecName;
        }
        if (null !== $this->codecTag) {
            $res['Codec_tag'] = $this->codecTag;
        }
        if (null !== $this->codecTagString) {
            $res['Codec_tag_string'] = $this->codecTagString;
        }
        if (null !== $this->codecTimeBase) {
            $res['Codec_time_base'] = $this->codecTimeBase;
        }
        if (null !== $this->dar) {
            $res['Dar'] = $this->dar;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->hasBFrames) {
            $res['Has_b_frames'] = $this->hasBFrames;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->sar) {
            $res['Sar'] = $this->sar;
        }
        if (null !== $this->startTime) {
            $res['Start_time'] = $this->startTime;
        }
        if (null !== $this->timeBase) {
            $res['Time_base'] = $this->timeBase;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Avg_fps'])) {
            $model->avgFps = $map['Avg_fps'];
        }
        if (isset($map['Bit_rate'])) {
            $model->bitRate = $map['Bit_rate'];
        }
        if (isset($map['Codec_long_name'])) {
            $model->codecLongName = $map['Codec_long_name'];
        }
        if (isset($map['Codec_name'])) {
            $model->codecName = $map['Codec_name'];
        }
        if (isset($map['Codec_tag'])) {
            $model->codecTag = $map['Codec_tag'];
        }
        if (isset($map['Codec_tag_string'])) {
            $model->codecTagString = $map['Codec_tag_string'];
        }
        if (isset($map['Codec_time_base'])) {
            $model->codecTimeBase = $map['Codec_time_base'];
        }
        if (isset($map['Dar'])) {
            $model->dar = $map['Dar'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Has_b_frames'])) {
            $model->hasBFrames = $map['Has_b_frames'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Sar'])) {
            $model->sar = $map['Sar'];
        }
        if (isset($map['Start_time'])) {
            $model->startTime = $map['Start_time'];
        }
        if (isset($map['Time_base'])) {
            $model->timeBase = $map['Time_base'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
