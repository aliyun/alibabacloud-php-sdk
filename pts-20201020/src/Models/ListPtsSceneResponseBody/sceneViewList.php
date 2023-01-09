<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneResponseBody;

use AlibabaCloud\Tea\Model;

class sceneViewList extends Model
{
    /**
     * @example 2021-02-26 15:28:39
     *
     * @var string
     */
    public $createTime;

    /**
     * @example DFGVS3S
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'sceneId'    => 'SceneId',
        'sceneName'  => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
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
     * @return sceneViewList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
