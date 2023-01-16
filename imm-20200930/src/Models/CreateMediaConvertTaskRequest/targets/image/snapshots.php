<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\image;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @example png
     *
     * @var string
     */
    public $format;

    /**
     * @example 640
     *
     * @var int
     */
    public $height;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $interval;

    /**
     * @example 5
     *
     * @var int
     */
    public $number;

    /**
     * @example stretch
     *
     * @var string
     */
    public $scaleType;

    /**
     * @example 0
     *
     * @var float
     */
    public $startTime;

    /**
     * @example oss://test-bucket/snapshots
     *
     * @var string
     */
    public $URI;

    /**
     * @example 640
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'format'    => 'Format',
        'height'    => 'Height',
        'interval'  => 'Interval',
        'number'    => 'Number',
        'scaleType' => 'ScaleType',
        'startTime' => 'StartTime',
        'URI'       => 'URI',
        'width'     => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return snapshots
     */
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
