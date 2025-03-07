<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponseBody;

use AlibabaCloud\Tea\Model;

class smartSysAvatarModelList extends Model
{
    /**
     * @description The ID of the digital human. The ID is required to submit a separate digital human rendering job or use the digital human image in an intelligent timeline.
     *
     * @example yunqiao
     *
     * @var string
     */
    public $avatarId;

    /**
     * @description The name of the digital human.
     *
     * @var string
     */
    public $avatarName;

    /**
     * @description The video bitrate.
     *
     * @example 4000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The sample thumbnail URL of the digital human.
     *
     * @example http://ice-pub-media.myalicdn.com/smart/avatarModel/coverDemo/yunqiao.mp4
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description The video height.
     *
     * @example 1920
     *
     * @var int
     */
    public $height;

    /**
     * @description Indicates whether portrait mask rendering is supported.
     *
     * @example false
     *
     * @var bool
     */
    public $outputMask;

    /**
     * @description The sample video URL of the digital human.
     *
     * @example http://ice-pub-media.myalicdn.com/smart/avatarModel/videoDemo/yunqiao.mp4
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description The video width.
     *
     * @example 1080
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return smartSysAvatarModelList
     */
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
