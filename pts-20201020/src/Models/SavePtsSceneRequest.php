<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene;
use AlibabaCloud\Tea\Model;

class SavePtsSceneRequest extends Model
{
    /**
     * @var scene
     */
    public $scene;
    protected $_name = [
        'scene' => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = null !== $this->scene ? $this->scene->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SavePtsSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            $model->scene = scene::fromMap($map['Scene']);
        }

        return $model;
    }
}
