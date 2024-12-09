<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSceneListResponseBody;

use AlibabaCloud\Tea\Model;

class sceneList extends Model
{
    /**
     * @example 840960b85c3c48e0bd7260c1718295fd
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'sceneId'   => 'SceneId',
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
