<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class snapshotJobDetail extends Model
{
    /**
     * @example 2024-10-14T07:39:45Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @example 2024-10-14T07:39:25Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 63df12s0**********4hdq249t82kr91
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {"inl":0,"num":32,"tm":5,"wd":"352","ft":"normal","hg":"640"}
     *
     * @var string
     */
    public $normalConfig;

    /**
     * @example {"pad":"0","lines":"10","mgin":"0","cols":"10","ikcp":"false","hg":"68"}
     *
     * @var string
     */
    public $spriteConfig;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example Auto
     *
     * @var string
     */
    public $trigger;

    /**
     * @example 139109*****84930
     *
     * @var int
     */
    public $userId;

    /**
     * @example 30e5d7**********bd900764de7c0102
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'createTime'   => 'CreateTime',
        'jobId'        => 'JobId',
        'normalConfig' => 'NormalConfig',
        'spriteConfig' => 'SpriteConfig',
        'status'       => 'Status',
        'trigger'      => 'Trigger',
        'userId'       => 'UserId',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->normalConfig) {
            $res['NormalConfig'] = $this->normalConfig;
        }
        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NormalConfig'])) {
            $model->normalConfig = $map['NormalConfig'];
        }
        if (isset($map['SpriteConfig'])) {
            $model->spriteConfig = $map['SpriteConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
