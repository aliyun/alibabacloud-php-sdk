<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage;

use AlibabaCloud\Dara\Model;

class animations extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var float
     */
    public $frameRate;

    /**
     * @var float
     */
    public $height;

    /**
     * @var float
     */
    public $interval;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var float
     */
    public $width;
    protected $_name = [
        'format' => 'Format',
        'frameRate' => 'FrameRate',
        'height' => 'Height',
        'interval' => 'Interval',
        'number' => 'Number',
        'scaleType' => 'ScaleType',
        'startTime' => 'StartTime',
        'URI' => 'URI',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
