<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateAvatarTrainingJobRequest extends Model
{
    /**
     * @description *   The description of the digital human.
     *   The description can be up to 1,000 characters in length.
     *
     * @var string
     */
    public $avatarDescription;

    /**
     * @description *   The name of the digital human.
     *   The name can be up to seven characters in length.
     *
     * @var string
     */
    public $avatarName;

    /**
     * @description The ID of the digital human training job.
     *
     * This parameter is required.
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description *   The media asset ID of the portrait image.
     *   The value must be 32 characters in length.
     *
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $portrait;

    /**
     * @description *   The thumbnail URL.
     *   After the digital human is trained, the thumbnail is uploaded to this URL.
     *   The URL must be a valid public Object Storage Service (OSS) URL.
     *   The URL can be up to 512 characters in length.
     *   The URL cannot be updated after the digital human is trained.
     *
     * @example https://your-bucket.oss-cn-hangzhou.aliyuncs.com/thumbnail.png
     *
     * @var string
     */
    public $thumbnail;

    /**
     * @description *   Indicates whether the input video supports alpha channels.
     *
     *   You can modify this parameter only if the job is in the Init or Fail state.
     *
     **
     *
     **Note**: Make sure that the current settings are consistent with those of the submitted training video. Otherwise, the digital human may malfunction.
     *
     * @example True
     *
     * @var bool
     */
    public $transparent;

    /**
     * @description *   The ID of the video used for training.
     *   The value must be 32 characters in length.
     *   Supported formats: MP4, MOV, and WebM.
     *   The duration of the video must be 5 to 15 minutes.
     *   The resolution of the video must be 1920×1080 or 1080×1920.
     *
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $video;
    protected $_name = [
        'avatarDescription' => 'AvatarDescription',
        'avatarName'        => 'AvatarName',
        'jobId'             => 'JobId',
        'portrait'          => 'Portrait',
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
        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->portrait) {
            $res['Portrait'] = $this->portrait;
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
     * @return UpdateAvatarTrainingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarDescription'])) {
            $model->avatarDescription = $map['AvatarDescription'];
        }
        if (isset($map['AvatarName'])) {
            $model->avatarName = $map['AvatarName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Portrait'])) {
            $model->portrait = $map['Portrait'];
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
