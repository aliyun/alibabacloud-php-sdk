<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class DeletePtsScenesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sceneIdsShrink;
    protected $_name = [
        'sceneIdsShrink' => 'SceneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneIdsShrink) {
            $res['SceneIds'] = $this->sceneIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePtsScenesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneIds'])) {
            $model->sceneIdsShrink = $map['SceneIds'];
        }

        return $model;
    }
}
