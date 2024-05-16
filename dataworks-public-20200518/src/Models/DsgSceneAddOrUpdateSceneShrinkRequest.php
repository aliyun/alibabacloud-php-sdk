<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgSceneAddOrUpdateSceneShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $scenesShrink;
    protected $_name = [
        'scenesShrink' => 'scenes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenesShrink) {
            $res['scenes'] = $this->scenesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgSceneAddOrUpdateSceneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scenes'])) {
            $model->scenesShrink = $map['scenes'];
        }

        return $model;
    }
}
