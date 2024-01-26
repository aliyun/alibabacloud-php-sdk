<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20181111\Models\ListRunnableScenesResponseBody\scenes;

use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'duration'     => 'Duration',
        'modifiedTime' => 'ModifiedTime',
        'sceneId'      => 'SceneId',
        'sceneName'    => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
     * @return scene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
