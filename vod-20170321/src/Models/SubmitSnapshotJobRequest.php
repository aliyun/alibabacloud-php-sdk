<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int[]
     */
    public $specifiedOffsetTimes;

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
        'count' => 'Count',
        'height' => 'Height',
        'interval' => 'Interval',
        'snapshotTemplateId' => 'SnapshotTemplateId',
        'specifiedOffsetTime' => 'SpecifiedOffsetTime',
        'specifiedOffsetTimes' => 'SpecifiedOffsetTimes',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'userData' => 'UserData',
        'videoId' => 'VideoId',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->specifiedOffsetTimes)) {
            Model::validateArray($this->specifiedOffsetTimes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->specifiedOffsetTimes) {
            if (\is_array($this->specifiedOffsetTimes)) {
                $res['SpecifiedOffsetTimes'] = [];
                $n1 = 0;
                foreach ($this->specifiedOffsetTimes as $item1) {
                    $res['SpecifiedOffsetTimes'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SpecifiedOffsetTimes'])) {
            if (!empty($map['SpecifiedOffsetTimes'])) {
                $model->specifiedOffsetTimes = [];
                $n1 = 0;
                foreach ($map['SpecifiedOffsetTimes'] as $item1) {
                    $model->specifiedOffsetTimes[$n1++] = $item1;
                }
            }
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
