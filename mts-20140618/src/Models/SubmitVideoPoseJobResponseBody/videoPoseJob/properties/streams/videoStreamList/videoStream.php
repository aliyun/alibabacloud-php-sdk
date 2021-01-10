<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\properties\streams\videoStreamList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\properties\streams\videoStreamList\videoStream\networkCost;
use AlibabaCloud\Tea\Model;

class videoStream extends Model
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
    public $codecLongName;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $codecTimeBase;

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
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $hasBFrames;

    /**
     * @var string
     */
    public $sar;

    /**
     * @var string
     */
    public $dar;

    /**
     * @var string
     */
    public $pixFmt;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $avgFPS;

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

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var networkCost
     */
    public $networkCost;
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
        'networkCost'    => 'NetworkCost',
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
        if (null !== $this->networkCost) {
            $res['NetworkCost'] = null !== $this->networkCost ? $this->networkCost->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStream
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
        if (isset($map['NetworkCost'])) {
            $model->networkCost = networkCost::fromMap($map['NetworkCost']);
        }

        return $model;
    }
}
