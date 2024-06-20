<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @example image_label
     *
     * @var string
     */
    public $sceneType;
    protected $_name = [
        'sceneType' => 'SceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        return $model;
    }
}
