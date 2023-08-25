<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateAvatarTrainingJobRequest extends Model
{
    /**
     * @var string
     */
    public $avatarDescription;

    /**
     * @var string
     */
    public $avatarName;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example ****571c704445f9a0ee011406c2****
     *
     * @var string
     */
    public $portrait;

    /**
     * @example https://your-bucket.oss-cn-hangzhou.aliyuncs.com/thumbnail.png
     *
     * @var string
     */
    public $thumbnail;

    /**
     * @example True
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
