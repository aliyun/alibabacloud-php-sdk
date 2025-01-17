<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig\overwriteParams\spriteSnapshotConfig;

class overwriteParams extends Model
{
    /**
     * @var int
     */
    public $blackLevel;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $frameType;
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var bool
     */
    public $isSptFrag;
    /**
     * @var int
     */
    public $pixelBlackThreshold;
    /**
     * @var spriteSnapshotConfig
     */
    public $spriteSnapshotConfig;
    /**
     * @var int
     */
    public $time;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'blackLevel'           => 'BlackLevel',
        'count'                => 'Count',
        'frameType'            => 'FrameType',
        'height'               => 'Height',
        'interval'             => 'Interval',
        'isSptFrag'            => 'IsSptFrag',
        'pixelBlackThreshold'  => 'PixelBlackThreshold',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'time'                 => 'Time',
        'type'                 => 'Type',
        'width'                => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->spriteSnapshotConfig) {
            $this->spriteSnapshotConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackLevel) {
            $res['BlackLevel'] = $this->blackLevel;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->frameType) {
            $res['FrameType'] = $this->frameType;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->isSptFrag) {
            $res['IsSptFrag'] = $this->isSptFrag;
        }

        if (null !== $this->pixelBlackThreshold) {
            $res['PixelBlackThreshold'] = $this->pixelBlackThreshold;
        }

        if (null !== $this->spriteSnapshotConfig) {
            $res['SpriteSnapshotConfig'] = null !== $this->spriteSnapshotConfig ? $this->spriteSnapshotConfig->toArray($noStream) : $this->spriteSnapshotConfig;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BlackLevel'])) {
            $model->blackLevel = $map['BlackLevel'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FrameType'])) {
            $model->frameType = $map['FrameType'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IsSptFrag'])) {
            $model->isSptFrag = $map['IsSptFrag'];
        }

        if (isset($map['PixelBlackThreshold'])) {
            $model->pixelBlackThreshold = $map['PixelBlackThreshold'];
        }

        if (isset($map['SpriteSnapshotConfig'])) {
            $model->spriteSnapshotConfig = spriteSnapshotConfig::fromMap($map['SpriteSnapshotConfig']);
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
