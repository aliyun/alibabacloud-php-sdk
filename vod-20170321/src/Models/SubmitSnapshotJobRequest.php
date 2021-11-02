<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobRequest extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $height;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $snapshotTemplateId;

    /**
     * @var int
     */
    public $specifiedOffsetTime;

    /**
     * @var string
     */
    public $spriteSnapshotConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'count'                => 'Count',
        'height'               => 'Height',
        'interval'             => 'Interval',
        'snapshotTemplateId'   => 'SnapshotTemplateId',
        'specifiedOffsetTime'  => 'SpecifiedOffsetTime',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'userData'             => 'UserData',
        'videoId'              => 'VideoId',
        'width'                => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->snapshotTemplateId) {
            $res['SnapshotTemplateId'] = $this->snapshotTemplateId;
        }
        if (null !== $this->specifiedOffsetTime) {
            $res['SpecifiedOffsetTime'] = $this->specifiedOffsetTime;
        }
        if (null !== $this->spriteSnapshotConfig) {
            $res['SpriteSnapshotConfig'] = $this->spriteSnapshotConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SnapshotTemplateId'])) {
            $model->snapshotTemplateId = $map['SnapshotTemplateId'];
        }
        if (isset($map['SpecifiedOffsetTime'])) {
            $model->specifiedOffsetTime = $map['SpecifiedOffsetTime'];
        }
        if (isset($map['SpriteSnapshotConfig'])) {
            $model->spriteSnapshotConfig = $map['SpriteSnapshotConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
