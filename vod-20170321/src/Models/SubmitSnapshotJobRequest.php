<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var int
     */
    public $specifiedOffsetTime;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $spriteSnapshotConfig;

    /**
     * @var string
     */
    public $snapshotTemplateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'videoId'              => 'VideoId',
        'specifiedOffsetTime'  => 'SpecifiedOffsetTime',
        'width'                => 'Width',
        'height'               => 'Height',
        'count'                => 'Count',
        'interval'             => 'Interval',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'snapshotTemplateId'   => 'SnapshotTemplateId',
        'userData'             => 'UserData',
        'fileUrl'              => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->specifiedOffsetTime) {
            $res['SpecifiedOffsetTime'] = $this->specifiedOffsetTime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->spriteSnapshotConfig) {
            $res['SpriteSnapshotConfig'] = $this->spriteSnapshotConfig;
        }
        if (null !== $this->snapshotTemplateId) {
            $res['SnapshotTemplateId'] = $this->snapshotTemplateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['SpecifiedOffsetTime'])) {
            $model->specifiedOffsetTime = $map['SpecifiedOffsetTime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SpriteSnapshotConfig'])) {
            $model->spriteSnapshotConfig = $map['SpriteSnapshotConfig'];
        }
        if (isset($map['SnapshotTemplateId'])) {
            $model->snapshotTemplateId = $map['SnapshotTemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
