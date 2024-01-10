<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\ListMotionShopTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var float[]
     */
    public $box;

    /**
     * @var string
     */
    public $coverUrl;
    protected $_name = [
        'avatarId' => 'AvatarId',
        'box'      => 'Box',
        'coverUrl' => 'CoverUrl',
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
        if (null !== $this->box) {
            $res['Box'] = $this->box;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return material
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
            }
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        return $model;
    }
}
