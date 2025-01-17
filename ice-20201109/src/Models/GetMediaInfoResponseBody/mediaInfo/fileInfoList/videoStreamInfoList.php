<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Dara\Model;

class videoStreamInfoList extends Model
{
    /**
     * @var string
     */
    public $avgFPS;
    /**
     * @var string
     */
    public $bitrate;
    /**
     * @var string
     */
    public $codecLongName;
    /**
     * @var string
     */
    public $codecName;
    /**
     * @var string
     */
    public $codecTag;
    /**
     * @var string
     */
    public $codecTagString;
    /**
     * @var string
     */
    public $codecTimeBase;
    /**
     * @var string
     */
    public $dar;
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
    public $hasBFrames;
    /**
     * @var string
     */
    public $height;
    /**
     * @var string
     */
    public $index;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $nbFrames;
    /**
     * @var string
     */
    public $numFrames;
    /**
     * @var string
     */
    public $pixFmt;
    /**
     * @var string
     */
    public $profile;
    /**
     * @var string
     */
    public $rotate;
    /**
     * @var string
     */
    public $sar;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $timebase;
    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'avgFPS'         => 'AvgFPS',
        'bitrate'        => 'Bitrate',
        'codecLongName'  => 'CodecLongName',
        'codecName'      => 'CodecName',
        'codecTag'       => 'CodecTag',
        'codecTagString' => 'CodecTagString',
        'codecTimeBase'  => 'CodecTimeBase',
        'dar'            => 'Dar',
        'duration'       => 'Duration',
        'fps'            => 'Fps',
        'hasBFrames'     => 'HasBFrames',
        'height'         => 'Height',
        'index'          => 'Index',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'nbFrames'       => 'Nb_frames',
        'numFrames'      => 'NumFrames',
        'pixFmt'         => 'PixFmt',
        'profile'        => 'Profile',
        'rotate'         => 'Rotate',
        'sar'            => 'Sar',
        'startTime'      => 'StartTime',
        'timebase'       => 'Timebase',
        'width'          => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgFPS) {
            $res['AvgFPS'] = $this->avgFPS;
        }

        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
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
            $res['HasBFrames'] = $this->hasBFrames;
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

        if (null !== $this->nbFrames) {
            $res['Nb_frames'] = $this->nbFrames;
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
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgFPS'])) {
            $model->avgFPS = $map['AvgFPS'];
        }

        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
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

        if (isset($map['Dar'])) {
            $model->dar = $map['Dar'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['HasBFrames'])) {
            $model->hasBFrames = $map['HasBFrames'];
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

        if (isset($map['Nb_frames'])) {
            $model->nbFrames = $map['Nb_frames'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
