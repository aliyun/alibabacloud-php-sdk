<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine;

use AlibabaCloud\Tea\Model;

class videoStreamList extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $timebase;

    /**
     * @var string
     */
    public $avgFPS;

    /**
     * @var string
     */
    public $pixFmt;

    /**
     * @var string
     */
    public $sar;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $codecLongName;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $numFrames;

    /**
     * @var string
     */
    public $rotate;

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
    public $hasBFrames;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $dar;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fps;

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
    public $level;
    protected $_name = [
        'index'          => 'Index',
        'timebase'       => 'Timebase',
        'avgFPS'         => 'AvgFPS',
        'pixFmt'         => 'PixFmt',
        'sar'            => 'Sar',
        'lang'           => 'Lang',
        'codecLongName'  => 'CodecLongName',
        'height'         => 'Height',
        'numFrames'      => 'NumFrames',
        'rotate'         => 'Rotate',
        'bitrate'        => 'Bitrate',
        'codecTagString' => 'CodecTagString',
        'hasBFrames'     => 'HasBFrames',
        'profile'        => 'Profile',
        'startTime'      => 'StartTime',
        'dar'            => 'Dar',
        'codecName'      => 'CodecName',
        'width'          => 'Width',
        'duration'       => 'Duration',
        'fps'            => 'Fps',
        'codecTag'       => 'CodecTag',
        'codecTimeBase'  => 'CodecTimeBase',
        'level'          => 'Level',
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
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->avgFPS) {
            $res['AvgFPS'] = $this->avgFPS;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->sar) {
            $res['Sar'] = $this->sar;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->hasBFrames) {
            $res['HasBFrames'] = $this->hasBFrames;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dar) {
            $res['Dar'] = $this->dar;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['AvgFPS'])) {
            $model->avgFPS = $map['AvgFPS'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Sar'])) {
            $model->sar = $map['Sar'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Dar'])) {
            $model->dar = $map['Dar'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
