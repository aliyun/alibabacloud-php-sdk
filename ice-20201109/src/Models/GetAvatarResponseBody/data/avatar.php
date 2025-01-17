<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponseBody\data;

use AlibabaCloud\Dara\Model;

class avatar extends Model
{
    /**
     * @var string
     */
    public $avatarDescription;
    /**
     * @var string
     */
    public $avatarId;
    /**
     * @var string
     */
    public $avatarName;
    /**
     * @var string
     */
    public $avatarType;
    /**
     * @var int
     */
    public $height;
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
     * @var int
     */
    public $width;
    protected $_name = [
        'avatarDescription' => 'AvatarDescription',
        'avatarId'          => 'AvatarId',
        'avatarName'        => 'AvatarName',
        'avatarType'        => 'AvatarType',
        'height'            => 'Height',
        'portrait'          => 'Portrait',
        'thumbnail'         => 'Thumbnail',
        'transparent'       => 'Transparent',
        'width'             => 'Width',
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

        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }

        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }

        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
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

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
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

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
