<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponseBody;

use AlibabaCloud\Dara\Model;

class smartSysAvatarModelList extends Model
{
    /**
     * @var string
     */
    public $avatarId;
    /**
     * @var string
     */
    public $avatarName;
    /**
     * @var int
     */
    public $bitrate;
    /**
     * @var string
     */
    public $coverUrl;
    /**
     * @var int
     */
    public $height;
    /**
     * @var bool
     */
    public $outputMask;
    /**
     * @var string
     */
    public $videoUrl;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'avatarId'   => 'AvatarId',
        'avatarName' => 'AvatarName',
        'bitrate'    => 'Bitrate',
        'coverUrl'   => 'CoverUrl',
        'height'     => 'Height',
        'outputMask' => 'OutputMask',
        'videoUrl'   => 'VideoUrl',
        'width'      => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }

        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }

        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->outputMask) {
            $res['OutputMask'] = $this->outputMask;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }

        if (isset($map['AvatarName'])) {
            $model->avatarName = $map['AvatarName'];
        }

        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['OutputMask'])) {
            $model->outputMask = $map['OutputMask'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
