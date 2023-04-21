<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponseBody;

use AlibabaCloud\Tea\Model;

class smartSysAvatarModelList extends Model
{
    /**
     * @example yunqiao
     *
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $avatarName;

    /**
     * @example http://ice-pub-media.myalicdn.com/smart/avatarModel/coverDemo/yunqiao.mp4
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example http://ice-pub-media.myalicdn.com/smart/avatarModel/videoDemo/yunqiao.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'avatarId'   => 'AvatarId',
        'avatarName' => 'AvatarName',
        'coverUrl'   => 'CoverUrl',
        'videoUrl'   => 'VideoUrl',
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
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
