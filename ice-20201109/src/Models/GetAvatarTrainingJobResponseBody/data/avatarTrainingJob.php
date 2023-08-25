<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class avatarTrainingJob extends Model
{
    /**
     * @var string
     */
    public $avatarDescription;

    /**
     * @example Avatar-XXXX
     *
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $avatarName;

    /**
     * @example 2DAvatar
     *
     * @var string
     */
    public $avatarType;

    /**
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $firstTrainingTime;

    /**
     * @example ****55d86f7f4587943ce7734d6b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $lastTrainingTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $portrait;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example https://your-bucket.oss-cn-hangzhou.aliyuncs.com/thumbnail.png
     *
     * @var string
     */
    public $thumbnail;

    /**
     * @example true
     *
     * @var bool
     */
    public $transparent;

    /**
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $video;
    protected $_name = [
        'avatarDescription' => 'AvatarDescription',
        'avatarId'          => 'AvatarId',
        'avatarName'        => 'AvatarName',
        'avatarType'        => 'AvatarType',
        'firstTrainingTime' => 'FirstTrainingTime',
        'jobId'             => 'JobId',
        'lastTrainingTime'  => 'LastTrainingTime',
        'message'           => 'Message',
        'portrait'          => 'Portrait',
        'status'            => 'Status',
        'thumbnail'         => 'Thumbnail',
        'transparent'       => 'Transparent',
        'video'             => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarDescription) {
            $res['AvatarDescription'] = $this->avatarDescription;
        }
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }
        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }
        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
        }
        if (null !== $this->firstTrainingTime) {
            $res['FirstTrainingTime'] = $this->firstTrainingTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->lastTrainingTime) {
            $res['LastTrainingTime'] = $this->lastTrainingTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->portrait) {
            $res['Portrait'] = $this->portrait;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->transparent) {
            $res['Transparent'] = $this->transparent;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avatarTrainingJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarDescription'])) {
            $model->avatarDescription = $map['AvatarDescription'];
        }
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }
        if (isset($map['AvatarName'])) {
            $model->avatarName = $map['AvatarName'];
        }
        if (isset($map['AvatarType'])) {
            $model->avatarType = $map['AvatarType'];
        }
        if (isset($map['FirstTrainingTime'])) {
            $model->firstTrainingTime = $map['FirstTrainingTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['LastTrainingTime'])) {
            $model->lastTrainingTime = $map['LastTrainingTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Portrait'])) {
            $model->portrait = $map['Portrait'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['Transparent'])) {
            $model->transparent = $map['Transparent'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }

        return $model;
    }
}
