<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig\overwriteParams\spriteSnapshotConfig;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description The threshold that is used to filter out black frames for the first snapshot to be captured. This feature is available if you request the system to capture multiple snapshots.
     *
     * @example 30
     *
     * @var int
     */
    public $blackLevel;

    /**
     * @description The number of snapshots.
     *
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the frame.
     *
     * @example intra
     *
     * @var string
     */
    public $frameType;

    /**
     * @description The height of a captured snapshot.
     *
     * @example 480
     *
     * @var int
     */
    public $height;

    /**
     * @description The interval at which snapshots are captured.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description The WebVTT snapshot configuration that specifies whether to merge the output snapshots.
     *
     * @example true
     *
     * @var bool
     */
    public $isSptFrag;

    /**
     * @description The color value threshold that determines whether a pixel is black.
     *
     * @example 70
     *
     * @var int
     */
    public $pixelBlackThreshold;

    /**
     * @description The configuration of the sprite snapshot.
     *
     * @var spriteSnapshotConfig
     */
    public $spriteSnapshotConfig;

    /**
     * @description The point in time at which the system starts to capture snapshots in the input video.
     *
     * @example 1000
     *
     * @var int
     */
    public $time;

    /**
     * @description The snapshot type. Valid values:
     *
     * @example Sprite
     *
     * @var string
     */
    public $type;

    /**
     * @description The width of a captured snapshot.
     *
     * @example 720
     *
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
    }

    public function toMap()
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
            $res['SpriteSnapshotConfig'] = null !== $this->spriteSnapshotConfig ? $this->spriteSnapshotConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return overwriteParams
     */
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
