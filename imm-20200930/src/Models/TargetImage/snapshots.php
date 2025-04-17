<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var float
     */
    public $height;

    /**
     * @var float
     */
    public $interval;

    /**
     * @var string
     */
    public $mode;

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
     * @var int
     */
    public $threshold;

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
        'height' => 'Height',
        'interval' => 'Interval',
        'mode' => 'Mode',
        'number' => 'Number',
        'scaleType' => 'ScaleType',
        'startTime' => 'StartTime',
        'threshold' => 'Threshold',
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

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
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
