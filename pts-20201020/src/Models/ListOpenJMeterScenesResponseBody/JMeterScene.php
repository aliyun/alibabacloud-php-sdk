<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesResponseBody;

use AlibabaCloud\Tea\Model;

class JMeterScene extends Model
{
    /**
     * @description 压测持续时间
     *
     * @var string
     */
    public $durationStr;

    /**
     * @description 场景id
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 场景名
     *
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'durationStr' => 'DurationStr',
        'sceneId'     => 'SceneId',
        'sceneName'   => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationStr) {
            $res['DurationStr'] = $this->durationStr;
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
     * @return JMeterScene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationStr'])) {
            $model->durationStr = $map['DurationStr'];
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
