<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesResponseBody;

use AlibabaCloud\Tea\Model;

class JMeterScene extends Model
{
    /**
     * @example 10分钟
     *
     * @var string
     */
    public $durationStr;

    /**
     * @example DYYPZIH
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'durationStr' => 'DurationStr',
        'sceneId'     => 'SceneId',
        'sceneName'   => 'SceneName',
        'status'      => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
