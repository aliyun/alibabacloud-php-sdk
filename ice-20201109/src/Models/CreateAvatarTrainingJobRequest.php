<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateAvatarTrainingJobRequest extends Model
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
     * @var string
     */
    public $avatarType;
    /**
     * @var string
     */
    public $portrait;
    /**
     * @var string
     */
    public $thumbnail;
    /**
     * @var bool
     */
    public $transparent;
    /**
     * @var string
     */
    public $video;
    protected $_name = [
        'avatarDescription' => 'AvatarDescription',
        'avatarName'        => 'AvatarName',
        'avatarType'        => 'AvatarType',
        'portrait'          => 'Portrait',
        'thumbnail'         => 'Thumbnail',
        'transparent'       => 'Transparent',
        'video'             => 'Video',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarDescription) {
            $res['AvatarDescription'] = $this->avatarDescription;
        }

        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }

        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarDescription'])) {
            $model->avatarDescription = $map['AvatarDescription'];
        }

        if (isset($map['AvatarName'])) {
            $model->avatarName = $map['AvatarName'];
        }

        if (isset($map['AvatarType'])) {
            $model->avatarType = $map['AvatarType'];
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
