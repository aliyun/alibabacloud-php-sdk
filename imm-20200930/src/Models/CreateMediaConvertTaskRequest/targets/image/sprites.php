<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\image;

use AlibabaCloud\Tea\Model;

class sprites extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var float
     */
    public $interval;

    /**
     * @var int
     */
    public $margin;

    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $pad;

    /**
     * @var float
     */
    public $scaleHeight;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var float
     */
    public $scaleWidth;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var int
     */
    public $tileHeight;

    /**
     * @var int
     */
    public $tileWidth;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'format'      => 'Format',
        'interval'    => 'Interval',
        'margin'      => 'Margin',
        'number'      => 'Number',
        'pad'         => 'Pad',
        'scaleHeight' => 'ScaleHeight',
        'scaleType'   => 'ScaleType',
        'scaleWidth'  => 'ScaleWidth',
        'startTime'   => 'StartTime',
        'tileHeight'  => 'TileHeight',
        'tileWidth'   => 'TileWidth',
        'URI'         => 'URI',
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
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->margin) {
            $res['Margin'] = $this->margin;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }
        if (null !== $this->scaleHeight) {
            $res['ScaleHeight'] = $this->scaleHeight;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }
        if (null !== $this->scaleWidth) {
            $res['ScaleWidth'] = $this->scaleWidth;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tileHeight) {
            $res['TileHeight'] = $this->tileHeight;
        }
        if (null !== $this->tileWidth) {
            $res['TileWidth'] = $this->tileWidth;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sprites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Margin'])) {
            $model->margin = $map['Margin'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }
        if (isset($map['ScaleHeight'])) {
            $model->scaleHeight = $map['ScaleHeight'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }
        if (isset($map['ScaleWidth'])) {
            $model->scaleWidth = $map['ScaleWidth'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TileHeight'])) {
            $model->tileHeight = $map['TileHeight'];
        }
        if (isset($map['TileWidth'])) {
            $model->tileWidth = $map['TileWidth'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
